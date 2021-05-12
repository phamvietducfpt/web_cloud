<?php

		//interface
  interface goAlgorithm
{
    public function go();
}
		//strategy//
class Vehicle
{
	private	 $goAlgorithm ;
	
	public function __construct(GoAlgorithm $__goAlgorithm)
    {
        $this->goAlgorithm = $__goAlgorithm;
    }
	
	public function setGoAlgorithm(GoAlgorithm $__goAlgorithm )
	{
		$this->goAlgorithm = $__goAlgorithm ;
	}
	public function go()
	{
		$this->goAlgorithm->go();
	}
}
			//ConcreteStrategy A//
 class GoByDrivingAlgorithm implements goAlgorithm
{
	      public function go()
    {
        echo "Tôi đang lái xe!";
    }
}

 		//ConcreteStrategy B//
 class GoByFlyingAlgorithm implements goAlgorithm
{
	
	public function go()
	{
		echo "Tôi đang lái máy bay!";
	}
}



?>
	
