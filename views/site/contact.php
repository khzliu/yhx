 <?php
    $this->registerCssFile('/css/contact.css'); 
    $this->registerCssFile('/css/bootstrap.css'); 
    $this->registerJsFile('/js/offcanvas.js');
    $this->registerJsFile('http://api.map.baidu.com/api?v=1.2');
    $this->registerJsFile('/js/contact.js');
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
                      <li class="active">联系我们</li>
                    </ol>
            </div><!--/span-->
           
            <div class="col-xs-12 col-sm-12" id="sidebar" role="navigation">
                <hr>
                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="well">
                        <h3><span class="label label-success">联系方式：</span></h3>
                        <h5 class="alert alert-warning">电话: 029-84384779</h5>
                        <h5 class="alert alert-warning"> 公司名称: 北京英华信咨询有限公司</h5>
                        <h5 class="alert alert-warning">电话: 029-84384779</h5>
                        <h5 class="alert alert-warning">传真:</h5>
                        <h5 class="alert alert-warning">联系人:</h5>
                        <h5 class="alert alert-warning">手机:</h5>
                        <h5 class="alert alert-warning">E-mail: 740364653@qq.com</h5>
                        <h5 class="alert alert-warning">邮编: 710082</h5>
                        <h5 class="alert alert-warning">网址: <a href="http://www.yhx.biz/">http://www.yhx.biz/</a></h5>
                        <hr>
                        <h3><span class="label label-success">地址: 北京丰台</span></h3>
                        <div style="height:480px;border:1px solid gray;margin:30px auto" id="location"></div>
                    </div>
                </div>
                
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->
    
     