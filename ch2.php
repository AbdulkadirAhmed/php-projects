<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2 Practice</title>
</head>
<body>
    <h1>Chapter 2 Practice</h1>
    <?php
        echo ("<h2>Use echo to print something on the browser</h2>");
        print ("<h3>You can use print same as echo</h3>");
        // The difference between echo and print 
        echo "<br>echo can have ", "more parameters ", "seperate them with comma";
        // print can not have more parameters 
        print "<br>echo can have ". "more parameters ". "seperate them with comma";
        #difference between single and double quatations
        $a = 8;
        $b = 13;
        $c = $a + $b; #addition of a and b
        echo ("<br>Total of $a and $b = $c");
        $a = 5.25;
        echo ("<br>The new value of a = $a");
        $a = "ASC all CA20$b $c";
        echo ("<br>Now, the value of a = $a");
        echo ("<br>Number of words in a variable is: ". str_word_count($a));
        // constants in php 
        define ("PI", 3.14);
        echo "<br>Value of PI = ". PI;
        // operators precedence 
        echo ("<br>The result of 1 + 5 * 3 = ". 1 + (5 * 3)); // 16
        // echo ("<br>Post increment of $b = ". ++$b); //14
        echo ("<br>The result of 12 / 6 / 2 = ". (12 / 6) / 2); 
        $c = '13';
        if ($c == $b)
            echo "<br>$b and $c are equal";
        else
            echo ("<br>$b and $c are not identical");
        // Using heredoc in php 
        $author = "Axmednuur Maxamed Yuusuf";
        echo <<<HERE
            <br>Macalinkeena <b>$author</b> wuxuu yiri:<br>
            <p align = "left">
            'Debugging' is <b>twice</b> as hard as "writing" the code in the first place.<br>
            Therefore', if you write the code as "cleverly as possible, you are, by "definition', not smart enough to 'debug" it.<br>
            Value of b = $b.
            </p>
            That is all about the text of our macalimuu $author.
HERE;
    ?>
</body>
</html>