
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
      /* ==== Global Styles ==== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  background-color: #0d0f14;
  color: #f5f5f5;
  line-height: 1.6;
  overflow-x: hidden;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
}

/* ==== Header ==== */
.header {
  background: rgba(0, 0, 0, 0.7);
  position: fixed;
  width: 100%;
  z-index: 100;
  padding: 0.8rem 0;
  backdrop-filter: blur(6px);
}

.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  color: #00e676;
  font-size: 1.6rem;
  font-weight: 700;
  letter-spacing: 1px;
}

.logo span {
  color: #fff;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-links a:hover {
  color: #00e676;
}

/* ==== Hero Section ==== */
.hero {
  height: 100vh;
  background: url("https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1920&q=80") center/cover no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  position: relative;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
}

.hero-content {
  z-index: 1;
  max-width: 700px;
  padding: 2rem;
  animation: fadeIn 2s ease forwards;
}

.hero-content h1 {
  font-size: 3rem;
  color: #00e676;
}

.hero-content p {
  margin: 1rem 0;
  font-size: 1.2rem;
}

.btn {
  display: inline-block;
  background: #00e676;
  color: #111;
  padding: 0.8rem 1.8rem;
  border-radius: 30px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s ease;
}

.btn:hover {
  background: #00c853;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ==== News Section ==== */
.news {
  padding: 5rem 0;
  background: #14161b;
}

.news h2 {
  text-align: center;
  color: #00e676;
  margin-bottom: 3rem;
}

.news-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.news-card {
  background: #1c1f26;
  border-radius: 10px;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.news-card:hover {
  transform: translateY(-8px);
}

.news-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}

.news-card h3 {
  padding: 1rem;
  color: #00e676;
}

.news-card p {
  padding: 0 1rem 1rem;
  color: #ccc;
}

/* ==== Matches ==== */
.matches {
  padding: 5rem 0;
  background: #0f1116;
  text-align: center;
}

.matches h2 {
  color: #00e676;
  margin-bottom: 2rem;
}

.match-grid {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.match {
  background: #1c1f26;
  padding: 1rem 1.5rem;
  border-radius: 8px;
  display: flex;
  justify-content: space-between;
  color: #ccc;
}

.match .teams {
  color: #fff;
  font-weight: 600;
}

/* ==== Footer ==== */
footer {
  background: #0a0c10;
  text-align: center;
  padding: 1rem;
  color: #888;
  font-size: 0.9rem;
}

/* ==== Responsive ==== */
@media (max-width: 768px) {
  .nav-links { display: none; }
  .hero-content h1 { font-size: 2.2rem; }
  .match { flex-direction: column; gap: 0.5rem; }
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
        <nav class="main-menu">
            <button class="check-button">
                <div class="menu-icon">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <?php  wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth'=> 2));?>
        </nav>
    </div>
     </section>

     <?php endif; ?>


<!-- <div id="content" class="site-content">
   <div id="primary" class="content-area">
      <main id="main" class="site-main">
         <h1>Football</h1>
         <div class="container">
           <div class="blog-items">

               <?php
               
                 if(have_posts()):
                    while(have_posts()): the_post();
                    get_template_part('parts/content');
                    endwhile;
               ?>

                <div class="wpdevs-pagination">
                    <div class="pages new">

                       <?php previous_posts_link("<< Newer posts"); ?>
                    </div>
                    <div class="pages old">

                       <?php previous_posts_link("<< Older posts"); ?>
                    </div>
                </div>
                 <?php
                   else:
                 ?>
                 <p>Nothing yet to be displayed!</p>
                 <?php endif; ?>
           </div>
              <?php get_sidebar();  ?>
         </div>
      </main>

   </div>
</div> -->

<!-- HERO SECTION -->
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Experience the World of Football</h1>
      <p>News, matches, and all the emotions of football — right at your fingertips.</p>
      <a href="#" class="btn">Discover More</a>
    </div>
  </section>

  <!-- NEWS SECTION -->
  <section class="news">
    <div class="container">
      <h2>Latest News</h2>
      <div class="news-grid">
        <article class="news-card">
          <img src="https://images.unsplash.com/photo-1517927033932-b3d18e61fb3a?auto=format&fit=crop&w=800&q=80" alt="">
          <h3>A Derby to Remember</h3>
          <p>The city rivals delivered a five-goal thriller that will be talked about for years.</p>
        </article>
        <article class="news-card">
          <img src="https://images.unsplash.com/photo-1598941927372-490b8c8f8b4a?auto=format&fit=crop&w=800&q=80" alt="">
          <h3>The Young Star Taking Europe by Storm</h3>
          <p>An 18-year-old wonderkid is attracting attention from the biggest clubs with his performances.</p>
        </article>
        <article class="news-card">
          <img src="https://images.unsplash.com/photo-1600697395544-00d8d78e8dc3?auto=format&fit=crop&w=800&q=80" alt="">
          <h3>Champions League: Week Highlights</h3>
          <p>Catch up on all the results and goals from the latest round of the Champions League.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- MATCHES SECTION -->
  <section class="matches">
    <div class="container">
      <h2>Upcoming Matches</h2>
      <div class="match-grid">
        <div class="match">
          <span class="teams">Real Madrid vs Barcelona</span>
          <span class="date">October 27, 2025 - 21:00</span>
        </div>
        <div class="match">
          <span class="teams">Liverpool vs Manchester City</span>
          <span class="date">October 29, 2025 - 20:45</span>
        </div>
        <div class="match">
          <span class="teams">Inter Milan vs Juventus</span>
          <span class="date">November 1, 2025 - 19:30</span>
        </div>
      </div>
    </div>
  </section>

<?php  get_footer(); ?>
