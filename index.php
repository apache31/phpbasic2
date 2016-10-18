<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Index of PHP Basic2</h1>
        <?php
        echo "<h2>Array 1</h2>";
        $array1=['a'=>25,'b'=>34,'c'=>27];
        
        print_r($array1);
        
        echo "<hr><h3>Foreach</h3>";
        foreach ($array1 as $key => $value) {
            echo $key." : ".$value."<br>";
        }
        
        echo "<h2>Array 2</h2>";
        $array2=["Java","Merida","S-Work","Infinite"];
        
        print_r($array2);
        echo "<hr><h3>Foreach</h3>";
        for($x=0;$x<count($array2);$x++) {
            echo "array2[".$x."] : ".$array2[$x]."<br>";
        }
        
        ?>
    </body>
</html>
