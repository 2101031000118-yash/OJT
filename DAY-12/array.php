<?php
     $array1 = array(
                     "key1" => 50,
                     "key2" => 70,
                     "key3" => 30,
     );
     $array2 = array("CRICKET","FOOTBALL","VOLLEYBALL");
     $array_brackets=["KABADDI","HOCKEY","BASKETBALL"];
     $array3 = array(
         "first" => array("first_first"=>10),
        "second" => array("second_first"=>10,
        "second_second" =>array(
        "second_second_first"=>"sub sub array")
        )
        );
     echo"<pre>";
     print_r($array1);
     print_r($array2);
     print_r($array_brackets);
     print_r($array3);
     rsort($array1);
     rsort($array2);
     print_r($array1);
     print_r($array2);
?>
     