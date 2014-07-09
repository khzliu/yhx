<?php
use yii\helpers\Html;
use yii\bootstrap\Dropdown;
use app\assets\AppAsset;
use app\models\MenuAbout;
use app\models\MenuCert;
use app\models\MenuAudits;
use app\models\MenuService;
use app\models\MenuTrain;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://www.yhx.biz/favicon.ico" type="image/ico">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php $this->beginBody() ?>
    <div class="navbar navbar-default navbar-fixed-top " role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">英华信</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav ">
            <li><a href="/index.php">首页</a></li>
			<li class="dropdown">
                <a href="#"  data-toggle="dropdown">关于我们<b class="caret"></b></a>
			<?php
			$menuaboutList = MenuAbout::find()->All();
			$menuaboutItems = array();
			foreach ($menuaboutList as $menuabout) {
				$en_name = $menuabout->en_name;
				$cn_name = $menuabout->cn_name;
				$menuaboutItem = ['label' => $cn_name, 'url' => [('about/') . $en_name]];
				array_push($menuaboutItems,$menuaboutItem);
				
			}
			echo Dropdown::widget([
				'items' => $menuaboutItems,
			]);
			?>
			</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">认证咨询<b class="caret"></b></a>
                <ul class="dropdown-menu">
				<?php
				$menucertList = MenuCert::find()->All();
				$menucertTypeList = MenuCert::find()->distinct()->select('cert_type')->all();
				$menucertTypeItems = array();
				foreach($menucertTypeList as $menucertType){
					print_r('<li class="dropdown-header">' . $menucertType->cert_type . '</li>');
					foreach ($menucertList as $menucert) {
						if($menucertType->cert_type === $menucert->cert_type){
							$en_name = $menucert->en_name;
							$cn_name = $menucert->cn_name;
							print_r('<li><a href="?r=cert%2Findex&type=' . $en_name . '">' . $cn_name . '</a></li>');
						}
					}
					print_r('<li class="divider"></li>');
				}
				?>
                </ul>
            </li>
            
            <li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">验厂咨询<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <?php
                    $menuauditsList = MenuAudits::find()->All();
                    foreach ($menuauditsList as $menuaudits) {
                            $en_name = $menuaudits->en_name;
                            $cn_name = $menuaudits->cn_name;
                            print_r('<li><a href="?r=audits%2Findex&type=' . $en_name . '">' . $cn_name . '</a></li>');
                    }
                ?>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">管理培训<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <?php
                    $menutrainList = MenuTrain::find()->All();
                    foreach ($menutrainList as $menutrain) {
                            $en_name = $menutrain->en_name;
                            $cn_name = $menutrain->cn_name;
                            print_r('<li><a href="?r=train%2Findex&type=' . $en_name . '">' . $cn_name . '</a></li>');
                    }
                ?>
                </ul>
            </li>
            <li class="dropdown"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown">推荐服务<b class="caret"></b></a>
                <ul class="dropdown-menu">
                <?php
                    $menuserviceList = MenuService::find()->All();
                    foreach ($menuserviceList as $menuservice) {
                            $en_name = $menuservice->en_name;
                            $cn_name = $menuservice->cn_name;
                            print_r('<li><a href="?r=service%2Findex&type=' . $en_name . '">' . $cn_name . '</a></li>');
                    }
                ?>
                </ul>
            </li>
            <li><a href="?r=news/index">新闻动态</a></li>
            <li><a href="?r=cases/index">成功案例</a></li>
            <li><a href="?r=site/contact">联系我们</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<?= $content ?>

	
    <div class="business-footer">
        <div class="container">
            <div class="row">
                <p class="text-muted">友情链接</p>
                <div class="col-lg-12" style="font-size:12px;margin-bottom: 5px;">
                    <div class="col-md-2"><a href="http://www.cqc.com.cn/chinese/index.htm">中国质量认证中心</a></div>
                    <div class="col-md-3"><a href="http://www.cnca.gov.cn/">中国国家认证认可监督管理委员会</a></div>
                    <div class="col-md-3"><a href="http://www.cnas.org.cn/">中国合格评定国家认可委员会</a></div>
                    <div class="col-md-2"><a href="http://www.ccaa.org.cn/ccaa/">中国认证认可协会</a></div>
                    <div class="col-md-2"><a href="http://www.aqsiq.gov.cn/">国家质量监督检验检疫总局</a></div>
                    
                    <div class="col-md-2"><a href="http://www.nfqs.com.cn/">国家食品质量安全网</a></div>
                    <div class="col-md-3"><a href="http://www.ccic.com/web/homepage.html">中国检验认证集团</a></div>
                    <div class="col-md-3"><a href="http://www.cccme.org.cn/">中国机电进出口商会</a></div>
                    <div class="col-md-2"><a href="#">友情链接招租</a></div>
                    <div class="col-md-2"><a href="#">友情链接招租</a></div>
                </div>
                <p class="text-muted">Copyright ©2003-2004 英华信咨询服务有限公司 版权所有
                    <br>ICP证15008125号
                </p>
            </div>
        </div>
    </div>	

	<!-- JavaScript -->
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.js"></script>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
