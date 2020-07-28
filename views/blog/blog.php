<?php use yii\helpers\Html; ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Magazine</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

  <!--
  CSS
  ============================================= -->
    <?php $this->registerCssFile("@web/css/linearicons.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    $this->registerCssFile("@web/css/font-awesome.min.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);
    $this->registerCssFile("@web/css/bootstrap.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    $this->registerCssFile("@web/css/magnific-popup.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    $this->registerCssFile("@web/css/nice-select.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    $this->registerCssFile("@web/css/animate.min.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    $this->registerCssFile("@web/css/owl.carousel.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);
    $this->registerCssFile("@web/css/jquery-ui.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);
    $this->registerCssFile("@web/css/owl.carousel.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);
    $this->registerCssFile("@web/css/main.css", [
        'depends' => [\yii\bootstrap\BootstrapAsset::className()],
    ]);

    ?>

</head>
<body>

<div class="site-main-container" style="margin-top:90px">
  <!-- Start top-post Area -->
  <section class="top-post-area pt-10">
    <div class="container no-padding">
        <?php if ($mostViewedBlogs): ?>
          <div class="row small-gutters">
            <div class="col-lg-8 top-post-left">
              <div class="feature-image-thumb relative">
                <div class="overlay overlay-bg"></div>
                  <?php if ($mostViewedBlogs[0]->image != ''): ?>
                      <?php $image = $mostViewedBlogs[0]->image; ?>
                  <?php else: ?>
                      <?php $image = 'no-image.jpg' ?>
                  <?php endif; ?>
                  <?php echo Html::img('@web/Files/' . $image, ['id' => 'image']); ?>

              </div>
              <div class="top-post-details">
                <ul class="tags">
                  <li><a href="#">Food Habit</a></li>
                </ul>
                <a href='blog-details?id=<?php echo $mostViewedBlogs[0]->id ?>'>
                  <h3><?php echo $mostViewedBlogs[0]->header ?></h3>
                </a>
                <ul class="meta">
                  <li><a href="#"><span
                        class="lnr lnr-user"></span><?php echo $mostViewedBlogs[0]->createdBy->username ?></a>
                  </li>
                  <li><a href="#"><span
                        class="lnr lnr-calendar-full"></span>><?php echo Yii::$app->formatter->asDate($mostViewedBlogs[0]->created_at) ?>
                      /a></li>
                  <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 top-post-right">
              <div class="single-top-post">
                <div class="feature-image-thumb relative">
                  <div class="overlay overlay-bg"></div>
                    <?php if ($mostViewedBlogs[1]->image != ''): ?>
                        <?php $image = $mostViewedBlogs[1]->image; ?>
                    <?php else: ?>
                        <?php $image = 'no-image.jpg' ?>
                    <?php endif; ?>
                    <?php echo Html::img('@web/Files/' . $image, ['id' => 'image']); ?>
                </div>
                <div class="top-post-details">
                  <ul class="tags">
                    <li><a href="#">Food Habit</a></li>
                  </ul>
                  <a href='blog-details?id=<?php echo $mostViewedBlogs[1]->id ?>'>
                    <h4><?php echo $mostViewedBlogs[1]->header ?></h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span
                          class="lnr lnr-user"></span><?php echo $mostViewedBlogs[1]->createdBy->username ?>
                      </a></li>
                    <li><a href="#"><span
                          class="lnr lnr-calendar-full"></span><?php echo Yii::$app->formatter->asDate($mostViewedBlogs[1]->created_at) ?>
                      </a></li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                  </ul>
                </div>
              </div>
              <div class="single-top-post mt-10">
                <div class="feature-image-thumb relative">
                  <div class="overlay overlay-bg"></div>
                    <?php if ($mostViewedBlogs[2]->image != ''): ?>
                        <?php $image = $mostViewedBlogs[2]->image; ?>
                    <?php else: ?>
                        <?php $image = 'no-image.jpg' ?>
                    <?php endif; ?>
                    <?php echo Html::img('@web/Files/' . $image, ['id' => 'image']); ?>

                </div>
                <div class="top-post-details">
                  <ul class="tags">
                    <li><a href="#">Food Habit</a></li>
                  </ul>
                  <a href="blog-details?id=<?php echo $mostViewedBlogs[2]->id ?>">
                    <h4><?php echo $mostViewedBlogs[2]->header ?></h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span
                          class="lnr lnr-user"></span><?php echo $mostViewedBlogs[2]->createdBy->username ?>
                      </a></li>
                    <li><a href="#"><span
                          class="lnr lnr-calendar-full"></span><?php echo Yii::$app->formatter->asDate($mostViewedBlogs[2]->created_at) ?>
                      </a></li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="news-tracker-wrap">
                <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
              </div>
            </div>
          </div>
        <?php endif; ?>
    </div>
  </section>
  <!-- End top-post Area -->
  <!-- Start latest-post Area -->
  <section class="latest-post-area pb-120">
    <div class="container no-padding">
      <div class="row">
        <div class="col-lg-8 post-list">
          <!-- Start latest-post Area -->
          <div class="latest-post-wrap">
            <h4 class="cat-title">Latest News</h4>
              <?php if ($blogs): ?>
                  <?php foreach ($blogs as $blog): ?>
                  <div class="single-latest-post row align-items-center">
                    <div class="col-lg-5 post-left">
                      <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                          <?php if ($blog->image): ?>
                              <?php $image = $blog->image; ?>
                          <?php else: ?>
                              <?php $image = 'no-image.jpg' ?>
                          <?php endif; ?>
                          <?php echo Html::img('@web/Files/' . $image, ['id' => 'image']); ?>
                      </div>
                      <ul class="tags">
                        <li><a href="#">Lifestyle</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-7 post-right">
                      <a href="/blog/blog-details?id=<?php echo $blog->id ?> ">
                        <h4><?php echo $blog->header ?></h4>
                      </a>
                      <ul class="meta">
                        <li><a href="#"><span
                              class="lnr lnr-user"></span><?php echo $blog->createdBy->username ?>
                          </a>
                        </li>

                        <li><a href=" #"><span
                              class="lnr lnr-calendar-full"></span><?php echo Yii::$app->formatter->asDate($blog->created_at) ?>
                          </a>
                        </li>

                        </li>
                        <li><a href=" #"><span class="lnr lnr-eye"></span><?php echo $blog['views'] ?>
                          </a>
                        </li>
                      </ul>
                      <p class="excert">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt.
                      </p>
                    </div>
                  </div>
                  <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <!-- End latest-post Area -->

          <!-- Start banner-ads Area -->
          <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
            <img class="img-fluid" src="img/banner-ad.jpg" alt="">
          </div>
          <!-- End banner-ads Area -->
          <!-- Start popular-post Area -->
          <div class="popular-post-wrap">
            <h4 class="title">Popular Posts</h4>
            <div class="feature-post relative">
              <div class="feature-img relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid" src="img/f1.jpg" alt="">
              </div>
              <div class="details">
                <ul class="tags">
                  <li><a href="#">Food Habit</a></li>
                </ul>
                <a href="image-post.html">
                  <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                </a>
                <ul class="meta">
                  <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                  <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                  <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                </ul>
              </div>
            </div>
            <div class="row mt-20 medium-gutters">
              <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/f2.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Travel</a></li>
                  </ul>
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h4>A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor
                    incididunt ed do
                    eius.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/f3.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Travel</a></li>
                  </ul>
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h4>A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor
                    incididunt ed do
                    eius.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- End popular-post Area -->
          <!-- Start relavent-story-post Area -->
          <div class="relavent-story-post-wrap mt-30">
            <h4 class="title">Relavent Stories</h4>
            <div class="relavent-story-list-wrap">
              <div class="single-relavent-post row align-items-center">
                <div class="col-lg-5 post-left">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/r1.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Lifestyle</a></li>
                  </ul>
                </div>
                <div class="col-lg-7 post-right">
                  <a href="image-post.html">
                    <h4>A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt.
                  </p>
                </div>
              </div>
              <div class="single-relavent-post row align-items-center">
                <div class="col-lg-5 post-left">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/r2.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Science</a></li>
                  </ul>
                </div>
                <div class="col-lg-7 post-right">
                  <a href="image-post.html">
                    <h4>A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt.
                  </p>
                </div>
              </div>
              <div class="single-relavent-post row align-items-center">
                <div class="col-lg-5 post-left">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/r3.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Travel</a></li>
                  </ul>
                </div>
                <div class="col-lg-7 post-right">
                  <a href="image-post.html">
                    <h4>A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- End relavent-story-post Area -->
        </div>
        <div class="col-lg-4">
          <div class="sidebars-area">
            <div class="single-sidebar-widget editors-pick-widget">
              <h6 class="title">Editor’s Pick</h6>
              <div class="editors-pick-post">
                <div class="feature-img-wrap relative">
                  <div class="feature-img relative">
                    <div class="overlay overlay-bg"></div>
                    <img class="img-fluid" src="img/e1.jpg" alt="">
                  </div>
                  <ul class="tags">
                    <li><a href="#">Travel</a></li>
                  </ul>
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h4 class="mt-20">A Discount Toner Cartridge Is
                      Better Than Ever.</h4>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor
                    incididunt ed do
                    eius.
                  </p>
                </div>
                <div class="post-lists">
                  <div class="single-post d-flex flex-row">
                    <div class="thumb">
                      <img src="img/e2.jpg" alt="">
                    </div>
                    <div class="detail">
                      <a href="image-post.html"><h6>Help Finding Information
                          Online is so easy</h6></a>
                      <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                            2018</a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="single-post d-flex flex-row">
                    <div class="thumb">
                      <img src="img/e3.jpg" alt="">
                    </div>
                    <div class="detail">
                      <a href="image-post.html"><h6>Compatible Inkjet Cartr
                          world famous</h6></a>
                      <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                            2018</a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="single-post d-flex flex-row">
                    <div class="thumb">
                      <img src="img/e4.jpg" alt="">
                    </div>
                    <div class="detail">
                      <a href="image-post.html"><h6>5 Tips For Offshore Soft
                          Development </h6></a>
                      <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April,
                            2018</a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-sidebar-widget ads-widget">
              <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
            </div>
            <div class="single-sidebar-widget newsletter-widget">
              <h6 class="title">Newsletter</h6>
              <p>
                Here, I focus on a range of items
                andfeatures that we use in life without
                giving them a second thought.
              </p>
              <div class="form-group d-flex flex-row">
                <div class="col-autos">
                  <div class="input-group">
                    <input class="form-control" placeholder="Email Address"
                           onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Email Address'" type="text">
                  </div>
                </div>
                <a href="#" class="bbtns">Subcribe</a>
              </div>
              <p>
                You can unsubscribe us at any time
              </p>
            </div>
            <div class="single-sidebar-widget most-popular-widget">
              <h6 class="title">Most Popular</h6>
              <div class="single-list flex-row d-flex">
                <div class="thumb">
                  <img src="img/m1.jpg" alt="">
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h6>Help Finding Information
                      Online is so easy</h6>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                  </ul>
                </div>
              </div>
              <div class="single-list flex-row d-flex">
                <div class="thumb">
                  <img src="img/m2.jpg" alt="">
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h6>Compatible Inkjet Cartr
                      world famous</h6>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                  </ul>
                </div>
              </div>
              <div class="single-list flex-row d-flex">
                <div class="thumb">
                  <img src="img/m3.jpg" alt="">
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h6>5 Tips For Offshore Soft
                      Development </h6>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                  </ul>
                </div>
              </div>
              <div class="single-list flex-row d-flex">
                <div class="thumb">
                  <img src="img/m4.jpg" alt="">
                </div>
                <div class="details">
                  <a href="image-post.html">
                    <h6>5 Tips For Offshore Soft
                      Development </h6>
                  </a>
                  <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a>
                    </li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="single-sidebar-widget social-network-widget">
              <h6 class="title">Social Networks</h6>
              <ul class="social-list">
                <li class="d-flex justify-content-between align-items-center fb">
                  <div class="icons d-flex flex-row align-items-center">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <p>983 Likes</p>
                  </div>
                  <a href="#">Like our page</a>
                </li>
                <li class="d-flex justify-content-between align-items-center tw">
                  <div class="icons d-flex flex-row align-items-center">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <p>983 Followers</p>
                  </div>
                  <a href="#">Follow Us</a>
                </li>
                <li class="d-flex justify-content-between align-items-center yt">
                  <div class="icons d-flex flex-row align-items-center">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                    <p>983 Subscriber</p>
                  </div>
                  <a href="#">Subscribe</a>
                </li>
                <li class="d-flex justify-content-between align-items-center rs">
                  <div class="icons d-flex flex-row align-items-center">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                    <p>983 Subscribe</p>
                  </div>
                  <a href="#">Subscribe</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest-post Area -->
</div>

<!-- start footer Area -->
<footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 single-footer-widget">
        <h4>Top Products</h4>
        <ul>
          <li><a href="#">Managed Website</a></li>
          <li><a href="#">Manage Reputation</a></li>
          <li><a href="#">Power Tools</a></li>
          <li><a href="#">Marketing Service</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Brand Assets</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Features</h4>
        <ul>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Brand Assets</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Terms of Service</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Guides</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Experts</a></li>
          <li><a href="#">Agencies</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6 single-footer-widget">
        <h4>Instragram Feed</h4>
        <ul class="instafeed d-flex flex-wrap">
          <li><img src="img/i1.jpg" alt=""></li>
          <li><img src="img/i2.jpg" alt=""></li>
          <li><img src="img/i3.jpg" alt=""></li>
          <li><img src="img/i4.jpg" alt=""></li>
          <li><img src="img/i5.jpg" alt=""></li>
          <li><img src="img/i6.jpg" alt=""></li>
          <li><img src="img/i7.jpg" alt=""></li>
          <li><img src="img/i8.jpg" alt=""></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom row align-items-center">
      <p class="footer-text m-0 col-lg-8 col-md-12">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
          href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      <div class="col-lg-4 col-md-12 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
    </div>
  </div>
</footer>
<!-- End footer Area -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>

</body>
</html>


<?php
$this->registerJsFile(
    '@web/js/vendor/jquery-2.2.4.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/vendor/bootstrap.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/easing.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/hoverIntent.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/superfish.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/jquery.ajaxchimp.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/jquery.magnific-popup.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/mn-accordion.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/jquery-ui.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/jquery.nice-select.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/owl.carousel.min.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/mail-script.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);
$this->registerJsFile(
    '@web/js/main.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

?>


<!--    <script>-->
<!--      let button = document.getElementsByClassName('btn');-->
<!--      let icon = document.querySelectorAll('.fa-thumbs-up');-->
<!--      for (let i = 0; i < button.length; i++) {-->
<!--        button[i].onclick = function () {-->
<!--          if (button[i].style.backgroundColor === 'white') {-->
<!--            $.ajax({-->
<!--              url: `/blog/count-likes?blogId=${button[i].id}`,-->
<!--              type: 'get',-->
<!--              async: false,-->
<!--              data: {_csrf: yii.getCsrfToken()},-->
<!--              success: function (data) {-->
<!--                button[i].style.backgroundColor = 'skyblue';-->
<!--                icon[i].textContent = parseInt(icon[i].textContent) + 1;-->
<!--              }, error: function (result) {-->
<!--              }-->
<!--            });-->
<!--          } else {-->
<!--            $.ajax({-->
<!--              url: `/blog/delete-likes?blogId=${button[i].id}`,-->
<!--              type: 'get',-->
<!--              async: false,-->
<!--              data: {_csrf: yii.getCsrfToken()},-->
<!--              success: function (data) {-->
<!--                button[i].style.backgroundColor = 'skyblue';-->
<!--                icon[i].textContent = parseInt(icon[i].textContent) + 1;-->
<!--              }, error: function (result) {-->
<!--              }-->
<!--            });-->
<!--          }-->
<!--        }-->
<!--      }-->
<!--    </script>-->

