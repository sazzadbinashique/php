<?php 



class SampleObject 
{
	public $var1 ;
	private $var2 ;
	protected $var3 ; 
	static $var4 ;

	public function _construct() {
		$this->var1 = "Value one "; 
		$this->var2 = "Value Two "; 
		$this->var3 = "Value Three "; 
		SampleObject::$var4 = "Value Four "; 

	}
}


$so = new SampleObject();
// $serilizedso = serialize($so);
// file_put_contents("text.txt", $serilizedso);

$serializedcontent = file_get_contents("text.txt");
$unserializedcontent = unserialize($serializedcontent);
print_r($unserializedcontent);

?>