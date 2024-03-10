<?php
namespace Practice1;
?>
<html>
    <head><link rel = "Stylesheet" href = "PracticeStyle.css"></head>
<body>
    <br><br><br><br>
<?php

class Kuku{
    public function ViewLine($num){
        if(!is_int($num)){
            echo("ViewLineメソッドには、1～9のint型を返り値に入れてください。");
            return;
        }
        echo("<div>".$num."の段<br>");
        for($k=1;$k<=9;$k++){
            echo(''.$num.'x'.$k.'='.$num*$k.'<br>');
        }
        echo("<br></div>");
    }
}

$Calc = new Kuku;
echo('<div class= "container">');
for($k = 1;$k<=9;$k++){
    $Calc->ViewLine($k);
}
echo('</div>');
?>
</body>
</html>