<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/phpmailer/phpmailer/src/SMTP.php';
//Load Composer's autoloader
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
//load db and connect
//Error codes
//! 400: file not found
//! 500: db connect error
function dbconnect()
{
    //config file name
    $config_file = "config.json";
    //load the db connect json file
    try {
        if (file_exists($config_file) == FALSE) {
            throw new Exception("", 400);
        }
    } catch (Exception $e) {
        echo "<div class='container'>
            <h1>Connection failed: </h1> <p>Error Code " . $e->getCode() . "</p>
        </div>";
        exit;
    }
    //connect to database
    $config = file_get_contents($config_file);
    //decode json file
    $file = json_decode($config, true);
    //set up variables
    $db_host = $file['db']['db_host'];
    $db_user = $file['db']['user_name'];
    $db_pw = $file['db']['pw'];
    $db_name = $file['db']['db_name'];


    try {
        return new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pw);
        // set the PDO error mode to exception


    } catch (PDOException $e) {
        echo "<div class='container'>
            <h1>Connection failed: </h1> <p>Error Code " . $e->getCode() . "</p>
        </div>";

        exit;
    }
}

class Service
{
    public $service_id;

    //add to basket
    function add_to_cart($id)
    {
        $this->service_id = $id;

        if($_SESSION['cart']['service_id'] = $this->service_id){
            return 200;
        }


        
    }
}

class Client
{
    public $name;
    public $street_address;
    public $city;
    public $county;
    public $post_code;
    public $tel;
    public $email;
    public $business_name;
    public $domain;
    public $message;
    function __construct()
    {
        $this->name = $_POST['name'];
        $this->street_address = $_POST['street_address'];
        $this->city = $_POST['city'];
        $this->county = $_POST['county'];
        $this->post_code = $_POST['post_code'];
        $this->tel = $_POST['tel'];
        $this->email = $_POST['email'];
        $this->business_name = $_POST['business_name'];
        $this->domain = $_POST['url'];
        $this->message = $_POST['message'];
    }
    function Save_Client()
    {
        // Save the form POST into the session variables so it can be edited if needed.
        $_SESSION['client'] = array(
            "name" => $this->name,
            "street_address" => $this->street_address,
            "city" => $this->city,
            "county" => $this->county,
            "post_code" => $this->post_code,
            "tel" => $this->tel,
            "email" => $this->email,
            "business_name" => $this->business_name,
            "url" => $this->domain,
            "message" => $this->message
        );
    }
}

