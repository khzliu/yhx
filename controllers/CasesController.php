<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Cases;
use app\models\ArticleCases;
use yii\data\Pagination;

class CasesController extends Controller
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
        
        //实现文章分页
        $query = ArticleCases::find()->select(['id', 'title']);
        //$query = ArticleCases::find()->all();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount'=> $countQuery->count()]);
        $pages->pageSize=12;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',[
                'pages'=>$pages,
                'models'=>$models,
            ]);
    }

    
    public function actionArticle()
    {
        
        $id = 1;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $cases= ArticleCases::find()->select(['id'])->orderBy('id DESC')->limit(1)->one();
            if($cases == null){
                 return $this->render('article', [
                    'presentArticle' => null,
                    'previousArticle' => null,
                    'nextArticle' => null,
                ]);
            }else{
                $id = $cases->id;
            }
        }
        //设置文章
        $presentArticle = ArticleCases::find()->where('id=' . $id)->one();
        //上一条:select * from 表 where 数据id<@当前显示数据id order by 数据_id asc) limit 1
        $previousArticle = ArticleCases::find()->select(['id', 'title', 'type'])->where('id<' . $id)->orderBy('id DESC')->limit(1)->one();
        //下一条:select * from 表 where 数据id>@当前显示数据id order by 数据_id desc) limit 1
        $nextArticle = ArticleCases::find()->select(['id', 'title', 'type'])->where('id>' . $id)->orderBy('id ASC')->limit(1)->one();
        
        
        
        return $this->render('article', [
            'presentArticle' => $presentArticle,
            'previousArticle' =>$previousArticle,
            'nextArticle' => $nextArticle,
        ]);
    }
    
	
}
