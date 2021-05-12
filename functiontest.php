
	<?php

	//			abstract class Vehicle
	//{
	//    public function go()
	//    {
	//        echo "Now I'm driving";
	//    }
	//				
	//}
//  class StreetRacer extends Vehicle
//{
//
//}
//class Helicopter extends Vehicle
//{
//    public function go()
//    {
//        echo "Now I'm flying";
//    }
//}
			

		//interface
  interface goAlgorithm
{
    public function go();
		
	
}
		//strategy//
abstract class Vehicle
{
	private	 $goAlgorithm ;

	public function setGoAlgorithm(GoAlgorithm $__goAlgorithm )
	{
		$goAlgorithm = $__goAlgorithm ;
	}
	public function go()
	{
		$goAlgorithm->go();
	}
}
			//ConcreteStrategy A//
 class GoByDrivingAlgorithm implements goAlgorithm
{
	      public function go()
    {
        echo "Now I'm driving";
    }
}

 		//ConcreteStrategy B//
 class GoByFlyingAlgorithm implements goAlgorithm
{
	
	public function go()
	{
		echo "Now I'm flying";
	}
}

		



?>
	
