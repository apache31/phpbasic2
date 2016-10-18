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
        $array1=['a'=>25,'b'=>34,'c'=>27];
        
        print_r($array1);
        
        echo "<hr><h3>Foreach</h3>";
        foreach ($array1 as $key => $value) {
            echo $key." : ".$value."<br>";
        }
        ?>
    </body>
</html>
