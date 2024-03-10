<html>
    <head>
        <link rel = "stylesheet" href= "style1.css">
    </head>
    <body>
        <br><br><br><br>
            <div class = "container">            
            <?
            /*phpの開始*/
            echo("");
                for($x=1;$x<10;$x++){
                    echo('<table class = "table">');
                    echo('<tr><th colspan="1">'.$x.'の段</th></tr>');
                    for($y=1;$y<10;$y++){
                        echo('<tr><td colspan = "1">'.$x.'x'.$y.'='.$x*$y.'</td></tr>');
                    }
                    
                    echo("</table>");
                }
            echo("");
            /*phpの終了*/
            ?>
        </div>
    </body>
</html>