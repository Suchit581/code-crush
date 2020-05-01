<!DOCTYPE html>
<?php
session_start();
include "../include/dbh.inc.php";
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>HTML Video Player</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">	
<?php
if (isset($_SESSION['counter']) and $_SESSION['counter'] <= 5 and $_SESSION['counter'] > 0 ) {
	$counter = $_SESSION['counter'];
	$sql_video = "select * from video_title where language_id = 1 and video_title_id = $counter";
	$result = mysqli_query($conn,$sql_video);
	$i=1;
	while ($row_video = mysqli_fetch_array($result)) {	
	?>
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" href="#<?php echo 'data'.$i; ?>"><?php echo $row_video['video_title'];?></a>
	          <a data-toggle="collapse" href="#<?php echo "data".$i; ?>" class="pull-right">+</a>
	        </h4>
	      </div>
	      <?php
	      	$id = $row_video['video_title_id'];
	      	$sql_video_path = "select * from video_path where language_id = 1 && video_title_id = $id";
			$result_path = mysqli_query($conn,$sql_video_path);
			while ($row_video_path = mysqli_fetch_array($result_path)) {	
	      ?>
	      <div id="<?php echo 'data'.$i ?>" class="panel-collapse collapse">
	        <div class="panel-body">
	        	<div class="player">
	        		<video class="player__video viewer" src="course/<?php echo $row_video_path['video_path'] ; ?>"></video>
			    	<div class="player__controls">
			    		<div class="progress">
			    			<div class="progress__filled"></div>
			    		</div>
			    		<div class="form-group col-md-12">
						   <div class="col-md-1">
						   		<button class="player__button toggle form-control btn btn-block" title="Toggle Play" >►</button>
						   </div>
						   <div class="col-md-4">
						   		<input type="range" name="volume" class="player__slider " min="0" max="1" step="0.05" value="1">
						   </div>
						   <div class="col-md-4">
						   		<input type="range" name="playbackRate" class="player__slider " min="0.5" max="2" step="0.1" value="1">
						   </div>
						   <div class="col-md-1">
						   		<button data-skip="-10" class="player__button form-control btn btn-block">« 10s</button>
						   </div>
						   <div class="col-md-1">
						   		<button data-skip="25" class="player__button form-control btn btn-block">25s »</button>
						   </div>
						   <div class="col-md-1">
						   		<button id="fullscreenbtn" class="player__button form-control btn btn-block">[ &nbsp;]</button>
						   </div>
				       </div>
			    	</div>
			   </div>
	        </div>
	        <div class="panel-footer"></div>
	      </div>
	  <?php $i++;
	} ?>
	
	    </div>
	<?php
	}
	$_SESSION['counter'] = $_SESSION['counter'] + 1;
} else {
	$_SESSION['counter'] = 1;
	header("Location:counter.php");
}
?>
</div>

<script src="script.js"></script>
</body>
</html>