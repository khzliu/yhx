    <?php
    use yii\widgets\LinkPager;
    $this->registerCssFile('/css/cert.css'); 
    $this->registerCssFile('/css/bootstrap.css'); 
    $this->registerJsFile('/js/offcanvas.js');
    ?>

    <!-- header -->
    <div class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- The background image is set in the custom CSS -->
                    <h1 class="tagline">北京英华信咨询有限公司</h1>
                </div>
            </div>
        </div>
    </div>
	<!-- contents page -->
    <div class="business-contain">
        <div class="container">
            <hr>	
            <div class="col-xs-12 col-sm-12">
                    <ol class="breadcrumb">
                      <li><a href="/index.html">主页</a></li>
                      <li><a href="?r=cert/index">认证咨询</a></li>
                      <li class="active"><?php echo $cert->getItem()[1]; ?></li>
                    </ol>
            </div><!--/span-->
            <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
              <div class="list-group">
                  <?php
                  foreach ($cert->getGroupItems() as $tempitem){
                      if($tempitem[0] === $cert->getItem()[0]){
                          echo '<a href="?r=cert/index&type=' . $tempitem[0] . '" class="list-group-item active">' . $tempitem[1] . '</a>';
                      }else{
                          echo '<a href="?r=cert/index&type=' . $tempitem[0] . '" class="list-group-item">' . $tempitem[1] . '</a>';
                      }
                  }
                  ?>
              </div>
            </div><!--/span-->
            <div class="col-xs-6 col-sm-9" id="sidebar" role="navigation">
                 <div class="col-md-12">
                    <?php
                        foreach ($models as $model) {
                        echo '<dl class="dl-horizontal">';
                        echo '<dt><font color="red" size=1;>[';
                        echo $cert->getItem()[1];
                        echo ']</font></dt>';
                        echo '<dd><a href="?r=cert/article&type=' . $model->type . '&id=' . $model->id . '">'; 
                        echo $model->title;
                        echo '</a></dd>';
                        echo '<hr style="margin-top: 4px;"></dl>';
                        echo '';
                        }
                    ?>
                <div>
            </div>
                
                <div class="text-center">
                <?php
                // display pagination
                echo LinkPager::widget([
                'pagination'=> $pages,
                    ]);
                ?>
                </div>
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->
