<?
    $arrSelector = 0;
    $arr = array();

    $arr[] = "AAA";
    $arr[] = "BBB";
    $arr[] = "CCC";

    var_dump($arr);

  
    echo "<br>Arr ". $arrSelector." : ".$arr[$arrSelector]."<br>";


    echo("<br>");

    for($i =0 ;$i<count($arr);$i++){
        echo("arr".$i." :  ".$arr[$i]."<br>");
    }
    echo("<br><br>");


    $arrSelector1 = "Key2";
    $arr1 = [
        "Key1"=> "AAA",
        "Key2"=>"BBB",
        "Key3"=> "CCC",    
    ];

    
    var_dump($arr1);

    echo "<br>Arr ". $arrSelector1." : ".$arr1[$arrSelector1]."<br>"."<br>"."<br>";


       

    $x =71;
    if($x>=60 &&$x <100){
        echo "Xは60以上である。";
    }else if($x>=100){
        echo "ｘは100以上ある。";
    }else if($x >= 0){
        echo "xは０以上である。";
    }else{
        echo "xは負数。";
    }

    echo("<br><br><br>");

    
?>