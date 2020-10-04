<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL;?>Public/css/default.css">
    <script type="text/javascript" src="<?= URL;?>Public/js/jquery.js"></script>
    <script type="text/javascript" src="<?= URL;?>Public/js/custom.js"></script>
    <title>Test</title>
</head>
<body>
<?php //Session::init();?>
    <div id="header">
        header
        <br/>
        <a href="<?= URL;?>index">index</a>
        <a href="<?= URL;?>help">help</a>
        <?php if(Session::get('loggedIn') == true):?>
            <a href="<?= URL;?>dashboard/logout">logout</a>
        <?php else:?>
            <a href="<?= URL;?>login">login</a>
        <?php endif;?>
    </div>
    <div id="content">