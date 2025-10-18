<?php
 /*
   Template Name: Contact Page
 */

get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    wp_head();

    ?>
    <style>
        /* General Styles */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f7f8;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Contact Hero Section */
.contact-hero {
    background-color: #005f73;
    color: white;
    padding: 80px 20px;
    text-align: center;
}

.contact-hero h1 {
    font-size: 3rem;
    margin-bottom: 10px;
}

.contact-hero p {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto;
}

/* Contact Form Section */
.contact-form-section {
    padding: 60px 20px;
    background-color: #ffffff;
}

.contact-form-section .container {
    max-width: 700px;
    margin: 0 auto;
}

.contact-form {
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-form p {
    margin: 0;
}

.contact-form label {
    display: block;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.contact-form input[type="text"]:focus,
.contact-form input[type="email"]:focus,
.contact-form textarea:focus {
    border-color: #00a896;
    outline: none;
    box-shadow: 0 0 0 3px rgba(0, 168, 150, 0.2);
}

.contact-form textarea {
    resize: vertical;
    min-height: 150px;
}

.contact-form input[type="submit"] {
    background-color: #00a896;
    color: white;
    border: none;
    padding: 14px 25px;
    font-size: 1.1rem;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form input[type="submit"]:hover {
    background-color: #028a74;
}

    </style>
</head>
<?php
 if(is_front_page()) {
    $ds = array('ds-theme', 'my-class');
 }else {
    $ds = array('no-ds-theme');
 }
?>
<body <?php body_class($ds )?>>

   <?php

     if(!is_page('landing-page')): ?>
     <section class="menu-area">

    <div class="container">
        <!-- <nav class="main-menu">
            <button class="check-button">
                <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <?php  wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth'=> 2));?>
        </nav> -->
    </div>
     </section>

     <?php endif; ?>
<div id="content" class="site-content">
    <main id="main"  class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you! Whether you have a question, feedback, or a collaboration idea, just drop us a message below.</p>
            </div>
        </section>

        <section class="contact-form-section">
           <div class="container">
              <form action="" method="post" class="contact-form">
                <p>
                    <label for="name">Your Name</label><br>
                    <input type="text" id="emri" name="name" required>
                </p>
                <p>
                    <label for="email">Your Email</label><br>
                    <input type="email" id="email" name="email" required>
                </p>
                 <p>
                    <label for="subject">Subject</label><br>
                    <input type="text" id="subject" name="subject" required>
                </p>
                 <p>
                    <label for="message">Message</label><br>
                    <textarea id="message" name="message" rows="6" required> </textarea>
                </p>
      
                <p>
                
                   <input type="submit" name="submit_contact" value="Send Message"> 
                </p>

              </form>
           </div>
        </section>
    </main>
</div>
<?php get_footer();  ?>