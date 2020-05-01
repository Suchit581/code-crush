

<?php

		$languageID=$_POST["language"];
        error_reporting(0);


	if($_FILES["file"]["name"]!="")
	{
		include "compilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "text/x-csrc":
				{
					include("compilers/c.php");
					break;
				}
				case "text/x-c++src":
				{
					include("compilers/cpp.php");
					break;
				}
				case "text/x-java":
				{	
					include("compilers/java.php");
					break;
				}
				case "python":
				{
					include("compilers/python32.php");
					break;
				}
				case "text/x-csharp":
				{
					include("compilers/c#.php");
					break;
				}
				case "text/x-vb":
				{
					include("compilers/vb.php");
					break;
				}

				
			}
	}
?>


