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
                      <li><a href="?r=/about/index">关于我们</a></li>
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
                <div class="col-md-12">
                       <img class="featurette-image img-responsive" src="/pictures/about/servicelist.jpg" alt="Generic placeholder image">
                    </div>

                    <hr>

                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="well">
                            <h3><span class="label label-success">管理咨询:</span></h3>
                            <ol>
                                <li>全国质量奖咨询</li>
                                <li>企业BCM业务持续性管理咨询</li>
                                <li>企业战略决策咨询</li>
                                <li>风险管理咨询</li>
                                <li>6σ管理咨询</li>
                                <li>现场品质管理咨询</li>
                                <li>现场品质管理咨询</li>
                                <li>供应商管理优化咨询</li>
                                <li>质量成本管理咨询</li>
                            </ol>
                            <hr>
                            <h3><span class="label label-success">认证咨询:</span></h3>
                            <ol>
                                <li>质量管理体系（QMS）咨询</li>
                                <li>ISO9001、ISO13485、ISO/TS16949、AS9100、TL9000 、IRIS</li>
                                <li>环境管理体系（EMS）咨询</li>
                                <li>ISO14001 、绿色环保标志 、HSE认证、绿色印刷</li>
                                <li>职业健康安全管理体系（OHSMS）咨询</li>
                                <li>OHSAS18001、危险化学品安全标准化</li>
                                <li>一体化管理咨询</li>
                                <li>ISO9001&ISO14001&OHSAS18001</li>
                                <li>ISO/IEC 17025认证咨询</li>
                                <li>食品安全认证咨询</li>
                                <li>ISO22000 、FSSC22000 、HACCP 、 NSF、BRC、FDA</li>
                                <li>GMP认证咨询</li>
                                <li>药品GMP 、保健食品GMP 、化妆品GMP(ISO22716) 、医疗器械GMP 、食品GMP</li>
                                <li>API认证咨询</li>
                                <li>API Q1体系  API会标认证</li>
                                <li>产品认证咨询</li>
                                <li>CCC、CQC志愿性认证、UL、CE、NSF</li>
                            </ol>
                            <hr>
                            <h3><span class="label label-success">验厂咨询:</span></h3>
                            <ol>
                                <li>社会责任认证咨询</li>
                                <ul>
                                    <li>SA8000 、 ISO26001 、EICC 、ICTI 、WRAP 、BSCI 、ETI 、SEDEX </li>
                                </ul>
                                <li>COC验厂咨询</li>
                                    <ul>
                                        <li>百货： Macys 验厂（梅西）、Kohls 验厂、Jcpenney 验厂、Tchibo 验厂、Costco 验厂 好市多、Marks and Spencer玛莎、Saks萨克斯</li>
                                        <li>超市：Wal-Mart验厂沃、Disney 验厂迪斯尼   · Sears 验厂西尔斯、Best Buy 验厂 百思买、 Hallmark 验厂贺曼、Tesco验厂特易购 、ALDI阿尔迪、LIDL 、 Target 验厂、易买得、欧尚 </li>
                                        <li>文具：Sainsburry 验厂、Office Depot 验厂 欧迪（办公用品）、Staples史泰博（办公用品）玩具：Mattel 验厂美泰 、Hasbro孩之宝</li>
                                        <li>化妆品：LOreal 验厂欧莱雅、Avon 验厂  雅芳</li>
                                        <li>服装：Inditex 验厂、Nike验厂耐克、adidas验厂阿迪达斯、Levis 验厂李维斯（裤子）、PUMA彪马、Guess 验厂、H&M</li>
                                        <li>家具：家得宝（Home Depot）、B&Q百家居、宜家、   美国劳氏公司Lowe’s</li>
                                    </ul>
                                <li>反恐验厂咨询</li>
                                <ul>
                                    <li>GSV 、C-TAPT 、中美联合C-TAPT</li> <li></li>
                                </ul>
                            </ol>
                            <hr>
                            <h3><span class="label label-success">管理培训:</span></h3>
                            <ol>
                                <li>工厂管理课程系列</li>
                                <li>ISO标准认证课程系列</li>
                                <li>品质管理课程系列</li>
                                <li>EHS管理课程系列</li>
                                <li>社会责任/验厂课程系列</li>
                                <li>药品/食品/化妆品管理课程系列</li>
                                <li>主管能力提升课程系列</li>
                                <li>BCM管理课程系列处添加文字</li>
                            </ol>
                        </div>  
                     </div>
                </div>
            </div><!--/span-->
        </div><!--/.container-->
    </div><!--/.contain page-->