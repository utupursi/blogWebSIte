<?php

use yii\helpers\Html;
use yii\web\YiiAsset;

YiiAsset::register($this);
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
]);

?>
<section class="latest-post-area pb-120">
  <div class="container no-padding">
    <div class="row">
      <div class="col-lg-8 post-list">
        <div class="latest-post-wrap">
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
                            class="lnr lnr-calendar-full"></span><?php echo $blog->created_at ?>
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
                      <?php echo Html::a('Edit', ['update-blog', 'id' => $blog->id], [
                          'class' => 'btn btn-primary',
                          'style' => 'font-size:15px',
                          'title' => 'edit',
                          'data' => [
                              'method' => 'post',
                          ],
                      ]) ?>
                      <?php echo Html::a('Delete', ['delete-blog', 'id' => $blog->id], [
                          'class' => 'btn btn-danger',
                          'style' => 'font-size:15px',
                          'title' => 'delete',
                          'data' => [
                              'method' => 'post',
                              'confirm' => 'Are you sure you want to delete this Record?'
                          ],
                      ]) ?>
                  </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
              <p>There is no blogs</p>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>