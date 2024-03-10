<?
namespace index1;

require "index1Sub.php";

//関数
function fn1($a){
    echo("HelloWorld<br>");
    echo("This FNC Got ".$a);
}
fn1("String");
echo("<br><br>");

//ユーザーのクラス
class User{
    public $id;
    private $userName;

    public function dumpInfo(){
        if(!(($this->userName==NULL)||($this->id==NULL))){
            echo("ID:".$this->id."　名前:".$this->userName."<br>");
        }
    }
    public function setName($name){
        $this->userName= $name;
    }
}

//ユーザークラスのドライバ
$Taro = new \index1\User();
$Taro->id = 1;
$Taro->setName("Taro");
$Taro->dumpInfo();
$Kaito = new \index1Sub\User();
$Kaito->id = 2;
$Kaito->setName("Kaito");
$Kaito->dumpInfo();

?>