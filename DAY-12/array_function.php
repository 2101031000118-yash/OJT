<?php
  $array1 =array("red","bule","yellow");
  $array2 = array("violet","orange","pink");
  $rev = array_reverse($array1);
  print_r($rev);
  echo'<br/>' . '<br/>';
  $serch = array_search("violet",$array2);
  print_r($search);
  echo '<br/>' . '<br/>';
  foreach($array1 as $a)
  {
    echo"size is :$a<br/>";
  }
  echo'<br/>' . '<br/>';
  $array3 = array("Apple" =>"100","purple"=>"200","Peach"=>"150","Strawberry"=>"75");
  print_r(array_change_key_case($array3,CASE_UPPER));
    echo '<br/>' ;
    print_r(array_change_key_case($array3,CASE_LOWER));
    echo '<br/>'.'<br/>';
    print_r(array_chunk($array3,2));
    echo '<br/>' . '<br/>';
?>

