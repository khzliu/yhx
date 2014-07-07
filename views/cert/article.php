    <?php
    use app\models\ArticleCert;
    
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
                      <li><a href="?r=cert/index&type=<?php echo $type[0]; ?>"><?php echo $type[1]; ?></a></li>
                      <li class="active"><?php echo $presentArticle->title; ?></li>
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
                    <h4 style="text-align: left"><strong><?php echo $presentArticle->title; ?></strong></h4>
                    <div class="bg-success row" style=";padding: 2px;">
                        <div class="col-md-6 text-left" ></div>
                        <div class="col-md-3 text-right" >来源：<?php echo $presentArticle->editer; ?></div>
                        <div class="col-md-3 text-right" >日期：<?php echo $presentArticle->edittime; ?></div>
                    </div>
                    <p style="margin-top: 20px;margin-bottom: 20px"><?php echo $presentArticle->content; ?></p>
                    <div class="bg-info col-md-12 text-left"><font color='blue'>上一篇：</font>
                        <?php 
                        if($previousArticle==null)
                        {
                            echo '没有了';
                        }else{
                            echo '<a href="?r=cert/article&type=' . $previousArticle->type . '&id=' . $previousArticle->id . '">' . $previousArticle->title . '</a>';
                        }
                        ?>
                        </div>
                    <div class="bg-info col-md-12 text-left"><font color='blue'>下一篇：</font>
                        <?php 
                    if($nextArticle==null)
                        {
                            echo '没有了';
                        }else{
                            echo '<a href="?r=cert/article&type=' . $nextArticle->type . '&id=' . $nextArticle->id . '">' . $nextArticle->title . '</a>';
                        }
                       ?></div>
                <div>
            </div>

            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->
