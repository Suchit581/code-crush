<?php ob_start(); ?>
<nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            <h1><a class="navbar-brand" href="../index.php"><center><img src="../../assets/icon/logo-white.svg" height="25"></center></a></h1>         
      </div>
      <div class=" border-bottom">
          <div class="full-left">
          <section class="full-top pull-right">
          <button id="toggle"><i class="fa fa-arrows-alt"></i></button> 
        </section>
        <div class="left-margin" >
                    <?php if (isset($_SESSION['u_id'])) {
                        if ($_SESSION['u_admin'] == 1) {?>
                            <ul class="nav_1">
                            <li class="dropdown postion-relative">
                                <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
                                    <span class=" name-caret"><?php echo $_SESSION['u_uid']; ?><i class="caret"></i></span>
                                </a>
                                <ul class="dropdown-menu " role="menu">
                                    <li><a href="../profile.php"><i class="fa fa-user"></i>Edit Profile</a></li>
                                    <li><a href="../include/logout.inc.php"><i class="fa fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>                  
                        </ul>
                        <?php
                        }
                        else{?>
                            <ul class="nav_1">
                        <li class="dropdown postion-relative">
                            <!-- <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
                                <span class=" name-caret">Rackham<i class="caret"></i></span>
                            </a> -->
                            <a href="#loginModal" data-toggle="modal" class="dropdown-toggle dropdown-at">
                                Login <i class="fa fa-sign-in"></i> </a>
                            <!-- SIGNUP MODAL================================================== -->
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Login</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                            <div class="">
                                            <!-- Sign In form -->
                                                <div class="profile__sign-up">
                                                    <form class="signup__form" action="include/login.inc.php" method="post">
                                                      <div class="form-group">
                                                        <label class="sr-only">Username</label>
                                                        <input type="text" class="form-control" placeholder="Username" name="uid">
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="sr-only">password</label>
                                                        <input type="password" class="form-control" placeholder="password" name="pwd">
                                                      </div>
                                                      <button type="submit" class="btn btn-block btn-primary" name="submit">
                                                        login
                                                      </button>
                                                    </form>
                                                </div> <!-- / .profile__sign-up -->
                                          </div> <!-- / .body-signup__form -->
                                      </div>
                                    </div> <!-- / .row -->
                                  </div> <!-- / .modal-body -->
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </li>                  
                    </ul><?php
                        }
                    }
                    else { ?>

                    <ul class="nav_1">
                        <li class="dropdown postion-relative">
                            <!-- <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
                                <span class=" name-caret">Rackham<i class="caret"></i></span>
                            </a> -->
                            <a href="#loginModal" data-toggle="modal" class="dropdown-toggle dropdown-at">
                                Login <i class="fa fa-sign-in"></i> </a>
                            <!-- SIGNUP MODAL================================================== -->
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Login</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-sm-12">
                                            <div class="">
                                            <!-- Sign In form -->
                                                <div class="profile__sign-up">
                                                    <form class="signup__form" action="include/login.inc.php" method="post">
                                                      <div class="form-group">
                                                        <label class="sr-only">Username</label>
                                                        <input type="text" class="form-control" placeholder="Username" name="uid">
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="sr-only">password</label>
                                                        <input type="password" class="form-control" placeholder="password" name="pwd">
                                                      </div>
                                                      <button type="submit" class="btn btn-block btn-primary" name="submit">
                                                        login
                                                      </button>
                                                    </form>
                                                </div> <!-- / .profile__sign-up -->
                                          </div> <!-- / .body-signup__form -->
                                      </div>
                                    </div> <!-- / .row -->
                                  </div> <!-- / .modal-body -->
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </li>                  
                    </ul>
                <?php } ?>
                 </div><!-- /.navbar-collapse -->   
                 <div>
                 </div>
                <div class="clearfix"></div>
            </div>
            
       
            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
           
            <div class="clearfix"></div>
        </nav>
      
        <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="../update/user-page-update.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">User Management</span> </a>
                    </li>
                    <li>
                        <a href="../index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../blank.php" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Insert</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li><a href="../insert/language-insert.php" class=" hvr-bounce-to-right"><i class="fa fa- nav_icon"></i>Insert language</a></li>
                          <li><a href="../insert/question-answer-insert.php" class=" hvr-bounce-to-right"><i class="fa fa- nav_icon"></i>insert the question</a></li>
                          <li><a href="../insert/user-individual-insert.php" class=" hvr-bounce-to-right"><i class="fa fa- nav_icon"></i>insert the user</a></li>
                          <li><a href="../insert/video-insert.php" class=" hvr-bounce-to-right"><i class="fa fa- nav_icon"></i>insert the video</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Update</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../update/question-page-c.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>c update</a></li>
                            <li><a href="../update/question-page-c++.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>c++ update</a></li>
                            <li><a href="../update/question-page-c#.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>c# update</a></li>
                            <li><a href="../update/question-page-css.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>css update</a></li>
                            <li><a href="../update/question-page-html.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>html update</a></li>
                            <li><a href="../update/question-page-javascript.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>javascript update</a></li>
                            <li><a href="../update/question-page-vb.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>vb update</a></li>
                            <li><a href="../update/question-page-java.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>java update</a></li>
                            <li><a href="../update/question-page-python.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>python update</a></li>
                            <li><a href="../update/user-page-update.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>user update</a></li>
                            <li><a href="../update/language-update.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>language update</a></li>
                         </ul>
                    </li>
                    <li>
                        <a href="../#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Update-video</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="../update/video-update-c.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video c update</a></li>
                            <li><a href="../update/video-update-c++.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video c++ update</a></li>
                            <li><a href="../update/video-update-c#.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video c# update</a></li>
                            <li><a href="../update/video-update-css.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video css update</a></li>
                            <li><a href="../update/video-update-html.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video html update</a></li>
                            <li><a href="../update/video-update-javascript.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video javascript update</a></li>
                            <li><a href="../update/video-update-vb.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video vb update</a></li>
                            <li><a href="../update/video-update-java.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video java update</a></li>
                            <li><a href="../update/video-update-python.php" class="hvr-bounce-to-right"><i class="fa fa-area-chart nav_icon"></i>video python update</a></li>
                         </ul>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">log</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="quiz-log.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>quiz log</a></li>
                            <li><a href="user-log.php" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>user log</a></li>
                            <li><a href="video-log.php" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Vdeo log</a></li>
                        </ul> 
                    </li>
                    <li>
                        <a href="contact.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">contact</span></a>
                    </li>
                </ul>
            </div>
      </div>
        