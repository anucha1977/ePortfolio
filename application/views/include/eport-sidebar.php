<style>
  li.current {
      class:"active"
  }
</style>
                       <div class="navbar-default sidebar " role="navigation">
                          <div class="sidebar-nav navbar-collapse ">
                          <li role="presentation" class="dropdown-header">Dropdown header</li>  
                              <ul class="nav" id="side-menu">
                                  <li><a href="../eportfolio/home">Home</a></li>                                             
                                  <li>
                                      <a href="#"><i class="fa  fa-info-circle  fa-fw"></i> ข้อมูลสว่นบุคล<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                      <li><a href="#"><i class="fa  fa-info-circle  fa-fw"></i> ข้อมูลทั่วไป<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                          <li>
                                              <a href="../eportfolio/profile"><i class="fa fa-user fa-fw"></i> ข้อมูลส่วนตัว</a>
                                          </li>
                                          <li> 
                                              <a href="../eportfolio/education"><i class="fa fa-graduation-cap fa-fw"></i> ข้อมูลการศึกษา</a>
                                          </li>
                                          <li> 
                                              <a href="../eportfolio/skill#eportfolio"><i class="fa fa-book  fa-fw"></i> ทักษะ</a>
                                          </li>
                                          <li>
                                              <a href="../eportfolio/experience"><i class="fa fa- fa-file-o  fa-fw"></i>ประสบการณ์</a>
                                          </li>   
                                          <li>
                                              <a href="../eportfolio/referances"><i class="fa  fa-search  fa-fw"></i>อ้างอิง</a>
                                          </li>                                          
                                      </ul>
                                      <!-- /.nav-second-level -->
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa  fa-info-circle  fa-fw"></i> ข้อมูลการทำงาน<span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li>
                                                  <a href="../eportfolio/teach"><i class="fa fa-user fa-fw"></i> ข้อมูลงานสอน</a>
                                                  <a href="../eportfolio/research"><i class="fa fa-user fa-fw"></i> ข้อมูลงานวิจัย</a>
                                              </li>
                                                                                    
                                          </ul>
                                          <!-- /.nav-second-level -->
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa  fa-info-circle  fa-fw"></i> จัดการระบบ<span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li>
                                                  <a href="../admin/index"><i class="fa fa-user fa-fw"></i> ระดับการศึกษา</a>
                                                  <a href="../eportfolio/research"><i class="fa fa-user fa-fw"></i> วุฒิการศึกษา</a>
                                                  <a href="../eportfolio/research"><i class="fa fa-user fa-fw"></i> สาขา</a>
                                              </li>
                                                                                    
                                          </ul>
                                          <!-- /.nav-second-level -->
                                      </li>
                                      </ul>
                                      <!-- /.nav-second-level -->
                                  </li>
                                  
                                   
                              </ul>

                          </div>
                          <!-- /.sidebar-collapse -->
                      </div>
                      <?php
                      echo $this->uri->segment(2)
                      ?>
