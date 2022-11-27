<?php
        function popup($currect_page){
            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
            $url = end($url_array);  
            if($currect_page == $url){
                echo "<style>

        /* The Modal (background) */
        .modal {
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
          -webkit-animation-name: fadeIn; /* Fade in the background */
          -webkit-animation-duration: 0.4s;
          animation-name: fadeIn;
          animation-duration: 0.4s
        }
        #modalPop{
        display: block; /* Hidden by default */
      }
        .background {
          position: absolute;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          background-size: cover;
          background-position: center;
        }
        .modalbox.success,
        .modalbox.error {
          box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
          transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
          border-radius: 2px;
          background: #2a2a2a;
          padding: 25px 25px 15px;
          text-align: center;
        }
        #modalPop h1{
            font-size:2rem;
            color:white;
            font-weight: 600
        }

        #modalPop p{
            font-size:16px;
            color:white
        }
        .modalbox {
            width: 33vw;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .modalbox.success.animate .icon,
        .modalbox.error.animate .icon {
          -webkit-animation: fall-in 0.75s;
          -moz-animation: fall-in 0.75s;
          -o-animation: fall-in 0.75s;
          animation: fall-in 0.75s;
          box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }
        
        .modalbox.success h1,
        .modalbox.error h1 {
          font-family: 'Montserrat', sans-serif;
        }
        .modalbox.success p,
        .modalbox.error p {
          font-family: 'Open Sans', sans-serif;
        }
        .modalbox.success button,
        .modalbox.error button,
        .modalbox.success button:active,
        .modalbox.error button:active,
        .modalbox.success button:focus,
        .modalbox.error button:focus {
          -webkit-transition: all 0.1s ease-in-out;
          transition: all 0.1s ease-in-out;
          -webkit-border-radius: 30px;
          -moz-border-radius: 30px;
          border-radius: 50px;
          margin-top: 15px;
          margin-bottom: 15px;
          width: 80%;
          background: transparent;
          color: #4caf50;
          border-color: #4caf50;
          outline: none;
          cursor: pointer;
          padding: 12px;
        }
        .modalbox.success button:hover,
        .modalbox.error button:hover,
        .modalbox.success button:active:hover,
        .modalbox.error button:active:hover,
        .modalbox.success button:focus:hover,
        .modalbox.error button:focus:hover {
          color: #fff;
          background: #4caf50;
          border-color: transparent;
        }
        .modalbox.success .icon,
        .modalbox.error .icon {
          position: relative;
          margin: 0 auto;
          margin-top: -75px;
          background: #4caf50;
          height: 100px;
          width: 100px;
          border-radius: 50%;
          display: flex;
            align-content: center;
            justify-content: center;
        }
        .modalbox.success .icon span,
        .modalbox.error .icon span {
          position: absolute;
          font-size: 4em;
          color: #fff;
          text-align: center;
          padding-top: 20px;
        }
        .modalbox.error button,
        .modalbox.error button:active,
        .modalbox.error button:focus {
          color: #f44336;
          border-color: #f44336;
        }
        .modalbox.error button:hover,
        .modalbox.error button:active:hover,
        .modalbox.error button:focus:hover {
          color: #fff;
          background: #f44336;
        }
        .modalbox.error .icon {
          background: #f44336;
        }
        .modalbox.error .icon span {
          padding-top: 25px;
        }
        .center {
          float: none;
          margin-left: auto;
          margin-right: auto;
        /* stupid browser compat. smh */
        }
        .center .change {
          clear: both;
          display: block;
          font-size: 10px;
          color: #ccc;
          margin-top: 10px;
        }
        
        .glyphicon img{
            width: 70%;
            display: block;
        }
        
        .glyphicon{
        display: grid;
        place-content: center;
        justify-items: center;
        
        }
        @-webkit-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-moz-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-o-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-webkit-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 25%;
          }
        }
        @-moz-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 25%;
          }
        }
        @-o-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 25%;
          }
        }
        @-moz-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-webkit-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-o-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-moz-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @-webkit-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @-o-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @-moz-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-webkit-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-o-keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @keyframes fall-in {
          0% {
            -ms-transform: scale(3, 3);
            -webkit-transform: scale(3, 3);
            transform: scale(3, 3);
            opacity: 0;
          }
          50% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
            opacity: 1;
          }
          60% {
            -ms-transform: scale(1.1, 1.1);
            -webkit-transform: scale(1.1, 1.1);
            transform: scale(1.1, 1.1);
          }
          100% {
            -ms-transform: scale(1, 1);
            -webkit-transform: scale(1, 1);
            transform: scale(1, 1);
          }
        }
        @-moz-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @-webkit-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @-o-keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        @keyframes plunge {
          0% {
            margin-top: -100%;
          }
          100% {
            margin-top: 15%;
          }
        }
        
        
        /* Add Animation */
        @-webkit-keyframes slideIn {
          from {bottom: -300px; opacity: 0} 
          to {bottom: 0; opacity: 1}
        }
        
        @keyframes slideIn {
          from {bottom: -300px; opacity: 0}
          to {bottom: 0; opacity: 1}
        }
        
        @-webkit-keyframes fadeIn {
          from {opacity: 0} 
          to {opacity: 1}
        }
        
        @keyframes fadeIn {
          from {opacity: 0} 
          to {opacity: 1}
        }

        @media screen and (max-width: 760px) {
          .modalbox {
            width: 90%;
          }
      
        }
       
        </style>"; //class name in css 
    } 
  }
 ?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
  <title>UVUE-Togo</title>
  <meta name="author" content="Mannat Studio">
  <meta name="description" content="Gracious is a Responsive HTML5 Template for Charity and NGO related services.">
  <meta name="keywords"
    content="Gracious, responsive, html5, charity, charity agency, charity foundation, charity template, church, donate, donation, fundraiser, fundraising, mosque, ngo, non-profit, nonprofit, organization, volunteer">

  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo_white.png">

  <link href="assets/library/animate/animate.min.css" rel="stylesheet">

  <link href="assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/library/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/library/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/library/select2/css/select2.min.css" rel="stylesheet">

  <link href="assets/library/magnific-popup/magnific-popup.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/home-main.css">
 
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?= popup('nos-actions.php');?>
</head>