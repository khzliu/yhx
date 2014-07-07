<?php
    $this->registerCssFile('/css/about.css'); 
    $this->registerCssFile('/css/bootstrap.css'); 
    $this->registerJsFile('/js/offcanvas.js');
    ?>

<!-- header -->
    <div class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- The background image is set in the custom CSS -->
                    <h1 class="tagline">专业服务 一切为您</h1>
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
                      <li><a href="/index.php">主页</a></li>
                      <li><a href="?r=about/index">关于我们</a></li>
                      <li class="active"><?php echo $presentitem->cn_name; ?></li>
                    </ol>
            </div><!--/span-->
            <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
              <div class="list-group">
                   <?php
                  foreach($aboutitems as $item){
                      if($item->en_name == $presentitem->en_name)
                        echo '<a href="?r=about/' . $item->en_name . '" class="list-group-item active">'. $item->cn_name .'</a>';
                      else
                          echo '<a href="?r=about/' . $item->en_name . '" class="list-group-item">'. $item->cn_name .'</a>';
                  }
                  ?>
              </div>
            </div><!--/span-->
            <div class="col-xs-6 col-sm-9" id="sidebar" role="navigation">
                <div>
                    <div class="col-md-12">
                       <img class="featurette-image img-responsive" src="../pictures/about/servicequality.jpg" alt="Generic placeholder image">
                    </div>

                    <hr>

                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="well">
                            <h2><span class="label label-success">质量方针:</span></h2>
                            <p>
                                <h3 class="alert alert-warning">站在顾客的立场，了解顾客的需求</h3>
                                <h3 class="alert alert-warning">遵守顾客的产业，追求顾客的满意</h3>
                                <h3 class="alert alert-warning">重视效能，合理收费，提供最佳服务</h3>
                            </p>
                            <h2><span class="label label-success">质量目标:</span></h2>
                            <h3 class="alert alert-warning">咨询服务合格率100%</h3>
                            <h2><span class="label label-success">服务宗旨:</span></h2>
                            <h3 class="alert alert-warning">“顾客永远的满意”是中鼎华宇的最高服务宗旨</h3>
                        </div>
                    </div>
                </div>
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->