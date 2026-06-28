<?php
$Items_Sold=$_POST["Items_Sold"];
$Number_of=$_POST["Number_of"];
$Target=$_POST["Target"];


$totl_items=$Items_Sold*$Number_of;
   echo  "total items=". $totl_items."<Br>"  ;

  if($totl_items>=500){
    echo "Excelent"."<br>";
   }else if($totl_items>=300&& $totl_items<500){
    echo "good";
   }else if($totl_items>=150&& $totl_items<300){
    echo "avarage";
   }else if( $totl_items<150){
    echo "poor";
   }


   $result =$totl_items-$Target;
   if($result==0){
    echo "target met exectly 0";
   }else if($result>=50){
    echo "avove  target by 50";
   }else if($result<=50){
    echo "below  target by 50";
   }else if($result>=40){
    echo "below  target by 40";
   }


?>