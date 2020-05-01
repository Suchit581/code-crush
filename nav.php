
	<!-- Back to top button
    ================================================== -->
    <a id="back-to-top" href="#section__home" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
	  	<i class="ion-android-arrow-up"></i>
	</a>

	  <!-- PRELOADER
    ================================================== -->
    <div id="loader-wrapper">
		  <div id="loader"></div>
	</div>

    <!-- Navbar
    ================================================== -->
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
          	CODECRUSH<span>.</span>
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="about.php">About</a></li>
            <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="courses.php">Courses page</a></li>
		            <li><a href="course-single.php">Single course</a></li>
		          </ul>
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
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
		          	<!-- <li><a href="teachers.php">Teachers</a></li> -->
		          	<!-- <li><a href="teacher-profile.php">Teacher profile</a></li> -->
		            <li><a href="events.php">Events</a></li>
		            <li><a href="event-single.php">Single event</a></li>
		            <li><a href="404page.php">404 Page</a></li>
		          </ul>
		        </li>
		        <li><a href="contact.php">Contact</a></li>
            	<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">compilers<i class="ion-android-arrow-down"></i></a>
		          <ul class="dropdown-menu">
		            <li><a href="compiler-object-oriented.php">object orented</a></li>
		            <li><a href="compiler-web-development.php">web devlopment</a></li>
		          </ul>
		        </li>
            	<li><a href="quiz.php">quiz</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<?php if(isset($_SESSION['u_id'])):?>
            	<li><a href="include/logout.inc.php"><i class="ion-android-exit"></i> Log out</a></li>
          	<?php else:?>
            	<li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
            	<li><a href="#signupModal" data-toggle="modal"><i class="ion-android-person"></i> Sign Up</a></li>
          	<?php endif;?>
            <li class="hidden-xs">
              
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

            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>

    <!-- CONTENT
      ================================================== -->
		
		<!-- SIGNIN MODAL
      ================================================== -->
		<div class="modal fade" id="signinModal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Sign In</h4>
		      </div>
		      <div class="modal-body">
		        <div class="row">
		          <div class="col-sm-12">
		        		<div class="body-signin__form">

			            <!-- Sign In form -->
			            <form class="signin__form" action="include/login.inc.php" method="post">
			            	<!-- Email -->
						  	<div class="form-group">
						        <label for="sign-in__email" class="sr-only">Enter Email Or Username</label>
						        <div class="input-group">
						       		<span class="input-group-addon"><i class="ion-android-person"></i></span>
						    	    <input type="text" class="form-control" id="sign-in__email" placeholder="Enter Username/Email" name="uid">
				              	</div>
			               	</div>
			              <!-- Password -->
						  			<div class="form-group">
				              <label for="sign-in__password" class="sr-only">Enter password</label>
				              <div class="input-group">
				                <span class="input-group-addon"><i class="ion-locked"></i></span>
				                <input type="password" class="form-control" id="sign-in__password" placeholder="Password" name="pwd">
				              </div>
				            </div>
			              <div class="checkbox">
			                <label>
			                  <input type="checkbox"> Remember me
			                </label>
			              </div>
			              <button type="submit" class="btn btn-accent btn-block" name="submit">Submit</button>
			            </form>

			            <div class="signin__alt">
			            	<p>or sign in with social media</p>
			            	<ul class="signin__social">
			            		<li class="twitter"><a href=""><i class="ion-social-twitter"></i></a></li>
				              <li class="facebook"><a href=""><i class="ion-social-facebook"></i></a></li>
				              <li class="googleplus"><a href=""><i class="ion-social-googleplus"></i></a></li>
			            	</ul>
			            </div>

			            <!-- Sign Up link -->
			            <hr>
			            <p>Not registered? <a href="#signupModal">Create an Account.</a></p>

			            <!-- Lost password form -->
			            <p>
			              Forgot password? <a href="#lost-password__form" data-toggle="collapse" aria-expanded="false" aria-controls="lost-password__form">Click here to recover.</a>
			            </p>
			            <div class="collapse" id="lost-password__form">
			              <p class="text-muted">
			                Enter your email address below and we will send you a link to reset your password.
			              </p>
			              <form class="form-inline">
			                <div class="form-group">
			                  <label class="sr-only" for="lost-password__email">Email address</label>
			                  <input type="email" class="form-control" id="lost-password__email" placeholder="Enter email">
			                </div>
			                <button type="submit" class="btn btn-accent">Send</button>
			              </form>
			            </div> <!-- lost-password__form -->
			          </div> <!-- / .body-signin__form -->
		          </div>
		        </div> <!-- / .row -->
		      </div> <!-- / .modal-body -->
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->