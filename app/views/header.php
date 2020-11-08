<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/styles.css">
    <script src="<?php echo URL ?>assets/js/jquery.js"></script>
    <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script src="'. URL . '../app/views/' . $js . '"></script>';
            } 
        }
        ?>
    <title>Document</title>
</head>
<body>

<nav class="nav">
    <ul>
        <li><a href="<?php echo URL ?>index">index</a></li>
        <li><a href="<?php echo URL ?>help">help</a></li>
        <li><a href="<?php echo URL ?>login">login</a></li>
    </ul>
</nav>
