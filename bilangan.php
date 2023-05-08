<?php

    //ganjil

    for($x =1; $x <= 10; $x++){ 

        //prima
        $a = 0;
        for($j=1;$j<=$x;$j++){
            if($x % $j == 0){
                $a++;
            }
        }
        if($x == 1){
            echo "$x=>"; echo"Fiz<br>";
            //echo prima
        } elseif($a == 2 ){
            echo "$x=>"; echo"FizBuzz<br>";
        }
        //echo genap         
         else {
            echo "$x=>"; echo"Buzz<br>";
        }
    }
       
    

    // for($x=1; $x <=10; $x++){
    //     if($x % 2 == 0){
    //         echo "$x=>";echo "Buzz";
    //     }
    // }


