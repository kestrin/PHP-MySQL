<?php
    $num = -5;
    if($num <0){
    echo "$num is less then zero";}

    echo "<br>";

    $age = 15;
    if (($age > 12) && ($age <20)){
        echo "$age You are a teenager"; 
    }
     
    echo "<br>";
    if($age < 20){
        echo "You are a teenager";

    }
    else{
        echo "You are a adult";
    }

    echo "<br>";

    if($num <0){ 
        echo "The value $num is a negative";}
        
    
        else if($num == 0){
        echo "The value $num is a 0";}


        else{
        echo "The value $num is a positive";}

        echo "<br>";


    $a = 50;

    $b = 10;

    if($a == $b){
        echo "true";
    }
    else if($a > $b){
        echo "$a is greater $b";
    }

    else{
            echo "false";
    }
    echo "<br>";

    $age = 15;
    switch($age){ 

    case($age >= 0 && $age<=18):
    echo "You are a minor <br>";
    break;

        case($age >= 18 && $age<=25):
    echo "You are a young adult <br>";
    break;

    case($age >25):
    echo "You are an adult <br>";
    break;

    default:
    echo "Invalid age input <br>";
    break;
    }



    $day = "Monday";
    switch ($day){
        case 'Monday':
        echo "Its Monday";
        break;
        
    
        case 'Tuesday':
        echo "Its Tuesday";
        break;
        
    
        case 'Wednsday':
        echo "Its Wednsday";
        break;
        
    
        case 'Thursday':
        echo "Its Thursday";
        break;
        
    
        case 'Friday':
        echo "Its Friday";
        break;
        
    
        case 'Saturday':
        echo "Its Saturday";
        break;
        

        case 'Sunday':
        echo "Its Sunday";
        break;

            default:
    echo "Invalid day input <br>";
    break;
    }
    echo "<br>";    
    $x = 1;
    while($x <=5){
        echo "The number is $x <br>";
        $x++;
        }
    echo "<br>";
    $y = 1;
    do{
        echo "The number is :$y <br>";
        $y++;
        }while($y<=5);

?>  