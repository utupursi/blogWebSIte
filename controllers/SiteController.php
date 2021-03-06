<?php

namespace app\controllers;

use app\models\Person2;
use app\models\Question;
use app\models\Quiz;
use app\models\QuizSearch;
use app\models\SignupForm;
use app\models\User;
use app\models\UserAddress;
use Yii;
use yii\bootstrap\ActiveForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\ServerErrorHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\Blogs;
use app\models\User1;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            [
                'class' => AccessControl::className(),
                'only' => ['blogs'],
                'rules' => [
                    [
                        'actions' => ['blogs'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');


    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }


    public function actionEntry()
    {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('entry', ['model' => $model]);
        }
    }

    public function actionForm()
    {
        $model = new Person2();
        {
            $model = new Person2();

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                // данные в $model удачно провере
                // делаем что-то полезное с $model ..
                if ($model->save()) {
                    return $this->render('index', ['model' => $model]);
                }
            } else {
                // либо страница отображается первый раз, либо есть ошибка в данных
                return $this->render('form', ['model' => $model]);
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно провере
            // делаем что-то полезное с $model ..
            if ($model->save()) {
                return $this->render('index', ['model' => $model]);
            }
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('form', ['model' => $model]);
        }
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {

            return $this->redirect(Yii::$app->homeUrl);
        } else {
            return $this->render('signup', ['model' => $model]);
        }
    }


    public function actionUpload()
    {
        $model = new Blogs();
        if ($model->load(Yii::$app->request->post())) {
            $imageName = Yii::$app->security->generateRandomString(20);
            $model->file = UploadedFile::getInstance($model, 'file');
            $path = Yii::getAlias('@webroot') . '/Files/';
            $model->file->saveAs($path . $imageName . '.' . $model->file->extension);
            $model->photo = $imageName . '.' . $model->file->extension;
            if ($model->save()) {
                return $this->redirect(Yii::$app->homeUrl);
            }
        } else {
            return $this->render('blogs', ['model' => $model]);
        }

    }

    public function actionUpdateUser()
    {
        $model = User::find()->where(['id' => Yii::$app->user->id])->one();
        if ($model->load(Yii::$app->request->post()) && $model->userAddress->load(Yii::$app->request->post())) {
            $username = $model->username;
            if (!$model->userAddress->save() || !$model->save()) {
                throw new ServerErrorHttpException('can not save');
            }
            Yii::$app->user->identity->username = $username;
        }
        return $this->render('../user/userDetails', [
            'model' => $model,
        ]);
    }

}
