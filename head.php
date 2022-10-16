<?php
// This file holds the page header and expects to find teh title in $mytitle
if (!defined('ISITSAFETORUN')) {
    // This provides protection against file being called directly - if it is, ISITSAFETORUN will not be defined
    die('This file does no useful work alone'); // and so this warning message will be issued
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect dns-prefetch" href="https://www.googletagmanager.com" crossorigin>
    <script type="text/plain" data-cookiecategory="analytics" async src="https://www.googletagmanager.com/gtag/js?id=G-GPX7DGBX6B"></script>
  <script type="text/plain" data-cookiecategory="analytics">
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-GPX7DGBX6B');
  </script>
    <title>Bromley Driving School - <?php echo $mytitle ?></title>
    <meta content="<?php echo $seodescription ?>" name="description">
    <meta content="<?php echo $keywords ?>" name="keywords">
    <meta name="theme-color" content="#d1e7dd">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bromley Driving School - <?php echo $mytitle ?>.">
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="/img/logos/favicon.ico">
    <link href="img/logos/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,900&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link as="style" href="css/bootstrap.min.css" onload="this.onload=null;this.rel='stylesheet'" rel="preload" />
    <link rel="stylesheet" href="css/cookieconsent.css" media="print" onload="this.media='all'">
    <!-- Template Main CSS File -->
    <link as="style" href="css/style.css" onload="this.onload=null;this.rel='stylesheet'" rel="preload" />
</head>

<body>