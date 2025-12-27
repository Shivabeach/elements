<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <script>
    let localS = localStorage.getItem("theme"),
      themeToSet = localS
    document.documentElement.setAttribute("data-theme", themeToSet)
  </script>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
  let FF_FOUC_FIX;
  </script>
</head>