<?php
class user{

	private $name;
	private $age;

    public function __construct($name,$age)
    {
    	$this->name=$name;
    	$this->age=$age;
    }

    public function getName()
    {
    	return $this->name;
    }
    public function setName($name)
    {
    	$this->name=$name;
    }
// __get MAGIC METHOD

    public function __get($property)
    {
    	if(property_exists($this, $property))
    	{
    		return $this->$property;
    	}
   }
//__set MAGIC METHOD
    public function __set($property,$value)
    {
    	if(property_exists($this,$property))
    	{
    		$this->$property =$value;
    	}
    	return $this;
    }

}
$user1=new user('buru',9);

// echo $user1->setName('angira');
// echo $user1->getName();

$user1->__set('age',10);
echo $user1->__get('age');
?>