class Order
{
    //client order class
    public $name;
    public $street_address;
    public $city;
    public $county;
    public $post_code;
    public $tel;
    public $email;
    public $business_name;
    public $domain;
    public $message;
    public $service_id;
    function __construct()
    {
        $this->name = $_SESSION['client']['name'];
        $this->street_address = $_SESSION['client']['street_address'];
        $this->city = $_SESSION['client']['city'];
        $this->county = $_SESSION['client']['county'];
        $this->post_code = $_SESSION['client']['post_code'];
        $this->tel = $_SESSION['client']['tel'];
        $this->email = $_SESSION['client']['email'];
        $this->business_name = $_SESSION['client']['business_name'];
        $this->domain = urlencode($_SESSION['client']['url']);
        $this->message = htmlentities($_SESSION['client']['message']);
        $this->service_id = $_SESSION['cart']['service_id'];
    }
    function New_order()
    {

        //Error Codes
        //!200 = Success
        //!400 = Error
        //!403 = Security check failed
        $response_code = 200;
        //response message
        $msg = "";
        //Recaptcha score
        $score = "";
        //load db connection
        $db = dbconnect();
        //load email config file
        //config file name
        $config_file = "config.json";
        //load the email connect json file
        try {
            if (file_exists($config_file) == FALSE) {
                throw new Exception("", 400);
            }
        } catch (Exception $e) {
            echo "<div class='container'>
            <h1>Connection failed: </h1> <p>Error Code " . $e->getCode() . "</p>
        </div>";
            exit;
        }
        //load config file
        $config = file_get_contents($config_file);
        //decode json file
        $file = json_decode($config, TRUE);
        //set up variables
        $email_to = $file['email_config']['email_to'];
        $host = $file['email_config']['host'];
        $username = $file['email_config']['username'];
        $pw = $file['email_config']['pw'];
        $fromname = $file['email_config']['fromname'];
        //recaptcha settings
        $site_key = $file['recaptcha']['site_key'];
        $site_key = $file['recaptcha']['secret_key'];
        //save the new client first
        $client = $db->prepare('INSERT INTO clients (client_name, client_address, client_city, client_county, client_post_code, client_tel, client_email, client_business_name, client_url) VALUES(:client_name,:client_address,:client_city,:client_county,:client_post_code,:client_tel,:client_email,:client_business_name,:client_url) ');
        $order = $db->prepare('INSERT INTO client_order (client_id,service_id, order_date, client_message) VALUES(:client_id,:service_id,:order_date,:client_message)');
        //bind client details
        $client->bindParam(":client_name", $this->name);
        $client->bindParam(":client_address", $this->street_address);
        $client->bindParam(":client_city", $this->city);
        $client->bindParam(":client_county", $this->county);
        $client->bindParam(":client_post_code", $this->post_code);
        $client->bindParam(":client_tel", $this->tel);
        $client->bindParam(":client_email", $this->email);
        $client->bindParam(":client_business_name", $this->business_name);
        $client->bindParam(":client_url", $this->domain);
        $client->execute();
        // new client ID
        $client_id = $db->lastInsertId();

        //bind order details
        $order->bindParam(":client_id", $client_id);
        $order->bindParam(":service_id", $this->service_id);
        $order_date = date("Y-m-d", time());
        $order->bindParam(":order_date", $order_date);
        $order->bindParam(":client_message", $this->message);
        $order->execute();
        //new order ID
        $order_id = $db->lastInsertId();
        unset($_SESSION['cart'], $_SESSION['client']);
        //save order ID and customer ID in the session variable
        $_SESSION['client_id'] = $client_id;
        $_SESSION['order_id'] = $order_id;
        $order_id = $order_id + 1000;
        //*load service details
        //load products
        $service = $db->prepare('SELECT * FROM services WHERE service_id=' . $this->service_id);
        $service->execute();
        $service_r = $service->fetch();
        //send email confirmation
        //load template
        $body = file_get_contents("./inc/Email_template-new-order.html");
        //* Email body
        $body = str_replace(["{{client_name}}"], [$this->name], $body);
        $body = str_replace(["{{service_name}}"], [$service_r['service_name']], $body);
        $body = str_replace(["{{service_price}}"], [$service_r['service_price']], $body);
        $body = str_replace(["{{street_address}}"], [$this->street_address], $body);
        $body = str_replace(["{{city}}"], [$this->city], $body);
        $body = str_replace(["{{county}}"], [$this->county], $body);
        $body = str_replace(["{{post_code}}"], [$this->post_code], $body);
        $body = str_replace(["{{tel}}"], [$this->tel], $body);
        $body = str_replace(["{{email}}"], [$this->email], $body);
        $body = str_replace(["{{business_name}}"], [$this->business_name], $body);
        $body = str_replace(["{{url}}"], [$this->domain], $body);
        $body = str_replace(["{{message}}"], [$this->message], $body);
        $body = str_replace(["{{order_id}}"], [$order_id], $body);
        //* Subject
        $subject = $this->name . " has placed an order";
        $fromserver = $username;
        $email_to = $email_to;
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->Host = $host; // Enter your host here
        $mail->SMTPAuth = true;
        $mail->Username = $username; // Enter your email here
        $mail->Password = $pw; //Enter your password here
        $mail->Port = 25;
        $mail->From = $username;
        $mail->FromName = $fromname;
        $mail->Sender = $fromserver; // indicates ReturnPath header
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->IsHTML(true);
        $mail->AddAddress($email_to);
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        
        //!email confirmation to client
        $confirmation_body = file_get_contents("./inc/Email_template-new-order-confirmation.html");
        //* Email confirmation_body
        $confirmation_body = str_replace(["{{client_name}}"], [$this->name], $confirmation_body);
        $confirmation_body = str_replace(["{{service_name}}"], [$service_r['service_name']], $confirmation_body);
        $confirmation_body = str_replace(["{{service_price}}"], [$service_r['service_price']], $confirmation_body);
        $confirmation_body = str_replace(["{{street_address}}"], [$this->street_address], $confirmation_body);
        $confirmation_body = str_replace(["{{city}}"], [$this->city], $confirmation_body);
        $confirmation_body = str_replace(["{{county}}"], [$this->county], $confirmation_body);
        $confirmation_body = str_replace(["{{post_code}}"], [$this->post_code], $confirmation_body);
        $confirmation_body = str_replace(["{{tel}}"], [$this->tel], $confirmation_body);
        $confirmation_body = str_replace(["{{email}}"], [$this->email], $confirmation_body);
        $confirmation_body = str_replace(["{{business_name}}"], [$this->business_name], $confirmation_body);
        $confirmation_body = str_replace(["{{url}}"], [$this->domain], $confirmation_body);
        $confirmation_body = str_replace(["{{message}}"], [$this->message], $confirmation_body);
        $confirmation_body = str_replace(["{{order_id}}"], [$order_id], $confirmation_body);
        //* Subject
        $subject = "Order confirmation - Parrot Media";
        $fromserver = $username;
        $client_email_to = $this->email;
        $email_confirmation = new PHPMailer(true);
        $email_confirmation->IsSMTP();
        $email_confirmation->Host = $host; // Enter your host here
        $email_confirmation->SMTPAuth = true;
        $email_confirmation->Username = $username; // Enter your email here
        $email_confirmation->Password = $pw; //Enter your password here
        $email_confirmation->Port = 25;
        $email_confirmation->From = $username;
        $email_confirmation->FromName = $fromname;
        $email_confirmation->Sender = $fromserver; // indicates ReturnPath header
        $email_confirmation->Subject = $subject;
        $email_confirmation->Body = $confirmation_body;
        $email_confirmation->IsHTML(true);
        $email_confirmation->AddAddress($client_email_to);
        if (!$email_confirmation->Send()) {
            echo "Mailer Error: " . $email_confirmation->ErrorInfo;
        }
    }
}
