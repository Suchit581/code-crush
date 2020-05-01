var css = "#test{\n position:absolute;\n width:auto; \n height:50px;\n}"
	var editor = CodeMirror(document.getElementById("codeeditor"),{	
		value: css,
		mode: "css"
	});


// Template Sources
var bashSource = "echo \"hello, world\"\n";

var basicSource = "PRINT \"hello, world\"\n";

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

var csharpSource = "\
public class Hello {\n\
    public static void Main() {\n\
        System.Console.WriteLine(\"hello, world\");\n\
    }\n\
}\n";

var clojureSource = "(println \"hello, world\")\n";

var crystalSource = "puts \"hello, world\"\n";

var elixirSource = "IO.puts \"hello, world\"\n";

var erlangSource = "\
main(_) ->\n\
    io:fwrite(\"hello, world\\n\").\n";

var goSource ="\
package main\n\
\n\
import \"fmt\"\n\
\n\
func main() {\n\
    fmt.Println(\"hello, world\")\n\
}\n";

var haskellSource = "main = putStrLn \"hello, world\"\n";

var insectSource ="\
2 min + 30 s\n\
40 kg * 9.8 m/s^2 * 150 cm\n\
sin(30°)\n";

var javaSource = "\
public class Main {\n\
    public static void main(String[] args) {\n\
        System.out.println(\"hello, world\");\n\
    }\n\
}\n";

var javaScriptSource = "console.log(\"hello, world\");\n";

var ocamlSource = "print_endline \"hello, world\";;\n";

var octaveSource = "printf(\"hello, world\\n\");\n";

var pascalSource = "\
program Hello;\n\
begin\n\
    writeln ('hello, world')\n\
end.\n";

var pythonSource = "print(\"hello, world\")\n";

var rubySource = "puts \"hello, world\"\n";

var rustSource = "\
fn main() {\n\
    println!(\"hello, world\");\n\
}\n"

var textSource = "hello, world\n";

var sources = {
  1: bashSource,
  2: bashSource,
  3: basicSource,
  4: cSource,
  5: cSource,
  6: cSource,
  7: cSource,
  8: cSource,
  9: cSource,
 10: cppSource,
 11: cppSource,
 12: cppSource,
 13: cppSource,
 14: cppSource,
 15: cppSource,
 16: csharpSource,
 17: csharpSource,
 18: clojureSource,
 19: crystalSource,
 20: elixirSource,
 21: erlangSource,
 22: goSource,
 23: haskellSource,
 24: haskellSource,
 25: insectSource,
 26: javaSource,
 27: javaSource,
 28: javaSource,
 29: javaScriptSource,
 30: javaScriptSource,
 31: ocamlSource,
 32: octaveSource,
 33: pascalSource,
 34: pythonSource,
 35: pythonSource,
 36: pythonSource,
 37: pythonSource,
 38: rubySource,
 39: rubySource,
 40: rubySource,
 41: rubySource,
 42: rustSource,
 43: textSource
};

var fileNames = {
  1: "script.sh",
  2: "script.sh",
  3: "main.bas",
  4: "main.c",
  5: "main.c",
  6: "main.c",
  7: "main.c",
  8: "main.c",
  9: "main.c",
 10: "main.cpp",
 11: "main.cpp",
 12: "main.cpp",
 13: "main.cpp",
 14: "main.cpp",
 15: "main.cpp",
 16: "Main.cs",
 17: "Main.cs",
 18: "main.clj",
 19: "main.cr",
 20: "main.exs",
 21: "main.erl",
 22: "main.go",
 23: "main.hs",
 24: "main.hs",
 25: "main.ins",
 26: "Main.java",
 27: "Main.java",
 28: "Main.java",
 29: "main.js",
 30: "main.js",
 31: "main.ml",
 32: "file.m",
 33: "main.pas",
 34: "main.py",
 35: "main.py",
 36: "main.py",
 37: "main.py",
 38: "main.rb",
 39: "main.rb",
 40: "main.rb",
 41: "main.rb",
 42: "main.rs",
 43: "source.txt"
};