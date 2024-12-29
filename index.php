<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // 1 ////nl2br varify /n in the text
        echo nl2br("One line.\nAnother line.",false);

        echo '<hr>';

        // 2 ////print each key in line

        foreach($_SERVER as $key=>$value){
            print "[$key] =>  $value <br/>";
        }

        echo '<hr>';

        // 3 ////////////////////////////////////////////////////////////////

        $name='Eman Ibrahim Ali Hassan Ali';
        echo " Name : $name <br>";
        echo " the length of string include spaces : " .strlen($name) ."<br>";
        ///// word between spaces
        echo " the number of words : " .str_word_count($name) . "<br>";
        ////return the first index of Ali in string name
        echo " the index of the first index of Ali in name : ". strpos($name, "Ali")."<br>";
        echo " convert all letter to lower case : ".strtolower($name) ."<br>";
        echo " replace word by another word : ". str_replace("Eman", "Nourhan", $name) ."<br>";
        echo " reverse the string : ". strrev($name) ."<br>";
        echo " removes any whitespace from the beginning or the end: ". trim($name) ."<br>";
        
        $name_arr = explode(" ", $name);
    
        //Use the print_r() function to display the result:
        print_r($name_arr);
        echo "<br>";

        /////concat string ////
        $FirstName = "Eman";
        $LastName= "Ibrahim";
        $fullName =  $FirstName ." ". $LastName;
        echo " Name : $fullName <br>";

        
        // 4 ////////////////////////////////////////////////////////////////

        echo "<hr>";

        $numbers_arr =array(12,45,10,25);
        
        // Display the key-value pairs
        echo "Display array before any sorting  <br> ";
        print_r($numbers_arr);
        
        // Calculate sum
        $sum = array_sum($numbers_arr);
        
        // Calculate average
        $average = $sum / count($numbers_arr);
        
        // Display results
        echo "<br> The sum of array values: $sum <br>";
        echo "The average of array values: $average <br>"; 
       //////////display array after sorting descending by value
        echo "<br> display array after sorting descending by value  <br>";
        rsort($numbers_arr) ;
        print_r($numbers_arr);

        echo "<hr>";

        /////////////////////////////////////////////////////////////////////

        function display_Array($arr){
            foreach ($arr as $key => $val) {
                echo "[$key] => $val <br>";
            }
        }

        // 5 //////////////////////////////////////////////////
        $names_arr=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);

        echo "display array before any sorting  <br> ";
        display_Array($names_arr);
        
        ///////sorting by ascending order sort by value 
        echo "<br> display array sorting by ascending order sort by value  <br> ";
        asort($names_arr);
        display_Array($names_arr);

        ///////////ascending order sorting by Key/////
        echo " <br> display array ascending order sort by Key  <br> ";
        ksort($names_arr);
        
        display_Array($names_arr);

        //////////descending order sorting by Value/////
        echo "<br> display array descending order sorting by Value  <br> ";
        arsort($names_arr);
        display_Array($names_arr);

        ///////////descending order sorting by Key/////
        echo "<br> display array descending order sorting by key <br> ";
        krsort($names_arr);
        display_Array($names_arr);

          









        




    ?>    
</body>
</html>