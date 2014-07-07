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
                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-6">
                    <h2 class="featurette-heading">了解英华信</h2>
                    <p class="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp北京英华信咨询有限公司是从事CCC认证咨询，ISO9001标准的认证咨询公司。自创办至2010年公司已为千余家企业的CCC产品强制性认证、CQC产品自愿性认证、ISO9001质量体系认证、ISO14001环境管理体系认证、TS16949汽车质量管理体系认证、生产许可证等做了咨询服务，并与他们建立起长期的良好咨询服务合作关系。</p>
                  </div>
                  <div class="col-md-6">
                    <img class="featurette-image img-responsive" src="/pictures/about/yhx_0.jpg" alt="Generic placeholder image">
                  </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                  <div class="col-md-6">
                    <img class="featurette-image img-responsive" src="/pictures/about/yhx_1.jpg">
                  </div>
                  <div class="col-md-6">
                    <h2 class="featurette-heading">为什么选择我们？ </h2>
                    <p >北京英华信咨询有限公司自创建以来，凭借强大的专业咨询队伍，丰富的企事业管理工作经验，科学、严谨、务实、高效的工作作风，为积极投身管理体系建设的企事业单位提供及时、优质的咨询服务．为确保咨询服务的质量，本公司坚持“量体裁衣，有效管理”的原则，针对不同行业、企业派出专业 性较强的咨询专家，透彻诊断、有效培训、逐步导入所需的管理标准，既达到了企业认证的目的，又良好地解决了企业管理过程存在的问题，从而使企业从管理中长期受益。</p>
                  </div>
                </div>
                
                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->
                <p id="aboutyhx">
　　
                我公司愿与企业协手共创美好的明天，协助企业提高管理水平，帮助企业获取认证证书以提高企业声誉，促进企业产品质量持续、稳定地提高。</P>
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->