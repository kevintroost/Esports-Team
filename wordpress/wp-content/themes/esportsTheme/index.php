<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    <title></title>
</head>

<body>
    <?php wp_head(); ?>

    

    <div class="container"><?php echo get_the_content();?></div>

    <?php wp_footer(); ?>   
</body>

</html>     

