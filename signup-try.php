<html>
<?php 
   	include_once 'head.php';
?>
<body>
<a href="#loginModal" data-toggle="modal"><i class="ion-android-person"></i> Login</a>
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
			            <form class="signup__form" action="include/signup.inc.php" method="post">
			              <div class="form-group">
			                <label class="sr-only">Username</label>
			                <input type="text" class="form-control" placeholder="Username" name="uid">
			              </div>
		                  <div class="form-group">
		                    <label class="sr-only">password</label>
		                    <input type="password" class="form-control" placeholder="password" name="pwd">
		                  </div>
			              <button type="submit" class="btn btn-block btn-accent" name="submitsignup">
			                Sign Up
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
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>