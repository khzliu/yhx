
      <div class="row">
        <div class="col-md-2">
           <div id="navigation" class="list-group" style="margin-top: 20px;margin-left: 20px;">
                <?php
                    //设置认证目录
                    $menucertList = $model->menucert;
                    if($model->group === 'cert'){
                    echo '<a class="list-group-item active" href="#cert" data-toggle="collapse" data-parent="#navigation">认证咨询<b class="caret"></b></a>';
                    foreach ($menucertList as $menucert) {
                        if($model->item === $menucert->en_name)
                           echo '<a class="list-group-item active" href="' . $menucert->en_name . '">' . $menucert->en_name . '</a>';
                        }
                    }else{
                        echo '<a class="list-group-item" href="#cert" data-toggle="collapse" data-parent="#navigation">认证咨询<b class="caret"></b></a>';
                        foreach ($menucertList as $menucert) {
                            echo '<a class="list-group-item" href="' . $menucert->en_name . '">' . $menucert->en_name . '</a>';
                        }
                    }
                    
                    //设置验厂目录
                    $menuauditsList = $model->menuaudits;
                    if($model->group === 'audits'){
                    echo '<a class="list-group-item active" href="#audits" data-toggle="collapse" data-parent="#navigation">验厂咨询<b class="caret"></b></a>';
                    foreach ($menuauditsList as $menuaudits) {
                        if($model->item === $menuaudits->en_name)
                           echo '<a class="list-group-item active" href="' . $menuaudits->en_name . '">' . $menuaudits->en_name . '</a>';
                        }
                    }else{
                        echo '<a class="list-group-item" href="#audits" data-toggle="collapse" data-parent="#navigation">验厂咨询<b class="caret"></b></a>';
                        foreach ($menuauditsList as $menuaudits) {
                            echo '<a class="list-group-item" href="' . $menuaudits->en_name . '">' . $menuaudits->en_name . '</a>';
                        }
                    }
                    
                    //设置培训目录
                    $menutrainList = $model->menutrain;
                    if($model->group === 'audits'){
                    echo '<a class="list-group-item active" href="#audits" data-toggle="collapse" data-parent="#navigation">管理培训<b class="caret"></b></a>';
                    foreach ($menutrainList as $menutrain) {
                        if($model->item === $menutrain->en_name)
                           echo '<a class="list-group-item active" href="' . $menutrain->en_name . '">' . $menutrain->en_name . '</a>';
                        }
                    }else{
                        echo '<a class="list-group-item" href="#audits" data-toggle="collapse" data-parent="#navigation">管理培训<b class="caret"></b></a>';
                        foreach ($menutrainList as $menutrain) {
                            echo '<a class="list-group-item" href="' . $menutrain->en_name . '">' . $menutrain->en_name . '</a>';
                        }
                    }
                    
                    //设置服务目录
                    $menuserviceList = $model->menuservice;
                    if($model->group === 'audits'){
                    echo '<a class="list-group-item active" href="#audits" data-toggle="collapse" data-parent="#navigation">推荐服务<b class="caret"></b></a>';
                    foreach ($menuserviceList as $menuservice) {
                        if($model->item === $menuaudits->en_name)
                           echo '<a class="list-group-item active" href="' . $menuservice->en_name . '">' . $menuservice->en_name . '</a>';
                        }
                    }else{
                        echo '<a class="list-group-item" href="#audits" data-toggle="collapse" data-parent="#navigation">验厂咨询<b class="caret"></b></a>';
                        foreach ($menuserviceList as $menuservice) {
                            echo '<a class="list-group-item" href="' . $menuservice->en_name . '">' . $menuservice->en_name . '</a>';
                        }
                    }
                ?>
           </div>
        </div>
          
        <div class="col-md-10">
          <h1 class="page-header">Dashboard</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>
          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>