<?php /* Template Name: CustomPage */?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <?php wp_nav_menu() ?>
    
    <div class="content-container">
        <?php echo get_the_content(); ?>    
    <div>

    <?php get_footer() ?>

</body>

</html>
