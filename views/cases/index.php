    <?php
    use yii\widgets\LinkPager;
    $this->registerCssFile('/css/cases.css'); 
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
                      <li class="active">成功案例</li>
                    </ol>
            </div><!--/span-->
            
            <div class="col-xs-12 col-sm-12" id="sidebar" role="navigation">
                 <div class="col-md-12">
                     <ul>
                    <?php
                        foreach ($models as $model) {
                        echo '<li><a href="?r=cases/article&id=' . $model->id . '">'; 
                        echo $model->title;
                        echo '</a><hr style="margin-top: 4px;"></li>';
                        }
                    ?>
                         </ul>
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
