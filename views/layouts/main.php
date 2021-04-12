<?php

use app\core\Helpers;
$helper = new Helpers();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <link rel="icon" href="<?php $helper->url('icon_1.ico');?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $helper->url('icon_1.ico');?>" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $helper->url('bootstrap/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $helper->url('css/custom.css');?>">

    <title><?php

echo $this->title ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $helper->route("");?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $helper->route("contact");?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $helper->route("products");?>">Products</a>
                </li>
            </ul>
            <?php use app\core\Application;

            if (Application::isGuest()): ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $helper->route("login");?>">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $helper->route("register");?>">Register</a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $helper->route("profile");?>">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $helper->route("logout");?>">
                            Welcome <?php echo Application::$app->user->getDisplayName() ?> (Logout)
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>

    
            <div class="container">
                <?php if (Application::$app->session->getFlash('success')): ?>
                    <div class="alert alert-success">
                        <p><?php echo Application::$app->session->getFlash('success') ?></p>
                    </div>
                <?php endif; ?>
                {{content}}
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo $helper->url('js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo $helper->url('js/popper.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo $helper->url('bootstrap/bootstrap.min.js');?>"></script>
    <?php if(isset($this->jsFile))?><script type="text/javascript" src="<?php echo $helper->url('js/custom/'.$this->jsFile);?>.js"></script>
</body>
</html>