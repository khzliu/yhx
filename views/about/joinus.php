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
                <hr>
                <p>招聘信息</p>
                
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->