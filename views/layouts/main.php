<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
        <ul>
          <li><a href="#"><h4>My application</h4></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
        <ul>
            <?php if(Yii::$app->user->isGuest):?>
              <li><a href="/site/signup"><span class="lnr lnr-phone-handset"></span><span>SignUp</span></a></li>
            <?php endif;?>
          <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span>support@colorlib.com</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="wrap">

    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => ['/blog/blog'],
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar navbar-right'],
        'items' => [

            Yii::$app->user->isGuest ? (
            ['label' => 'Signup', 'url' => ['/site/signup']]
            ) : "",
            !Yii::$app->user->isGuest ? (
            ['label' => 'CreateBlog', 'url' => ['/blog/create']]
            ) : "",
            !Yii::$app->user->isGuest ? (
            ['label' => 'View My Blogs', 'url' => ['/blog/view-user-blog']]
            ) : "",

            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]

            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),


        ],

    ]);
    NavBar::end();
    ?>

  <div class="container">

      <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>
  </div>
</div >

<footer class="footer">

  <div class="container">

    <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

    <p class="pull-right"><?= Yii::powered() ?></p>
  </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
