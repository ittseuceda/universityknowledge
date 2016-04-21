<!doctype html>
<head>

    <!-- Meta -->
    <meta charset="utf-8">

    <!-- UNIVERSITY KNOWLEDGE-->
    <title>University Knowledge ~ Find information about your professors</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Favicons -->
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="https://cdn4.iconfinder.com/data/icons/everyday-objects-1/128/graduation-cap-512.png">

    <!-- Styles -->
    <!-- Minified bootstrap framework -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Icons ~ Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!--  -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300|Pathway+Gothic+One">

    <style>
        ::selection {
            background: #000;
            color: #fff;
        }
        ::-moz-selection {
            background: #000;
            color: #fff;
        }
        body {
            font-family: 'Pathway Gothic One', sans-serif;
            height: 2000px;
        }
        a {
            -webkit-transition: all 310ms ease;
            -moz-transition: all 310ms ease;
            transition: all 310ms ease;
            text-decoration: none !important;
        }
        section {
            position: relative;
        }
        #topper {
            margin-top: 51px;
            height: 450px;
            text-align: center;
        }
        #topper svg {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }
        #topper h1 {
            position: absolute;
            color: #fff;
            left: 50%;
            top: 50%;
            -o-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            margin: 0;
            font-size: 80px;
            text-transform: uppercase;
        }
        #topper h1 i {
            color: rgb(255, 157, 157);
        }
        article {
            padding: 50px 0;
        }
        article table {
            background: #e3e3e3;
        }
        article .content .wrap {
            background: rgba(255, 27, 53, 0.8);
            margin-bottom: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        article .content .wrap h2 {
            margin: 10px 0 15px;
            color: #fff;
        }
        article .content .wrap td {
            font-size: 20px;
        }
        article .fa-times {
            color: rgb(255, 69, 69);
        }
        article .fa-check {
            color: rgb(0, 179, 64);
        }
        #site-footer {
            background: #05003D;
            padding: 100px 0;
            color: #e3e3e3;
            font-size: 35px;
        }
        #site-footer a {
            color: #fff;
        }
        #site-footer a:hover {
            color: rgb(144, 255, 184);
        }
    </style>

</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">University Knowledge</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                  <li><a href="index.php">Find Professors</a></li>
                  <li><a href="index.php">Add Professors</a></li>
                  <li><a href="https://www.launchcode.org/cs50x">CS50xMiami</a>

                    <!-- <li><a href="https://twitter.com/scotch_io">@scotch_io</a></li>
                    <li><a href="https://twitter.com/nickforthought">@nickforthought</a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <section id="topper" style="background-image: url('data:image/svg+xml;base64,<?php echo base64_encode('<svg xmlns="http://www.w3.org/2000/svg" version="1.1"><defs id="defs4"><filter color-interpolation-filters="sRGB" id="filter3115"><feTurbulence type="fractalNoise" numOctaves="1" baseFrequency="0.9" id="feTurbulence3117"/><feColorMatrix result="result5" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 6 -4.15 " id="feColorMatrix3119"/><feComposite in2="result5" operator="in" in="SourceGraphic" result="result6" id="feComposite3121"/><feMorphology in="result6" operator="dilate" radius="1" result="result3" id="feMorphology3123"/></filter></defs><rect width="100%" height="100%" x="0" y="0" id="rect2985" fill="#000000"/><rect width="100%" height="100%" x="0" y="0" id="rect2985" style="fill:#FF4343;filter:url(#filter3115)"/></svg>'); ?>');">
      <div class="btn-group">
        <!--<div><button type="button" class="btn btn-primary">Find Professors</button></div>

        <div><button type="button" class="btn btn-primary">Add Professors</button></div>-->
      </div>
      <div><h1>Welcome to <br>University Knowledge!</br><i class="fa fa-book"></i></h1></div>


    </section>


  </body>

    <footer id="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <!-- goes to CS50xMiami website -->
                    Made with <td><i class="fa fa-heart"></i></td> from <a href="https://www.launchcode.org/cs50x">a CS50xMiami </a><a href="https://github.com/ittseuceda/">student</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</html>
