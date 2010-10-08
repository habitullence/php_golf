<?php
class Test extends PHPUnit_Framework_TestCase
{
	public function testHomeworkIsCorrect() 
	{
		$this->_outputIsCorrect('homework.php');
	}
	
	public function testInputIsCorrect()
	{
		$this->_outputIsCorrect('input.php');
	}
	
	public function testSize()
	{
		$expected = 212;
		$actual = filesize('input.php');
		
		$this->assertLessThan($expected, $actual);
	}
	
	private function _outputIsCorrect($file)
	{
		ob_start();
		include 'output.php';
		$expected = trim(ob_get_clean());
		
		ob_start();
		include $file;
		$actual = trim(ob_get_clean());
		
		$this->assertEquals($expected, $actual);
	}
}