<?php

ini_set('display_errors', '1');
require('./core/init.php');
$calc = new MyMath();
$utils = new Utils();

?>
<!--

 |||||  ||||||  ||  ||  ||   ||     ||||||  ||||||  ||  ||||||  || //   ||||||  ||||||
   ||   ||  ||  ||  ||  |||  ||     ||      ||  ||  ||  ||      ||//    ||        ||
   ||   ||  ||  ||||||  |||| ||     ||      ||||//  ||  ||      ||\\    ||||      ||
|| ||   ||  ||  ||  ||  || ||||     ||      ||  \\  ||  ||      || \\   ||        ||
|||||   ||||||  ||  ||  ||  |||     ||||||  ||  ||  ||  ||||||  ||  \\  ||||||    ||

-->
<!-- starts html page -->
<!DOCTYPE html>
<html lang="pt-BR">
<!-- starts head -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Class MyMath</title>

    <!-- Remote Links -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Local Links -->

    <link rel="stylesheet" href="./css/calc.css">

</head>
<!-- ends head // starts body -->
