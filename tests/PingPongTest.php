<?php

	require_once "src/PingPong.php";

	class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_makePingPong_checkThree()
		{
			//Arange
        	$test_PingPongGenerator = new PingPongGenerator;
			$input = 9;

			//Act
			$result = $test_PingPongGenerator->makePingPong($input);

			//Assert
			$this->assertEquals("Ping", $result);
		}

		function test_makePingPong_checkFive()
		{
			//Arange
			$test_PingPongGenerator = new PingPongGenerator;
			$input = 25;

			//Act
			$result = $test_PingPongGenerator->makePingPong($input);

			//Assert
			$this->assertEquals("Pong", $result);
		}

		function test_makePingPong_checkThree_Five()
		{
			//Arange
			$test_PingPongGenerator = new PingPongGenerator;
			$input = 15;

			//Act
			$result = $test_PingPongGenerator->makePingPong($input);

			//Assert
			$this->assertEquals("PingPong", $result);
		}




	}

?>
