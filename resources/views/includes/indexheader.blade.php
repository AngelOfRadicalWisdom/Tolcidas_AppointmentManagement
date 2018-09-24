<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("https://cdn.pixabay.com/photo/2016/11/29/12/50/bookcase-1869616_960_720.jpg");
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("/w3images/parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=password], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        

        .button {
            width:60%;
            background-color:		#282828;
            border: none;
            color: white;
            padding: 20px 3px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {opacity: 1}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4c8caf;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #4cafad;
}

.active {
    background-color: #4cafad;
}
img {
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="http://localhost:8000/" class="w3-bar-item w3-button">HOME</a>
    
    <a href="http://localhost:8000/register" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Register</a>
    <a href="http://localhost:8000/login" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Login</a>
    
      
    </a>
  </div>
  

<!-- <div class="navbar-div">
    <table class="navbar-table">
        <tr class="navbar-row">
            <td class="title"><h3><a href="http://localhost:8000/" class="header-link">Phlaven</a></h3></td>
            <td class="nav"></td>
            <td class="nav"></td>
            <td class="nav"></td>
            <td class="nav"><a href="http://localhost:8000/register" class="header-link">Register</a></td>
            <td class="nav"><a href="http://localhost:8000/login" class="header-link">Login</a></td>
        </tr>
    </table>
</div> -->