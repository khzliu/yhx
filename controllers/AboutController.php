<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\MenuAbout;

class AboutController extends Controller
{
	public function init()  
    {  
        $this->layout='yhx';  
    }  
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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
    public function actionIndex()
    {
        $aboutitems = MenuAbout::find()->All();
        $presentitem = MenuAbout::find()->where('en_name="index"')->one();
        return $this->render('index',['aboutitems' => $aboutitems,'presentitem' => $presentitem]);
    }
    public function actionQualitypolicy()
    {
        $aboutitems = MenuAbout::find()->All();
        $presentitem = MenuAbout::find()->where('en_name="qualitypolicy"')->one();
        return $this->render('qualitypolicy',['aboutitems' => $aboutitems,'presentitem' => $presentitem]);
    }
    public function actionServicewell()
    {
        $aboutitems = MenuAbout::find()->All();
        $presentitem = MenuAbout::find()->where('en_name="servicewell"')->one();
        return $this->render('servicewell',['aboutitems' => $aboutitems,'presentitem' => $presentitem]);
    }
    public function actionServicelist()
    {
        $aboutitems = MenuAbout::find()->All();
        $presentitem = MenuAbout::find()->where('en_name="servicelist"')->one();
        return $this->render('servicelist',['aboutitems' => $aboutitems,'presentitem' => $presentitem]);
    }
    public function actionJoinus()
    {
        $aboutitems = MenuAbout::find()->All();
        $presentitem = MenuAbout::find()->where('en_name="joinus"')->one();
        return $this->render('joinus',['aboutitems' => $aboutitems,'presentitem' => $presentitem]);
    }
}
