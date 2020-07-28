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
          <li><a href="/blog/latest-blogs"><h4 style="color:blue">My application</h4></a></li>
        </ul>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
        <ul>
            <?php if (Yii::$app->user->isGuest): ?>
              <li><a href="/site/signup"><span class="lnr lnr-phone-handset"></span><span>SignUp</span></a></li>
            <?php endif; ?>
            <?php if (!Yii::$app->user->isGuest): ?>
              <li><a href="/blog/create"><span class="lnr lnr-phone-handset"></span><span>Write Blog</span></a></li>
            <?php endif; ?>
            <?php if (!Yii::$app->user->isGuest): ?>
              <li><a href="/blog/view-user-blog"><span class="lnr lnr-phone-handset"></span><span>My Blogs</span></a>
              </li>
            <?php endif; ?>
            <?php if (Yii::$app->user->isGuest): ?>
              <li><a href="/site/login"><span class="lnr lnr-phone-handset"></span><span>Login</span></a></li>
            <?php endif; ?>

            <?php if (!Yii::$app->user->isGuest): ?>
              <li><a href="/site/update-user"><span class="lnr lnr-phone-handset"></span><span>Edit Profile(<?php echo Yii::$app->user->identity->username?>)</span></a>
              </li>
            <?php endif; ?>

            <?php if (!Yii::$app->user->isGuest) {
              echo   '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '
              </li>';
            }
            ?>
        </ul>
      </div>
    </div>
  </div>
</div>

  <div class="container">

      <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>
  </div>
</div>

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
