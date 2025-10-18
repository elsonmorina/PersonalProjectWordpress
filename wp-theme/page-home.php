<?php  get_header(); ?>

<div id="container">
   <div id="inner_container">
       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /images/messi.webp">
       </div>

       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /images/ronaldo.jpg">
       </div>

       <div class="img_container">
           <img src="<?php echo get_template_directory_uri();?> /images/neymar.webp">
       </div>


     <div id="overlay">

       <div id="left_button" class="overlay_button" onclick="onLeftButton()" >←</div>
       <div id="right_button" class="overlay_button" onclick="onRightButton()" >→</div>
     </div>
   </div>
</div>


<div style="text-align:center">
   <span class="dot" onclick="currentSlide(1)"></span>
   <span class="dot" onclick="currentSlide(2)"></span>
   <span class="dot" onclick="currentSlide(3)"></span>
</div>



<div id="content" class="site-content">
   <div id="primary" class="content-area">
     <main id="main" class="site-main">

           <section class="hero">
                Hero
            </section>

            <section class="services">
                <h2>Football</h2>
                <div class="container">
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-1')) {
                             dynamic_sidebar('services-1');
                         }
                      ?>
                   </div>
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-2')) {
                             dynamic_sidebar('services-2');
                         }
                      ?>
                   </div>
                   <div class="services-item">
                      <?php 
                         if(is_active_sidebar('services-3')) {
                             dynamic_sidebar('services-3');
                         }
                      ?>
                   </div>
                </div>
            </section>
       <section class="home-blog">
        <!-- <h2>Latest News</h2> -->

        <div class="container">

           <?php 
             $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'category_in' => array(9,10,15),
                'category__not_in' => array(1)
             );

           $postlist =  new WP_Query( $args);

            if($postlist->have_posts()):
                while($postlist->have_posts()): $postlist->the_post();
                get_template_part('parts/content', 'latest-news');
               endwhile;
               wp_reset_postdata();
            else:?>

<section id="football-news">
  <h2>Latest Football News - October 2025</h2>
  
  <article class="news-article">
    <h3>🇦🇷 Lionel Messi: Argentina’s Star in India</h3>
    <p>
      Lionel Messi and the Argentina national team are set to visit India in October 2025 for an international exhibition match. This visit is part of a new partnership between the Argentine Football Association and HSBC, aiming to promote football in India and Singapore ahead of the 2026 World Cup qualifiers.
    </p>
    <p><a href="https://www.indiatoday.in/amp/sports/football/story/lionel-messi-argentina-india-october-exhibition-match-2699331-2025-03-26" target="_blank" rel="noopener">Read more</a></p>
  </article>

  <article class="news-article">
    <h3>🇧🇷 Neymar: Potential Reunion with Messi and Suárez</h3>
    <p>
      Inter Miami, co-owned by David Beckham, is reportedly pursuing a transfer to reunite Neymar with Lionel Messi and Luis Suárez, recreating Barcelona's iconic "MSN" trio. Neymar, currently at Santos, is open to the idea, especially with the 2026 World Cup approaching.
    </p>
    <p><a href="https://www.thesun.co.uk/sport/36973099/inter-miami-transfer-neymar-lionel-messi-luis-suarez/" target="_blank" rel="noopener">Read more</a></p>
  </article>

  <article class="news-article">
    <h3>🇵🇹 Cristiano Ronaldo: Contract Extension and Golden Boot</h3>
    <p>
      Cristiano Ronaldo has extended his contract with Saudi club Al-Nassr until 2026. At 40, he continues to perform at a high level, recently winning the Saudi Pro League Golden Boot for the second consecutive year with 25 goals and 3 assists in the 2024/2025 season.
    </p>
    <p><a href="https://zamin.uz/en/sport/160541-cristiano-ronaldo-won-the-golden-boot-for-the-second-time-in-saudi-arabia.html" target="_blank" rel="noopener">Read more</a></p>
  </article>
</section>



           <?php endif;  ?>

        </div>
       </section>

     </main>
   </div>
</div>

<?php  get_footer(); ?>