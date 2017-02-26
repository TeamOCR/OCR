function helloWorld(){

    var script = document.getElementById("script");
    var name = document.getElementById("name");
    switch(name.value){
        case "C":
            script.value = "#include <stdlib.h>\n#include <stdio.h>\n\nint main(void)\n{\n    printf(\"Hello world!\\n\"); \n    return 0;\n}";
            script.select();
            break;
        case "CPP11":
            script.value = "#include <iostream> \nint main () {\n    std::cout << \"Hello world!\" << std::endl;\n}";
            script.select();
            break;
        case "JAVA":
            script.value="public class HelloWorld \n{ \npublic static void main(String[] args) \n {\n    System.out.println(\"Hello world!\");\n }\n}";
            script.select();
            break;
        case "JAVASCRIPT":
            script.value="print('Hello World!');";
            script.select();
            break;
        case "HASKELL":
            script.value="message :: String\nmessage = \"Hello world!\"\nmain = putStrLn message";
            script.select();
            break;
        case "PYTHON":
            script.value="print \"Hello world!\"";
            script.select();
            break;
    }
}
