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
    <!-- <link rel="stylesheet" type="text/css" href=s" "> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script type="text/javascript" src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

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
                      <li class="active">Compiler</li>
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
        <div class="cspace">
            <div class="form-group">
               <form action="compile.php" id="form" name="f2" method="POST" >
                  <label for="lang">Choose Language</label>
                  <select onchange="selectMode()" name="language" id="select" class="form-control form-group">
                     <!-- <option value="text/html">html</option> -->
                     <!-- <option value="css">css</option> -->
                     <!-- <option value="javascript">javascript</option> -->
                     <option>select</option>
                     <option value="text/x-csrc">c</option>
                     <option value="text/x-c++src">c++</option>
                     <option value="text/x-java">java</option>
                     <option value="python">python</option>
                     <option value="text/x-vb">vb</option>
                     <option value="text/x-csharp">c#</option>
                  </select>
                  <div class="form-group">
                    <label for="ta">Write Your Code</label>
                    <textarea name="code" id="codeeditor"></textarea>
                  </div>
                  <label for="in">Enter Your Input</label>
                  <textarea class="form-control form-group" name="input" id="inputeditor" rows="10"></textarea>
                  <input type="submit" id="st" class="btn btn-primary form-group" value="Run Code">
               </form>
               <script type="text/javascript">
                  $(document).ready(function(){
                     $("#st").click(function(){
                           $("#div").html("Crushing Your Code ......");
                     });
                  });
               </script>
               <script>
                  //wait for page load to initialize script
                  $(document).ready(function(){
                      //listen for form submission
                      $('form').on('submit', function(e){
                        //prevent form from submitting and leaving page
                        e.preventDefault();
                  
                        // AJAX 
                        $.ajax({
                              type: "POST", //type of submit
                              cache: false, //important or else you might get wrong data returned to you
                              url: "compile.php", //destination
                              datatype: "html", //expected data format from process.php
                              data: $('form').serialize(), //target your form's data and serialize for a POST
                              success: function(result) { // data is the var which holds the output of your process.php
                  
                                  // locate the div with #result and fill it with returned data from process.php
                                  $('#div').html(result);
                              }
                          });
                      });
                  });
               </script>
               <div class="form-group">
                 <label for="out" class="">Output</label>
                 <textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea>
               </div>
            </div>
      </div>
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
    <!-- endbuild -->
	<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTGnDWmYKPhKslCvPfkrcZDpgT_QMHT0s&callback=initMap" async="" defer=""></script>

  </body>
  <script>
  var input = document.getElementById("select");
  var cSource = "\
  #include <stdio.h>\n\
  \n\
  int main(void) {\n\
      printf(\"hello, world\\n\");\n\
      return 0;\n\
  }\n";

  var cppSource = "\
  #include <iostream>\n\
  \n\
  int main() {\n\
      std::cout << \"hello, world\" << std::endl;\n\
      return 0;\n\
  }\n";
  var javaSource = "\
  public class Main {\n\
      public static void main(String[] args) {\n\
          System.out.println(\"hello, world\");\n\
      }\n\
  }\n";

  var javaScriptSource = "console.log(\"hello, world\");\n";
  var pythonSource = "print(\"hello, world\")\n";
  var html = "<!DOCTYPE html>\n\t<html>\n\t\t<head>\n\t\t\t<title></title>\n\t\t</head>\n\t\t<body>\n\t\t</body>\n\t</html>";
  var css = ".body{ \n background-color:red;\n}";
  var vb = "Class rocket\n\tPrivate quality as Double\n\tPublic Sub launch() as String\n\tIf quality > 0.8\n\tlaunch = \"Successful\"\n\tElse\n\tlaunch = \"Failed\"\n\tEnd If\n\tEnd sub\n\tEnd class";
  var csharp = "using System;\nclass Program\n{\n\tstatic void Main()\n\t{\n\t\tint x = 10;\n\t\tint y = 25;\n\t\tint z = x + y;\n\t\tConsole.Write(\"Sum of x + y = \"+ z);\n\t}\n}";

  function selectMode() {
    var mode = input.options[input.selectedIndex].value;
    switch (mode) {
    case "text/html":
        editor.setOption("value", html);
        // cm.refresh();
        break;
    case "css":
      editor.setOption("value", css);
      // cm.refresh();
      break;
    case "javascript":
      editor.setOption("value", javaScriptSource);
      // cm.refresh();
      break;
    case "python":
      editor.setOption("value", pythonSource);
      // cm.refresh();
      break;
    case "text/x-csrc":
      editor.setOption("value", cSource);
      // cm.refresh();
      break;
    case "text/x-c++src":
      editor.setOption("value", cppSource);
      // cm.refresh();
      break;
      case "text/x-java":
      editor.setOption("value", javaSource);
      break;
      case "text/x-vb":
      editor.setOption("value", vb);
      break;
      case "text/x-csharp":
      editor.setOption("value", csharp);
      break;
    };
    editor.setOption("mode", mode);
  };
</script>
<script>
  var editor = CodeMirror.fromTextArea(document.getElementById("codeeditor"), {
    lineNumbers: true,
    keyMap: "sublime",
    mode: "default",
    autoCloseBrackets: true,
    matchBrackets: true,
    showCursorWhenSelecting: true,
    theme: "tomorrow-night-eighties",
    styleActiveLine: true,
    annotateScrollbar: true,
    showCursorWhenSelecting:true,
    pasteLinePerSelection:true,
    extraKeys: {"Ctrl-Space": "autocomplete"},
    highlightSelectionMatches: {showToken: /\w/, annotateScrollbar: true},
    annotateScrollbar: true,
    extraKeys:{
        "F11": function(cm) {cm.setOption("fullScreen", !cm.getOption("fullScreen"),true);},
        "Esc": function(cm) {if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);},
      },
    indentUnit: 4,
    indentWithTabs: true,
    lineWrapping: true,
    extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
    foldGutter: true,
    gutters: ["CodeMirror-lint-markers","CodeMirror-linenumbers", "CodeMirror-foldgutter"],
    lint: true
  });
  var mac = CodeMirror.keyMap.default == CodeMirror.keyMap.macDefault;
  CodeMirror.keyMap.default[(mac ? "Cmd" : "Ctrl") + "-Space"] = "autocomplete";
</script>

</html>