<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\MenuAudits;
use app\models\MenuCert;
use app\models\MenuService;
use app\models\MenuTrain;
use app\models\ArticleAudits;
use app\models\ArticleCert;
use app\models\ArticleNews;
use app\models\ArticleService;
use app\models\ArticleTrain;

class AdminController extends Controller
{
	public function init()  
    {  
        $this->layout='admin';  
    }  
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'|'index'],
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
         
        $group = $_POST['group'];
        $item = $_POST['item'];

        if(Yii::$app->user->isGuest) {
           return $this->redirect(['site/login']);
        }else{
            $model->group = $group;
            $model->item = $item;
            
            $model->menucert = MenuCert::find()-all();
            $model->menuaudits = MenuAudits::find()->all();
            $model->menutrain = MenuTrain::find()->all();
            $model->menuservice = MenuService::find()->all();
            if($group === 'cert'){
                $mode->contentslist = ArticleCert::find()->where('type=' . $item)->all();
            }elseif($group === 'audits'){
                $mode->contentslist = ArticleAudits::find()->where('type=' . $item)->all();
            }elseif ($group === 'train') {
                $mode->contentslist = ArticleTrain::find()->where('type=' . $item)->all();
            }elseif($group === 'service'){
                $mode->contentslist = ArticleService::find()->where('type=' . $item)->all();
            }elseif($group === 'news'){
                $mode->contentslist = ArticleNews::find()->all();
            }
            return $this->render('index',[
                   'model' => $model,
               ]);
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    

    
}
