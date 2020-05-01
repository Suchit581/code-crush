<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  	
</head>
<body>
<div class="body col-md-12">
   <div class="player">
     <video class="player__video viewer" src="course/youtube c/1.mp4" type="video/mp4"></video>
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
<script src="script.js"></script>
</body>
</html>