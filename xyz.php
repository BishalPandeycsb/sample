<?php

	if( isset ($_GET['submit'] ) ){
                         		$res1=$_GET['num1'];
                                        $res2=$_GET['num2'];
                                        $op=$_GET['operator'];
		                        switch($op)
		                        {
					                        

			                        case "none": echo"you need to select a method";
			                        break;
			                        case "add":echo $res1+$res2;
		                                break;
			                        case "sub":echo $res1-$res2;
		                                break;
			                        case "mul":echo $res1*$res2;
		                                break;
			                        case "div":echo $res1/$res2;
		                                break;
			                  	case "modulo":echo $res1%$res2;
                                                break;      
                                         }
                                     }
else
{
   echo " this is error";
}

                              
?>
