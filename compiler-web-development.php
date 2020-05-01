<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>CODECRUSH. | Contacts</title>

    <!-- CSS Plugins -->
    <link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--endbuild-->

    <!-- ******************************************************************************************* -->
    <link rel=stylesheet href=assets/plugins/codemirror/lib/codemirror.css>
    <script src=assets/plugins/codemirror/lib/codemirror.js></script>
    <script src=assets/plugins/codemirror/mode/xml/xml.js></script>
    <script src=assets/plugins/codemirror/mode/javascript/javascript.js></script>
    <script src=assets/plugins/codemirror/mode/css/css.js></script>
    <script src=assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js></script>
    <script src="assets/plugins/codemirror/addon/comment/comment.js"></script>
    <script src="assets/plugins/codemirror/addon/selection/active-line.js"></script>
    <script src="assets/plugins/codemirror/keymap/sublime.js"></script>
    <script type="text/javascript" src="assets/plugins/codemirror/addon/selection/mark-selection.js"></script>
    <script type="text/javascript" src="assets/plugins/codemirror/addon/selection/selection-pointer.js"></script>
  
    <script type="text/javascript" src="assets/plugins/codemirror/js/csslint.js"></script>
    <script type="text/javascript" src="assets/plugins/codemirror/js/jslint.js"></script>
  <!-- edit -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/closebrackets.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/closetag.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/continuelist.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/matchtags.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/trallingspace.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/edit/matchbrackets.js"></script>
  <!-- fold -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/brace-fold.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/foldcode.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/foldgutter.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/indent-fold.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/xml-fold.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/markdown-fold.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/fold/comment-fold.js"></script>
<!-- hint -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/anyword-hint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/html-hint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/javascript-hint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/show-hint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/sql-hint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/hint/xml-hint.js"></script>
<!-- search -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/jump-to-line.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/match-highlighter.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/matchonscrollbar.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/search.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/searchcursor.js"></script>
<!-- scroll -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/annotatescrollbar.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/scrollpasted.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/simplescrollbars.js"></script>
<!-- lint -->
      <script src="assets/plugins/codemirror/addon/lint/lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/javascript-lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/json-lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/css-lint.js"></script>

      <link rel="stylesheet" href="assets/plugins/codemirror/addon/fold/foldgutter.css">
      <link rel="stylesheet" href="assets/plugins/codemirror/addon/dialog/dialog.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/addon/lint/lint.css">      
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/addon/scroll/simplescrollbars.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/addon/search/matchonscrollbar.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/addon/hint/show-hint.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/addon/edit/foldgutter.css">
      <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/theme/tomorrow-night-eighties.css">
    <!-- important for compiler -->
    <!-- <link rel="stylesheet" type="text/css" href=s" "> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script type="text/javascript" src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
    <style type="text/css">
    .CodeMirror {
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
      }
      iframe {
        width: 100%;
        height: 285px;
        border: 1px solid #eee;
      }
    </style>

  </head> 
  <body id="compiler__page">
  	
      <!-- Navbar
    ================================================== -->
    <?php include 'nav-link.php'; ?>

    <!-- CONTENT
      ================================================== -->
  <?php include 'sign-up-in-modal.php'; ?>
      <!-- Background image -->
      <!-- section home -->
          <section class="section__home">
            <div class="container home__body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="home__content">

                    <!-- Heading -->
                    <h1 class="home__heading">
                      Compiler
                    </h1>

                    <!-- Breadcrumbs -->
                    <ol class="breadcrumb">
                      <li><a href="index.php">Home</a></li>
                      <li class="active">web-development</li>
                    </ol>

                  </div> <!-- / .home__content -->
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .container -->

            <!-- Background image -->
            <div class="home__bg"></div>
          </section>
    <!-- compiler design code here  -->
    <section class="section__compiler">
      <div class="container">
        <form class="form-group " method="get" action="index.php">
          <textarea id="code" class="form-control  textarea" >
            <!doctype html>
            <html>
              <head>
                <meta charset=utf-8>
                <title>HTML5 canvas demo</title>
                <style>p {font-family: monospace;}</style>
              </head>
              <body>
                <p>Canvas pane goes here:</p>
                <canvas id=pane width=300 height=200></canvas>
                <script>
                  var canvas = document.getElementById('pane');
                  var context = canvas.getContext('2d');

                  context.fillStyle = 'rgb(250,0,0)';
                  context.fillRect(10, 10, 55, 50);

                  context.fillStyle = 'rgba(0, 0, 250, 0.5)';
                  context.fillRect(30, 30, 55, 50);
                </script>
              </body>
            </html>  
          </textarea>
        </form>
      </div>
      <hr>
      <div class="container form-group">
        <iframe id="preview" class="well"></iframe>
      </div>
    </section>
    


<?php include "footer.php"; ?>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/contact/contact.js"></script>
		
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
    <script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>

  </body>
<script>
  var delay;
  // Initialize CodeMirror editor with a nice html5 canvas demo.
   var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    lineNumbers:true,
    mode: 'text/html',
    keyMap: "sublime",
    lint: true,
    gutters: ["CodeMirror-lint-markers"],
    theme: "tomorrow-night-eighties",
    styleActiveLine: true,
    extraKeys: {"Ctrl-Space": "autocomplete"},
    lineWrapping: true,
    extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
    foldGutter: true,
    gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"],
  });
  editor.on("change", function() {
    clearTimeout(delay);
    delay = setTimeout(updatePreview, 300);
  });
  
  function updatePreview() {
    var previewFrame = document.getElementById('preview');
    var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
    preview.open();
    preview.write(editor.getValue());
    preview.close();
  }
  
  setTimeout(updatePreview, 1000);
</script>
</html>