<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php wp_head(); ?>
    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    <?php echo get_the_title(); ?>
       
    <?php get_header() ?> 
   

    <?php get_footer(); ?>

</body>

</html>     

