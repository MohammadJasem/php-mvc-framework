<?php

use app\core\Helpers;
$helper = new Helpers();

?>
<!doctype html>
<html lang="en">
        <head>
        <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" type="text/css" href="<?php echo $helper->url('bootstrap/bootstrap.min.css');?>">

                <title>Hello, world!</title>
        </head>
        <body>

                <div class="container">
                {{content}}
                </div>

                <script type="text/javascript" src="<?php echo $helper->url('js/jquery.min.js');?>"></script>
                <script type="text/javascript" src="<?php echo $helper->url('js/popper.min.js');?>"></script>
                <script type="text/javascript" src="<?php echo $helper->url('bootstrap/bootstrap.min.js');?>"></script>
        </body>
</html>