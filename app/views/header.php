<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php //echo URL ?>assets/css/styles.css"> -->
    <script src="<?php echo URL ?>assets/js/jquery.js"></script>
    <?php
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script src="' . URL . 'assets/js/' . $js . '"></script>';
    }
}
?>
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="<?php echo URL ?>index">index</a></li>
        <li class="nav-item active"><a class="nav-link" href="<?php echo URL ?>help">help</a></li>
        <?= (!isset($_SESSION['logged']) || $_SESSION['logged']==false) ? '<li class="nav-item"><a class="nav-link" href="'. URL . 'login">login</a></li>' : '' ; ?>
        <?= (isset($_SESSION['logged']) && $_SESSION['logged']==true) ? '<li class="nav-item"><a class="nav-link" href="'. URL . 'dashboard">dashboard</a></li>' : '' ; ?>
        <?= (isset($_SESSION['logged']) && $_SESSION['logged']==true && $_SESSION['role']=='owner') ? '<li class="nav-item"><a class="nav-link" href="'. URL . 'user/users">users</a></li>' : '' ; ?>
    </ul>
    </div>
</nav>
