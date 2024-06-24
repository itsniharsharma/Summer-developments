<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
      <div class="container">
        <?php
        echo "Hello Sir I am";
        $myVar1=4;
        $myVar2=1;

        $myFinalVar=(false and false);
        echo var_dump($myFinalVar);

        $a=0;
        while($a<=10){
          echo "<br>number is :";
          echo $a;
          $a++;
        }

        $language=array("php","python","java","nodeJs");

        foreach($language as $value){
           echo "<br>value is ";
           echo $value;
        }

        $str="this";
        echo $str. "<br>";
        $lenn = strlen($str);
        echo "length of string is ". $lenn . ".Thank You <br>";
        echo "number of words is". str_word_count($str). ".Thank You <br>";
        echo "reversed string is ". strrev($str). ".Thank You <br>";

        $str2="this is";
        echo "search for is in string ". strpos($str2, "is"). ".Thank You <br>";
        echo "replaced string is ". str_replace("is", "at", $str2). ".Thank You <br>";

        ?>
      </div>

</body>
</html>