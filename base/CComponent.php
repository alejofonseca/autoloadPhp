<?php
include 'base/CException.php';
class CComponent
{
	private $data = array();
	
	public function __set($name,$value)
	{
		echo "setting $name to $value <br /><br />";
		$this->data[$name] = $value;
	}
	
	public function __get($name)
	{
		if( isset($this->data[$name]) ){
			echo "getting $name ";
			return $this->data[$name];
		}else{
			throw new CException("Propiedad $name no definida");
		}
	}
}
?>