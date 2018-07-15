<?php 

interface observer
{
public function notify();
}


class YMNotifier implements observer 
{
	
	public function notify(){
		echo "Notifying vai YM\n"; 
	}
}



class EmailNotifier implements observer 
{
	
	public function notify(){
		echo "Notifying vai Email\n"; 
	}
}



class observable {


	private $observers = array(); 

	public function register($object){
		if ($object instanceof observer) {
			$this->observers[] = $object; 
		}else {
			echo "The Object Must Implement Observer Interface\n";
		}
	}

	public function stateChange(){
		foreach ($$his->observers as $observer) {
			$observer->notify()
		}
	}
}


$postmonitor = new observable();
$ym = new YMNotifier();
$em = new EmailNotifier();
$s= new stdClass();
$postmonitor->register($ym);
$postmonitor->register($em);
$postmonitor->register($s);
$postmonitor->stateChange();
?>