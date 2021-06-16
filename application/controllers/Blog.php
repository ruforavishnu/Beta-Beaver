<?php

class Blog extends CI_Controller
{
	public function index()
	{
		echo "<br> Hello world";
		echo "<br> Hey there, I am being output from a file called Blog.php";
		echo"<br> Lets try something more shall we, I'm going to invoke the double underscore function method to see if that gets output correctly!. Here goes";
		echo "<br> Function invoked :". __FUNCTION__;
		echo "<br> Method invoked :". __METHOD__;
		echo "<br> Class from which this is invoked :". __CLASS__;
		echo "<br> File from which this is invoked :". __FILE__;
		echo "<br> Directory from which this is invoked :". __DIR__;
		echo "<br> Trait from which this is invoked :". __TRAIT__;
		echo "<br> Namespace from which this is invoked :". __NAMESPACE__;

		echo "<br>";
		echo "<br> Testing if myFunction123sf() exists:";
		if(function_exists('myFunction123sf'))
		{
			echo "<br> Yes, Function exists ";
		}
		else
		{
			echo "<br> No, Function does not exist. ";	
		}

	}

	public function myFunction123sf()
	{

	}
}

?>