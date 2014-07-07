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
            < <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
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
                        <img class="featurette-image img-responsive" src="../pictures/about/servicewell.jpg" alt="Generic placeholder image">
                    </div>
                    
                    <hr>
                    
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="well">
                            <h3><span class="label label-success">强大精深的研发能力</span></h3>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp英华信咨询长期跟踪研究企业管理活动中遇到的实际问题，深入一线发掘剖析最佳企业认证验厂管理实践。对核心环节部分进行梳理、总结、提炼，通过反复论证及实践，将其转化为可传播的知识、理念、方法、工具，使越来越多的企业从中受益。</p>
                        </div>
                        <div class="well">
                            <h3><span class="label label-success">全职务实的讲师团队</span></h3>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp英华信咨询拥有一批全职的、值得信赖的咨询培训专家，他们来自于不同行业，企业实践经验丰富，同时部分顾问也有在国际知名认证机构或验证行的从业经验。他们对工作充满热情，同时也注重咨询培训技巧的不断提升。他们崇尚持续改善，同时也乐于不断创新。这支稳定的全职顾问团队，使我们有实力不断深入了解各行业需求、提供全面解决方案，并利用各自互补的技能为学员和企业客户答疑解惑。</p>
                        </div>
                        <div class="well">
                            <h3><span class="label label-success">基于客户细分的行业经验</span></h3>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp多年以来，我们积累了众多行业的咨询辅导与培训经验，包括汽车、机械、化工、电子、服装、箱包、金融、通信、IT、医药、食品和物流等。我们研究这些行业的企业管理特点，并以此为依据为这些行业制定提升解决方案。同时，我们也利用此庞大的数据库归纳相同或相近行业客户的反馈，不断提高我们为客户提供服务的能力。</p>
                        </div>
                        <div class="well">
                            <h3><span class="label label-success">以注重实效，创造价值为核心</span></h3>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp基于价值导向系统提升（管理标准、专业标准、技术标准、产品标准）解决方案，注重强调实务及落实辅导，让咨询的企业能真正改善素质，达到永续经营的目标，且坚持对每一个辅导方案都以专案管理方式来进行辅导。</p>
                        </div>
                        <div class="well">
                            <h3><span class="label label-success">立体化全方位的服务</span></h3>
                            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp除了顾问师在客户现场提供的咨询培训服务外，英华信咨询还有专业的项目管理团队，为客户提供项目协调、技术支持、满意度跟进、售后服务等丰富多样的增值活动。通过现场与场外提供不同形式的活动，分享与传播知名企业的管理实践与成功经验。</p>
                        </div>
                    </div>
                </div>
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->