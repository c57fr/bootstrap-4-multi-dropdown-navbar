<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 Navbar with hover multi dropdown</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="hover/css/bootstrap-4-hover-navbar.css" rel="stylesheet">


    <!--Demo purpose css-->
    <style>
        body {
            /* padding-top: 10px; */
        }

        .navbar {
            margin: 20px 0;
        }

        .jumbotron {
            background-color: #1f1f1f;
            color: #fff;
        }

        footer {
            text-align: right;
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- Static navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/hover">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/hover/pages/action.php">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item dropdown-toggle" href="/hover/pages/submenu.php">Submenu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action</a></li>


                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action aa</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action bb</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item dropdown-toggle" href="#">Submenu 2</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Submenu action 2</a></li>
                                <li><a class="dropdown-item" href="#">Another submenu action 2</a></li>


                                <li><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action 1 3</a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 2 3</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu 3</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Subsubmenu action 3 </a></li>
                                        <li><a class="dropdown-item" href="#">Another subsubmenu action 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1>Bootstrap 4 multi dropdown navbar</h1>
        <p>This example of bootstrap 4 navigation with multi dropdown menu.</p>
        <p>
            <a class="btn btn-lg btn-danger"
               href="https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar/" target="_blank"
               role="button">Live Demo</a>
            <a class="btn btn-lg btn-primary"
               href="https://github.com/bootstrapthemesco/bootstrap-4-multi-dropdown-navbar" target="_blank"
               role="button">Download from Github</a>
            <a class="btn btn-lg btn-info"
               href="https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-navbar-hover/" target="_blank"
               role="button">hover version origin</a>
            <a class="btn btn-lg btn-info" href="http://menub4/" role="button">click</a>
        </p>
    </div>
</div>
