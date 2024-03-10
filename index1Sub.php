<?
namespace index1Sub;

class User{
    public $id;
    private $userName;

    public function dumpInfo(){
        if(!(($this->userName==NULL)||($this->id==NULL))){
            echo("ID:".$this->id."　名前:".$this->userName." !!<br>");
        }
    }
    public function setName($name){
        $this->userName= $name;
    }
}

?>