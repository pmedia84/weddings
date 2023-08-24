<?php
//email settings for contact forms
//Settings for all form scripts

/// Define who the emails get sent to from forms filled out
$email_to = "amymale1241@hotmail.co.uk";

$host = "mail.karlandamywed23.co.uk"; /// Hostname
$username = "webmaster@karlandamywed23.co.uk"; ///Username
$pass = "WeddingKarlAmy2023"; /// Password
$from = $username; ///Email address

$fromname = "Webmaster"; /// Username and how you want your name to be displayed on emails
$emailheaderlogo = "https://".$_SERVER['SERVER_NAME']."/admin/assets/img/logo.png"; //logo url for inserting into the top of email bodies