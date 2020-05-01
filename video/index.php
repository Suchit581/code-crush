<?php  
	include "../include/dbh.inc.php";
?>
<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>HTML Video Player</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<div class="body">
   <div class="player">
     <video class="player__video viewer" src="0-welcome.mov" type="video/mov"></video>
     <div class="player__controls">
       <div class="progress">
        <div class="progress__filled"></div>
       </div>
       <button class="player__button toggle" title="Toggle Play">►</button>
       <input type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
       <input type="range" name="playbackRate" class="player__slider" min="0.5" max="2" step="0.1" value="1">
       <button data-skip="-10" class="player__button">« 10s</button>
       <button data-skip="25" class="player__button">25s »</button>
       <button id="fullscreenbtn" class="player__button">[ &nbsp;]</button>
     </div>
   </div>
</div>
<div class="panel-group">
	<?php  
	$sql_video = "select * from video_title where language_id = 1";
	$result = mysqli_query($conn,$sql_video);
	$i=0;
	while ($row_video = mysqli_fetch_row($result)) {	
	?>
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" href="#<?php echo $i ?>"><?php echo $row_video['video_title'];?></a>
	          <a data-toggle="collapse" href="#<?php echo $i ?>" class="pull-right">+</a>
	        </h4>
	      </div>
	      <?php
	      	$id = $row_video['video_title_id'];
	      	$sql_video_path = "select * from video_path where language_id = 1 && video_title_id = $id";
	      	// echo $sql_video_path."<br>";
			$result_path = mysqli_query($conn,$sql_video_path);
			while ($row_video_path = mysqli_fetch_array($result_path)) {	
	      ?>
	      <div id="<?php echo $i ?>" class="panel-collapse collapse">
	        <div class="panel-body">
	        	<!-- <div class="player">
			    	<video class="player__video viewer" src="course/<?php echo$row_video_path['video_path'] ; ?>"></video>
			    	<div class="player__controls">
			    		<div class="progress">
			    			<div class="progress__filled"></div>
			    		</div>
			    		<button class="player__button toggle" title="Toggle Play">►</button>
			    		<input type="range" name="volume" class="player__slider" min="0" max="1" step="0.05" value="1">
			    		<input type="range" name="playbackRate" class="player__slider" min="0.5" max="2" step="0.1" value="1">
			    		<button data-skip="-10" class="player__button">« 10s</button>
			    		<button data-skip="25" class="player__button">25s »</button>
			    		<button id="fullscreenbtn" class="player__button">[ &nbsp;]</button>
			    	</div>
			   </div> -->
			   <?php
			   include "player-try.php";
			   ?>
	        </div>
	        <div class="panel-footer"></div>
	      </div>
	  <?php } ?>
	    </div>
	<?php
	$i++;
	}
	?>
  </div>
<script src="script.js"></script>
</body>
</html>
