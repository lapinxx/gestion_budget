
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <?php echo Asset::css('font-awesome.css'); ?>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('general.css'); ?>
    </head>
    <body>
        <?php echo View::forge('messages'); ?>