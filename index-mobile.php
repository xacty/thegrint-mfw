<!DOCTYPE html>
<html>
<head>
  <title>TheGrint</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/m-style.css">

</head>
<body>
  <header>
    <div class="bg-header"></div>
    <div class="head_container container">
      <div class="logo">
        <a class="head_logo" href="#"><img src="assets/logo.svg"></a>
      </div>
      <div class="menu" id="myTopnav">
        <ul>
          <li><a href="https://sandbox.thegrint.com/passthru">Log in</a></li>
          <li><a class="join-btn" href="https://sandbox.thegrint.com/passthru/register">JOIN <span class="hidden">FOR FREE</span></a></li>
        </ul>
      </div>
    </div>
  </header>

  <section class="main-banner">
    <div class="bg-banner-img">
      <img src="assets/banner3.jpg" alt="">
    </div>
    <div class="banner-content container">
      <div class="wrapper">
        <div class="left">
          <h1><b>The Best Golf App</b></h1>
          <h2>Golf Score Tracker, USGA Handicaps, Golf GPS, Stats, Green Maps and more</h2>
          <div class="buttons o-desktop">
           <?php include "sections/buttons.html" ?>
         </div>
         <p class="desk-s" class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
        </div>
        <div class="right">
          <img src="assets/devices2.webp" alt="">
          <div class="buttons only-tablet">
           <?php include "sections/buttons.html" ?>
         </div>
         <p class="only-tablet" class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
       </div>
     </div>
   </div>
 </section>


 <section class="first-section bg">
  <div class="container">
    <h1 class="only-mobile">Easy to use <b class="green">Golf Score Tracker!</b></h1>
    <div class="wrapper screens-wrapper">
      <div class="left">
        <div class="img-wrapper">
          <img src="assets/scoretracker3.webp" alt="">
          <img src="assets/scoretracker1.webp" alt="">
        </div>
      </div>
      <div class="right">        
        <div class="first-content">
          <h1 class="desktop">Easy to use <b class="green">Golf Score Tracker!</b></h1>
          <p>Our Score Tracker allows you to keep basic stats or Pro-like advanced statistics. Your Scores are then used to calculate your Handicap and performance stats.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="awards">
 <div class="awards container">
  <div class="a-wrapper">
    <div class="a-img-box"><img src="assets/cnn.png" alt=""></div>
    <p>“App changes golf for amateurs”</p>
  </div>
  <div class="a-wrapper">
    <div class="a-img-box"><img src="assets/golf_digest.png" alt=""></div>
    <p>“Score, stats and GPS”</p>
  </div>
  <div class="a-wrapper">
    <div class="a-img-box"><img src="assets/golf-magazine-logo-black-and-white.png" alt=""></div>
    <p>“Top App for Handicaps and scoring”</p>
  </div>
</div>
</section>

