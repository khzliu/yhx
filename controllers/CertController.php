<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MenuCert;
use app\models\Cert;
use app\models\ArticleCert;
use yii\data\Pagination;

class CertController extends Controller
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
        $cert = new Cert();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $certItem = MenuCert::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $certItem->cn_name;
            $cert->setItem($type);
        }else{
            $certItem = MenuCert::find()->where('id=1')->one();
            $cert->setItem([$certItem->en_name,$certItem->en_name]);
            $type = [$certItem->en_name,$certItem->en_name];
        }
        foreach( MenuCert::find()->all() as $menucert){
            array_push($Items,[$menucert->en_name,$menucert->cn_name]);
        }
        $cert->setGroupItems($Items);
        
        
        //实现文章分页
        $query = ArticleCert::find()->select(['id', 'title' ,'type'])->where(['type' => $type[0]]);
        //$query = ArticleCert::find()->all();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount'=> $countQuery->count()]);
        $pages->pageSize=12;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',[
                'cert' => $cert,
                'pages'=>$pages,
                'models'=>$models,
            ]);
    }

    
    public function actionArticle()
    {
        $cert = new Cert();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $certItem = MenuCert::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $certItem->cn_name;
            $cert->setItem($type);
        }else{
            $certItem = MenuCert::find()->where('id=1')->one();
            $cert->setItem([$certItem->en_name,$certItem->en_name]);
            $type = [$certItem->en_name,$certItem->en_name];
        }
        foreach( MenuCert::find()->all() as $menucert){
            array_push($Items,[$menucert->en_name,$menucert->cn_name]);
        }
        $cert->setGroupItems($Items);
        
        //设置文章
        $id = $_GET['id'];
        $presentArticle = ArticleCert::find()->where('id=' . $id)->one();
        //上一条:select * from 表 where 数据id<@当前显示数据id order by 数据_id asc) limit 1
        $previousArticle = ArticleCert::find()->select(['id', 'title', 'type'])->where('id<' . $id)->orderBy('id DESC')->limit(1)->one();
        //下一条:select * from 表 where 数据id>@当前显示数据id order by 数据_id desc) limit 1
        $nextArticle = ArticleCert::find()->select(['id', 'title', 'type'])->where('id>' . $id)->orderBy('id ASC')->limit(1)->one();
        
        
        
        return $this->render('article', [
            'cert' => $cert,
            'presentArticle' => $presentArticle,
            'previousArticle' =>$previousArticle,
            'nextArticle' => $nextArticle,
            'type' => $type,
        ]);
    }
    
	
}
