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
              <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="about.php">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <i class="ion-android-arrow-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="courses.php">Courses page</a></li>
                  <li><a href="course-single.php">Single course</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <i class="ion-android-arrow-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="blog-right-sidebar.php">Blog right sidebar</a></li>
                  <li><a href="blog-left-sidebar.php">Blog left sidebar</a></li>
                  <li><a href="blog-grid.php">Blog grid</a></li>
                  <li><a href="blog-item.php">Blog Item</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <i class="ion-android-arrow-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="teachers.php">Teachers</a></li>
                  <li><a href="teacher-profile.php">Teacher profile</a></li>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="event-single.php">Single event</a></li>
                  <li><a href="404page.php">404 Page</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a></li>
              <li class="active"><a href="compiler.php">Compiler</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
              <li><a href="#signupModal" data-toggle="modal"><i class="ion-android-person"></i> Sign Up</a></li>
              <li class="hidden-xs">
                
                <!-- Search toggle -->
                <a href="#" class="navbar-search__toggle">
                  <i class="ion-search"></i>
                </a>

                <!-- Search form -->
                <div class="navbar-search" style="display: none;">
                  <form>

                    <!-- Input -->
                    <div class="navbar-search__box">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-accent"><i class="ion-search"></i></button>
                        </span>
                      </div>
                    </div> <!-- / .navbar-search__box -->

                  </form>
                </div> <!-- / .navbar-search -->

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
                    <form class="signin__form" role="form">
                      <!-- Email -->
                      <div class="form-group">
                        <label for="sign-in__email" class="sr-only">Enter email</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="ion-android-person"></i></span>
                          <input type="email" class="form-control" id="sign-in__email" placeholder="Enter email">
                        </div>
                      </div>
                      <!-- Password -->
                      <div class="form-group">
                        <label for="sign-in__password" class="sr-only">Enter password</label>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="ion-locked"></i></span>
                          <input type="password" class="form-control" id="sign-in__password" placeholder="Password">
                        </div>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-accent btn-block">Submit</button>
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
                      <form class="form-inline" role="form">
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

      <!-- SIGNUP MODAL
        ================================================== -->
      <div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Create a New Account</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="body-signup__form">
                    
                    <!-- Sign In form -->
                    <div class="profile__sign-up">

                      <form class="signup__form" role="form">
                        <div class="form-group">
                          <label class="sr-only">Full name</label>
                          <input type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group">
                          <label class="sr-only">Username</label>
                          <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label class="sr-only">E-mail</label>
                          <input type="email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="sr-only">Password</label>
                              <input type="password" class="form-control" placeholder="Password">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="sr-only">Repeat password</label>
                              <input type="password" class="form-control" placeholder="Repeat password">
                            </div>
                          </div>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                          </label>
                        </div><br>
                        <button type="submit" class="btn btn-block btn-accent">
                          Sign Up
                        </button>
                      </form>

                      <hr>

                      <p>
                        Already registered? <a href="#signinModal">Sign in to your account</a>
                      </p>

                    </div> <!-- / .profile__sign-up -->
                  </div> <!-- / .body-signup__form -->
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .modal-body -->
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
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