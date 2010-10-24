<?php
error_reporting('E_ALL &~E_NOTICE');

class Test extends PHPUnit_Framework_TestCase
{
	public function testHomeworkOutput() 
	{
		ob_start();
		include 'output.php';
		$expected = ob_get_clean();
		
		ob_start();
		include 'homework.php';
		$actual = trim(ob_get_clean());
		
		$this->assertEquals($expected, $actual);
	}
	
	public function testHomeworkSize()
	{
		$expected = 179;
		$actual = filesize('homework.php');
		
		$this->assertLessThan($expected, $actual);
	}
}