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



    <?php wp_content() ?>

    <!-- <div class="container">
        <section class="content">
            <p1 class=""> </p1>
            <img src="" alt=""> 
        </section>

        <section class="content">
            <img src="" alt="">
            <p1 class=""> </p1>
        </section>
    </div> -->

    <?php get_sidebar() ?>

    <?php get_footer() ?>

</body>

</html>