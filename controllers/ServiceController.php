<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MenuService;
use app\models\Service;
use app\models\ArticleService;
use yii\data\Pagination;

class ServiceController extends Controller
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
        $service = new Service();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $serviceItem = MenuService::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $serviceItem->cn_name;
            $service->setItem($type);
        }else{
            $serviceItem = MenuService::find()->where('id=1')->one();
            $service->setItem([$serviceItem->en_name,$serviceItem->en_name]);
            $type = [$serviceItem->en_name,$serviceItem->en_name];
        }
        foreach( MenuService::find()->all() as $menuservice){
            array_push($Items,[$menuservice->en_name,$menuservice->cn_name]);
        }
        $service->setGroupItems($Items);
        
        
        //实现文章分页
        $query = ArticleService::find()->select(['id', 'title', 'type'])->where(['type' => $type[0]])->orderBy('id DESC');
        //$query = ArticleService::find()->all();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount'=> $countQuery->count()]);
        $pages->pageSize=12;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',[
                'service' => $service,
                'pages'=>$pages,
                'models'=>$models,
            ]);
    }

    
    public function actionArticle()
    {
        $service = new Service();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $serviceItem = MenuService::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $serviceItem->cn_name;
            $service->setItem($type);
        }else{
            $serviceItem = MenuService::find()->where('id=1')->one();
            $service->setItem([$serviceItem->en_name,$serviceItem->en_name]);
            $type = [$serviceItem->en_name,$serviceItem->en_name];
        }
        foreach( MenuService::find()->all() as $menuservice){
            array_push($Items,[$menuservice->en_name,$menuservice->cn_name]);
        }
        $service->setGroupItems($Items);
        
        //设置文章
        $id = $_GET['id'];
        $presentArticle = ArticleService::find()->where('id=' . $id)->one();
        //上一条:select * from 表 where 数据id<@当前显示数据id order by 数据_id asc) limit 1
        $previousArticle = ArticleService::find()->select(['id', 'title', 'type'])->where('id>' . $id)->orderBy('id ASC')->limit(1)->one();
        //下一条:select * from 表 where 数据id>@当前显示数据id order by 数据_id desc) limit 1
        $nextArticle = ArticleService::find()->select(['id', 'title', 'type'])->where('id<' . $id)->orderBy('id DESC')->limit(1)->one();
        
        
        
        return $this->render('article', [
            'service' => $service,
            'presentArticle' => $presentArticle,
            'previousArticle' =>$previousArticle,
            'nextArticle' => $nextArticle,
            'type' => $type,
        ]);
    }
    
	
}
