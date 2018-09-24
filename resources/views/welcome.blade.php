<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Phlaven</title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        @include('styles.style')
        @include('styles.jquery')
    </head>
    <body class="bgimg w3-display-container w3-opacity-min" id="home">
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        @include('includes.indexheader')
    <br><br><br><br><br><br><br><br>
        <center>
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small">P H L A V E N</span></span>
 
<br>
</center>
<br><br><br>
           <center> <a href="\admin\home" class="button">Start as Reviewee</a>
            <a href="register" class="button">Start as Review Center</a></center>
            
            </div>
</div>
    </body>
</html>
