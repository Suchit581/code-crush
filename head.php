
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>CODECRUSH</title>

    <!-- CSS Plugins -->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--endbuild-->

    <!-- ******************************************************************************************* -->
    <!-- main -->
      <script type="text/javascript" src="assets/plugins/codemirror/lib/codemirror.js"></script>
      <!-- mode -->
      <script type="text/javascript" src="assets/plugins/codemirror/mode/javascript/javascript.js"></script>
      <script src="assets/plugins/codemirror/mode/clike/clike.js"></script>
      <script src="assets/plugins/codemirror/mode/css/css.js"></script>
      <script src="assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
      <script src="assets/plugins/codemirror/mode/vb/vb.js"></script>
      <script src="assets/plugins/codemirror/mode/python/python.js"></script>
      <script src="assets/plugins/codemirror/mode/xml/xml.js"></script>
      <!-- dialog -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/dialog/dialog.js"></script>
      <!-- display -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/display/autorefresh.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/display/fullscreen.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/display/panel.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/display/placeaholder.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/display/ruler.js"></script>
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
      <!-- merge -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/merge/merge.js"></script>
      <!-- mode -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/mode/loadmode.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/mode/multiplex.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/mode/overlay.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/mode/simple.js"></script>
      <!-- scroll -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/annotatescrollbar.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/scrollpasted.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/scroll/simplescrollbars.js"></script>
      <!-- search -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/jump-to-line.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/match-highlighter.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/matchonscrollbar.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/search.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/search/searchcursor.js"></script>
      <!-- selection -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/selection/active-line.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/selection/mark-selection.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/addon/selection/selection-pointer.js"></script>
      <!-- wrap -->
      <script type="text/javascript" src="assets/plugins/codemirror/addon/wrap/hardwrap.js"></script>
      <!-- lint -->
      <script src="assets/plugins/codemirror/addon/lint/lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/javascript-lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/css-lint.js"></script>
      <script src="assets/plugins/codemirror/addon/lint/html-lint.js"></script>
      <!-- lint hint file  -->
      <script type="text/javascript" src="assets/plugins/codemirror/js/csslint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/js/jslint.js"></script>
      <script type="text/javascript" src="assets/plugins/codemirror/js/htmlhint.js"></script>
      <script src="assets/plugins/codemirror/addon/comment/comment.js"></script>
      <script src="assets/plugins/codemirror/keymap/sublime.js"></script>
      <script type="text/javascript" src="assets/js/modernizr-2.8.3.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="assets/plugins/codemirror/callcss.css">
    <!-- important for compiler -->
    <script type="text/javascript" src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script type="text/javascript" src="js/typed.min.js"></script>
    <link rel="stylesheet" type="text/css" href="video/style.css">
  </head>