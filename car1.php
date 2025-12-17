<?php
     //const MYCAR = "Volvo"; 
	 //define ("MYCAR",["Toyota","Volvo"]);
	 //define ("MYCAR","Toyota");
	 //var_dump (MYCAR);
	 //Magic CONSTANT:__CLASS__;__DIR__;__FILE__,...
	 
	    class Cars{
	        function myClassName(){
		        return __CLASS__;
		    }
			function myDir(){
			    return__DIR__;
			}
            function myFile(){
                return__FILE__;
            }
            function myFunctionName(){
                return__FUNCTION__;			
		}
        $obj = new Cars();
        echo $obj->myClassName(). "<br>";
		echo $obj->myDir(). "<br>;
		echo $obj->myFunctionName(). "<br>"
?>
