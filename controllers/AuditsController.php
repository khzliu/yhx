<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MenuAudits;
use app\models\Audits;
use app\models\ArticleAudits;
use yii\data\Pagination;

class AuditsController extends Controller
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
        $audits = new Audits();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $auditsItem = MenuAudits::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $auditsItem->cn_name;
            $audits->setItem($type);
        }else{
            $auditsItem = MenuAudits::find()->where('id=1')->one();
            $audits->setItem([$auditsItem->en_name,$auditsItem->en_name]);
            $type = [$auditsItem->en_name,$auditsItem->en_name];
        }
        foreach( MenuAudits::find()->all() as $menuaudits){
            array_push($Items,[$menuaudits->en_name,$menuaudits->cn_name]);
        }
        $audits->setGroupItems($Items);
        
        
        //实现文章分页
        $query = ArticleAudits::find()->select(['id', 'title', 'type'])->where(['type' => $type[0]]);
        //$query = ArticleAudits::find()->all();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount'=> $countQuery->count()]);
        $pages->pageSize=12;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',[
                'audits' => $audits,
                'pages'=>$pages,
                'models'=>$models,
            ]);
    }

    
    public function actionArticle()
    {
        $audits = new Audits();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $auditsItem = MenuAudits::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $auditsItem->cn_name;
            $audits->setItem($type);
        }else{
            $auditsItem = MenuAudits::find()->where('id=1')->one();
            $audits->setItem([$auditsItem->en_name,$auditsItem->en_name]);
            $type = [$auditsItem->en_name,$auditsItem->en_name];
        }
        foreach( MenuAudits::find()->all() as $menuaudits){
            array_push($Items,[$menuaudits->en_name,$menuaudits->cn_name]);
        }
        $audits->setGroupItems($Items);
        
        //设置文章
        $id = $_GET['id'];
        $presentArticle = ArticleAudits::find()->where('id=' . $id)->one();
        //上一条:select * from 表 where 数据id<@当前显示数据id order by 数据_id asc) limit 1
        $previousArticle = ArticleAudits::find()->select(['id', 'title', 'type'])->where('id<' . $id)->orderBy('id DESC')->limit(1)->one();
        //下一条:select * from 表 where 数据id>@当前显示数据id order by 数据_id desc) limit 1
        $nextArticle = ArticleAudits::find()->select(['id', 'title', 'type'])->where('id>' . $id)->orderBy('id ASC')->limit(1)->one();
        
        
        
        return $this->render('article', [
            'audits' => $audits,
            'presentArticle' => $presentArticle,
            'previousArticle' =>$previousArticle,
            'nextArticle' => $nextArticle,
            'type' => $type,
        ]);
    }
    
	
}
