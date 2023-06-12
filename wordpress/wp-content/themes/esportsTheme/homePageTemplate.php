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

    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/backgroundimg.jpg" alt="apex_logo">
   
    <?php wp_footer() ?>

</body>

</html>