<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\MenuTrain;
use app\models\Train;
use app\models\ArticleTrain;
use yii\data\Pagination;

class TrainController extends Controller
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
        $train = new Train();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $trainItem = MenuTrain::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $trainItem->cn_name;
            $train->setItem($type);
        }else{
            $trainItem = MenuTrain::find()->where('id=1')->one();
            $train->setItem([$trainItem->en_name,$trainItem->en_name]);
            $type = [$trainItem->en_name,$trainItem->en_name];
        }
        foreach( MenuTrain::find()->all() as $menutrain){
            array_push($Items,[$menutrain->en_name,$menutrain->cn_name]);
        }
        $train->setGroupItems($Items);
        
        
        //实现文章分页
        $query = ArticleTrain::find()->select(['id', 'title', 'type'])->where(['type' => $type[0]])->orderBy('id DESC');
        //$query = ArticleTrain::find()->all();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount'=> $countQuery->count()]);
        $pages->pageSize=12;
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();

        
        return $this->render('index',[
                'train' => $train,
                'pages'=>$pages,
                'models'=>$models,
            ]);
    }

    
    public function actionArticle()
    {
        $train = new Train();
        $type = [];
        $Items = array();
        if(isset($_GET['type'])){
            $type[0]=(String)$_GET['type'];
            $trainItem = MenuTrain::find()->where('en_name="' . $type[0] . '"')->one();
            $type[1]= $trainItem->cn_name;
            $train->setItem($type);
        }else{
            $trainItem = MenuTrain::find()->where('id=1')->one();
            $train->setItem([$trainItem->en_name,$trainItem->en_name]);
            $type = [$trainItem->en_name,$trainItem->en_name];
        }
        foreach( MenuTrain::find()->all() as $menutrain){
            array_push($Items,[$menutrain->en_name,$menutrain->cn_name]);
        }
        $train->setGroupItems($Items);
        
        //设置文章
        $id = $_GET['id'];
        $presentArticle = ArticleTrain::find()->where('id=' . $id)->one();
        //上一条:select * from 表 where 数据id<@当前显示数据id order by 数据_id asc) limit 1
        $previousArticle = ArticleTrain::find()->select(['id', 'title', 'type'])->where('id>' . $id)->orderBy('id ASC')->limit(1)->one();
        //下一条:select * from 表 where 数据id>@当前显示数据id order by 数据_id desc) limit 1
        $nextArticle = ArticleTrain::find()->select(['id', 'title', 'type'])->where('id<' . $id)->orderBy('id DESC')->limit(1)->one();
        
        
        
        return $this->render('article', [
            'train' => $train,
            'presentArticle' => $presentArticle,
            'previousArticle' =>$previousArticle,
            'nextArticle' => $nextArticle,
            'type' => $type,
        ]);
    }
    
	
}
