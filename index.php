<?php
    require 'Controller/HomeController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ManageForm</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css" class="css"/>
    <link rel="stylesheet" href="./asset/css/style.css" class="css">
    <script src="./asset/js/jquery-3.3.1.min.js"></script>
    <script src="./asset/js/bootstrap.js"></script>
    <script src="./asset/js/popper.min.js"></script>
</head>
<body>
<?php require $controller->view ?>
</body>
</html>