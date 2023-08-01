<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?= $meta_description; ?>" />
  <title><?= $meta_page_title; ?></title>

  <!-- Theme Color for safari and mobile browsers -->
  <meta name="theme-color" content="#7E688C" />
  <!-- OG Meta Tags -->
  <meta property="og:title" content="<?= $og_title_content = $meta_page_title; ?>" />
  <meta property="og:description" content="<?= $og_title_content = $meta_description; ?>" />
  <meta property="og:image" content="<?= $og_title_content; ?>" />
  <meta property="og:url" content="<?= $og_title_content; ?>" />
  <meta property="og:type" content="Website" />
  <noscript>
    <div class="alert-card container">
        <h2>Warning</h2>
        <p>Our website uses Javascript to function correctly. Javascript appears to not be enabled on your browser.</p>
        <p>Please check your settings and refresh our website.</p>
    </div>
  </noscript>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Long Sutton",
        "addressRegion": "Spalding",
        "postalCode": "PE12 9DN",
        "streetAddress": "36A Daniels Gate"
      },
      "name": "Parrot Media",
      "openingHours": [
        "Mo-Fr 09:00-16:30"
      ],

      "telephone": "07502 945108",
      "url": "https://www.parrotmedia.co.uk"
    }
  </script>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>