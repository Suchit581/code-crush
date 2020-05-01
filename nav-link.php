<?php ob_start(); ?>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
    
        <!-- Header -->
        <div class="navbar-header">

          <!-- Collapse toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a class="navbar-brand" href="index.php">
          	<img src="assets/icon/logo-white.svg" class="img-responsive" id="id">
          	<!-- CODECRUSH<span>.</span> -->
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
		          <a href="courses.php">Courses</a>
		        </li>
            <!-- <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="blog-right-sidebar.php">Blog right sidebar</a></li>
		            <li><a href="blog-left-sidebar.php">Blog left sidebar</a></li>
		            <li><a href="blog-grid.php">Blog grid</a></li>
		            <li><a href="blog-item.php">Blog Item</a></li>
		          </ul>
		        </li> -->
            <li class="dropdown">
		          <a href="quizs.php">Quiz</a>
		        </li>
		        <li><a href="contact.php">Contact</a></li>
            	<li class="dropdown">
              <?php if(isset($_SESSION['u_id'])):?>
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">compilers<i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="compiler-object-oriented.php">Programing</a></li>
		            <li><a href="compiler-web-development.php">web devlopment</a></li>
		          </ul>
              <?php endif; ?>
		        </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<?php if(isset($_SESSION['u_id'])):?>
            	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['u_uid']; ?> <i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
                <li><a href="user-panel.php">view profile</a></li>
                <li><a href="user-quiz.php">result of quiz</a></li>
		            <li><a href="include/logout.inc.php">Logout <span class="ion-android-exit"></span></a></li>
		          </ul>
		        </li>
          	<?php else:?>
            	<li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
            	<li><a href="#signupModal" data-toggle="modal"><i class="ion-android-person"></i> Sign Up</a></li>
          	<?php endif;?>
            <!-- <li class="hidden-xs"> -->
              
              <!-- Search toggle -->
             <!--  <a href="#" class="navbar-search__toggle">
                <i class="ion-search"></i>
              </a> -->

              <!-- Search form -->
              <!-- <div class="navbar-search">
                <form> -->

                  <!-- Input -->
                  <!-- <div class="navbar-search__box">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-accent"><i class="ion-search"></i></button>
                      </span>
                    </div>
                  </div> --> <!-- / .navbar-search__box -->

             <!--    </form>
              </div> --> <!-- / .navbar-search -->

            <!-- </li> -->
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>