<?php
    $input = $_POST["Script"];
    $lang = $_POST["Lang"];
    $fileName = "temp.txt";
    $inFile = fopen($fileName, "w");
    fwrite($inFile, $input);
    fclose($inFile);
    $PWD = shell_exec('pwd');
    $PYTHONPATH = '/usr/bin/python';
    switch($lang){
        case "C":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt C');
            break;
        case "CPP11":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt CPP11');
            break;
        case "JAVA":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt JAVA');
            break;
        case "JAVASCRIPT":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt JAVASCRIPT');
            break;
        case "HASKELL":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt HASKELL');
            break;
        case "PYTHON":
            $output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt PYTHON');
            break;
    }
    echo "Output:<br> $output";

?>
