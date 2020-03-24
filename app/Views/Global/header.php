<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav " role="banner">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="?">
                    <img src="images/logo.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                </button>
                <a href="./" class="navbar-brand text-info">CLU - CAT LOVERS UNITE</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="?" class="text-info">Home</a>
                    </li>
                    <li>
                        <a class="nav-link text-info" href="?page=about-us">About us</a>
                    </li>
                    <li>
                        <a class="nav-link text-info" href="?page=chat">Chat</a>
                    </li>
                    <li>
                        <a class="nav-link text-info" href="?page=articles">Articles</a>
                    </li>
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="?page=log-out">Log out</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="?page=login">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="?page=registration">Register</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>