<section class="fourth-section">
  <div class="container">
    <div class="wrapper screens-wrapper">
      <div class="left">
        <div class="img-wrapper three-screens">
          <img src="assets/4-1.webp" alt="">
          <img src="assets/4-2.webp" alt="">
          <img src="assets/4-3.webp" alt="">
        </div>
      </div>
      <div class="right">
        <h1 class="align-left"><b class="green">Golf GPS</b><br>and Rangefinder</h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Shot tracking and distance calculation on nearly every golf course worldwide.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Connect your Apple Watch or Android Watch easily with <b>TheGrint</b> to know your distances.</h2>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="fifth-section bg-2">
  <div class="container">
    <div class="wrapper screens-wrapper reverse-desktop">

      <div class="left">
        <div class="img-wrapper">
          <img id="lil-card" src="assets/handicap_card_thegrint.webp" alt="">
          <img id="lil-card-sibling" src="assets/handicap_link-1.webp" alt="">
        </div>
      </div>

      <div class="right">
        <h1 class="align-left">Link Real Handicaps <br><b class="green">(e.g. GHIN)</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">You can link your current Handicap for free or get a New one from TheGrint.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">You scores will be automatically synced with the USGA servers for Handicap purposes.</span>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="fifth-section bg-2">
  <div class="container">
    <div class="wrapper screens-wrapper">

      <div class="left">
        <div class="img-wrapper">
          <img src="assets/new/greenmaps.webp" alt="">
          <img src="assets/5-2.webp" alt="">
        </div>
      </div>

      <div class="right">
        <h1 class="align-left">Try our <b class="green">Green Maps</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Our topographic maps show the precise green slopes for putting and approach shots.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Over 13k green maps available and adding more every month.</span>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="sixth-section bg-inverted">
  <div class="container">
    <div class="wrapper reverse-desktop">
      <div class="left">
        <div class="carousel-phones">
          <div class="phones-wrapper">
            <img src="assets/iphone_border.webp" alt="">
            <img class="loop active" src="assets/carousel1.png" alt="">
            <img class="loop" src="assets/carousel2.png" alt="">
            <img class="loop" src="assets/carousel3.png" alt="">
            <img class="loop" src="assets/carousel4.png" alt="">
          </div>
        </div>
        <div style="display: none;" id="slider">
          <ul id="slideWrap"> 
            <li><div class="image-slider-container"><img src="assets/image-3.webp" alt=""></div></li>
            <li><div class="image-slider-container"><img src="assets/image-4.webp" alt=""></div></li>
            <li><div class="image-slider-container"><img src="assets/image-5.webp" alt=""></div></li>
            <li><div class="image-slider-container"><img src="assets/image-6.webp" alt=""></div></li>
          </ul>

          <a id="prev" >&#8810;</a>
          <a id="next" >&#8811;</a>
        </div>


      </div>
      <div class="right">
        <h1><b>Advanced Golf</b> <b class="green">Stats Feature</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Know your Strengths and Weaknesses with our benchmark dynamic targets by handicap.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Understand your golf game through our in-depth Performance Stats feature.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Track records and milestones in your own golf Trophy Room.</h2>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="seventh-section">
  <div class="container">
    <div class="wrapper screens-wrapper">

      <div class="left">
        <div class="img-wrapper">
          <img src="assets/leaderboards.webp" alt="">
          <img src="assets/new/section-gaming.webp" alt="">
        </div>        
      </div>
      <div class="right">
        <h1 class="align-left"><b>Live Scores &</b><br> <b class="green">Leaderboard</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Get instant Notification of what your friends are doing live on the golf course.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Compete with other Grinters in real-time and check their scores using our live leaderboards.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Manage your team events with our Live Ryder Cup Format.</h2>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <h2 class="icon-list-text">Keep score within your group on multiple phones using our linked scorecard feature.</h2>
          </li>
        </ul>      
      </div>
    </div>
  </div>
</section>

<section class="eighth-section bg">
  <div class="container">
    <div class="wrapper reverse-desktop">
      <div class="left">
        <img src="assets/golf_module.webp" alt="">
      </div>
      <div class="right">
        <h1>Connect with your golf friends <b class="green">like never before</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Track scores with friends, see their photos, comments and more.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">See how you rank among your friends and the rest of <b>TheGrint</b> community.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">We organize over 200 <b>TheGrint</b> Tour events per year. Go compete and meet new Grinters.</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="ninth-section grey-bg">
  <div class="container ninth-container">
    <h1>Try our TheGrint <b style="color:#b5d44f;">Web App</b></h1>
    <p>Want to analyze your golf game back at home or at the office? Our Web App offers all the in-depth stats on a larger screen.</p>
    <div><img src="assets/thegrint_desktop2.1.webp" alt=""></div>
    <h1>Ready to have the  <br><b>best golf experience ever?</b></h1>
    <div class="buttons">
     <?php include "sections/buttons.html" ?>
   </div>
   <a class="register-btn" href="https://sandbox.thegrint.com/passthru/register">JOIN FOR FREE TODAY</a>
 </div>
</section>


<footer>
  <div class="container footer-container">
   <div class="top">
    <div class="top-container">
      <div class="footer-logo">
        <img src="assets/white_logo.svg" alt="">
      </div>
      <div class="footer-content">
        <h2>The Best Golf App</h2>
        <p>Golf Score Tracker, USGA Handicap, Golf GPS, Advanced Stats and more</p>
        <div class="social-media">
          <a href="https://www.facebook.com/thegrintgolf"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/thegrintgolf/"><i aria-hidden="true" class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/TheGrintGolf"><i aria-hidden="true" class="fab fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="bot">
   <div class="bot-box">
     <h4>TheGrint</h4>
     <p>Since Ⓒ 2011 | All Rights Are Reserved</p>
   </div>
   <div class="bot-box">
     <h4>Need Help</h4>
     <a href="https://thegrint.com/about_us/member_support">Member Support | FAQ</a>
   </div>
   <div class="bot-box">
     <h4>Terms & Conditions</h4>
     <a href="https://thegrint.com/about_us/terms_and_conditions">Terms of use | Privacy Policy</a>
   </div>
 </div>
</div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/js.js"></script>

<script>

</script>

</body>
</html>
