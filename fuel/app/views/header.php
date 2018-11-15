
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <?php echo Asset::css('font-awesome.css'); ?>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('general.css'); ?>
        <?php echo Asset::css('commun.css'); ?>
    <h1>Suivi des dépenses</h1>
    <a href="<?php echo Uri::base() . 'auth/logout'; ?>" class="btn btn-warning"><i class="fa fa-lock"></i> Logout</a>
          
    </head>
    
    <body>     
  
        <?php echo View::forge('messages'); ?>