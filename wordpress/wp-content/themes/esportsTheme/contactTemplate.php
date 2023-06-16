<?php /* Template Name: contact page */?>

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

    <main class="mainContainer">
        <div class="hidden">
            <section class="contactsSection">
                <!-- <div class="contact-box"> -->
                <form class="form-box">
                    <h1>Contact us<span class="textColorChange">.</span></h1>
                    <input type="text" class="input-field" placeholder="First name" name='firstname' autofocus>
                    <input type="email" class="input-field" placeholder="Your Email" name='email' required>
                    <input type="text" class="input-field" placeholder="Subject" name='subject'>
                    <textarea type="text" class="input-field text-area" placeholder="Your message" name='message'
                        required></textarea>
                    <input type="submit" class="send-message-button" value="Send message">
                </form>
                <!-- </div> -->
            </section>
        </div>
    </main>

    <?php wp_footer(); ?>
    
</body>

</html>