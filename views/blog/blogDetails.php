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
  <!--		<link rel="stylesheet" href="css/linearicons.css">-->
  <!--		<link rel="stylesheet" href="css/font-awesome.min.css">-->
  <!--		<link rel="stylesheet" href="css/bootstrap.css">-->
  <!--		<link rel="stylesheet" href="css/magnific-popup.css">-->
  <!--		<link rel="stylesheet" href="css/nice-select.css">-->
  <!--		<link rel="stylesheet" href="css/animate.min.css">-->
  <!--		<link rel="stylesheet" href="css/owl.carousel.css">-->
  <!--		<link rel="stylesheet" href="css/jquery-ui.css">-->

  <link rel="stylesheet" href="css/main.css">
    <?php

    use yii\helpers\Html;

    $this->registerCssFile("@web/css/linearicons.css", [
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
    ]); ?>
</head>
<body>

<div class="site-main-container">
  <!-- Start top-post Area -->
  <section class="top-post-area pt-10">
    <div class="container no-padding">
      <div class="row">
        <div class="col-lg-12">
          <div class="hero-nav-area">
            <h1 class="text-white">Gallery Post</h1>
            <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span><a
                href="#">Post Types </a><span class="lnr lnr-arrow-right"></span><a href="gallery-post.html">Gallery
                Post </a></p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="news-tracker-wrap">
            <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End top-post Area -->
  <!-- Start latest-post Area -->
  <section class="latest-post-area pb-120">
    <div class="container no-padding">
      <div class="row">
        <div class="col-lg-8 post-list">
          <!-- Start single-post Area -->
          <div class="single-post-wrap">
            <div class="feature-img-thumb relative">
              <div class="active-gallery-carusel">
                <div class="single-img relative">
                  <div class="overlay overlay-bg"></div>
                    <?php if ($blog->image != ''): ?>
                        <?php $image = $blog->image; ?>
                    <?php else: ?>
                        <?php $image = 'no-image.jpg' ?>
                    <?php endif; ?>
                    <?php echo Html::img('@web/Files/' . $image, ['id' => 'image']); ?>
                </div>
                <div class="single-img relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid item" src="img/g2.jpg" alt="">
                </div>
                <div class="single-img relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid item" src="img/g3.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="content-wrap">
              <ul class="tags mt-10">
                <li><a href="#">Food Habit</a></li>
              </ul>
              <a href="#">
                <h3><?php echo $blog->header ?></h3>
              </a>
              <ul class="meta pb-20">
                <li><a href="#"><span class="lnr lnr-user"></span><?php echo $blog->createdBy->username ?></a></li>
                <li><a href="#"><span
                      class="lnr lnr-calendar-full"></span><?php echo Yii::$app->formatter->asDatetime($blog->created_at) ?>
                  </a></li>
                <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
              </ul>
              <p>
                  <?php echo $blog->text ?>
              </p>

              <div class="navigation-wrap justify-content-between d-flex">
                <a class="prev" href="#"><span class="lnr lnr-arrow-left"></span>Prev Post</a>
                <a class="next" href="#">Next Post<span class="lnr lnr-arrow-right"></span></a>
              </div>

              <div class="comment-sec-area">
                <div class="container">
                  <div class="row flex-column">
                    <h6>05 Comments</h6>
                    <div class="comment-list">
                      <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                          <div class="thumb">
                            <img src="img/blog/c1.jpg" alt="">
                          </div>
                          <div class="desc">
                            <h5><a href="#">Emilly Blunt</a></h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                            <p class="comment">
                              Never say goodbye till the end comes!
                            </p>
                          </div>
                        </div>
                        <div class="reply-btn">
                          <a href="" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                    <div class="comment-list left-padding">
                      <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                          <div class="thumb">
                            <img src="img/blog/c2.jpg" alt="">
                          </div>
                          <div class="desc">
                            <h5><a href="#">Emilly Blunt</a></h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                            <p class="comment">
                              Never say goodbye till the end comes!
                            </p>
                          </div>
                        </div>
                        <div class="reply-btn">
                          <a href="" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                    <div class="comment-list">
                      <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                          <div class="thumb">
                            <img src="img/blog/c3.jpg" alt="">
                          </div>
                          <div class="desc">
                            <h5><a href="#">Emilly Blunt</a></h5>
                            <p class="date">December 4, 2017 at 3:12 pm </p>
                            <p class="comment">
                              Never say goodbye till the end comes!
                            </p>
                          </div>
                        </div>
                        <div class="reply-btn">
                          <a href="" class="btn-reply text-uppercase">reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-form">
              <h4>Post Comment</h4>
              <form>
                <div class="form-group form-inline">
                  <div class="form-group col-lg-6 col-md-12 name">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                  </div>
                  <div class="form-group col-lg-6 col-md-12 email">
                    <input type="email" class="form-control" id="email" placeholder="Enter email address"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="subject" placeholder="Subject"
                         onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                </div>
                <div class="form-group">
                  <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
                            required=""></textarea>
                </div>
                <a href="#" class="primary-btn text-uppercase">Post Comment</a>
              </form>
            </div>
          </div>
          <!-- End single-post Area -->
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
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                  </ul>
                  <p class="excert">
                    Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do
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
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                    <input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''"
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
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
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

</body>
</html>