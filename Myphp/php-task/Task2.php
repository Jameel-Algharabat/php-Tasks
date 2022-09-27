<?php
// #=1=#
// function check_prime($num)
// {
//    if ($num == 1)
//    return 0;
//    for ($i = 2; $i <= $num/2; $i++)
//    {
//       if ($num % $i == 0)
//       return 0;
//    }
//    return 1;
// }
// $num = 3;
// $flag_val = check_prime($num);
// if ($flag_val == 1)
// echo "prime number";
// else
// echo " non-prime number";

// echo '<br>';
// #=2=#
// function reverse_string($str1)
// {
// $n = strlen($str1);
// if($n == 1)
//     {
//     return $str1;
//     }
// else
//     {
//     $n--;
//     return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
//     }
// }
// print_r(reverse_string('1234')."\n");

// echo '<br>';
// #=3=#
// function lowercase($str1)
// {
//     for ($sc = 0; $sc < strlen($str1); $sc++) {
// 	    if (ord($str1[$sc]) >= ord('A') &&
//         ord($str1[$sc]) <= ord('Z')) {
//     return false;
//         }
//         }
//     return true;
//     }
// var_dump(lowercase('abcdef'));
// var_dump(lowercase('abCdEf'));

// echo '<br>';
#=4=#
// $a = 12;
// $b = 10;

// echo "\nThe number before swapping is:\n";
// echo "Number a =".$a." and b=".$b;

// $temp = $a;
// $a = $b;
// $b = $temp;

// echo "\nThe number after swapping is: \n";
// echo "Number a =".$a." and b=".$b."\n";

// echo '<br>';
#=5=#

// echo '<br>';
#=6=#
// function armstrong_number($num) {
//     $sl = strlen($num);
//     $sum = 0;
//     $num = (string)$num;
//     for ($i = 0; $i < $sl; $i++) {
//       $sum = $sum + pow((string)$num{$i},$sl);
//     }
//     if ((string)$sum == (string)$num) {
//       return "True";
//     } else {
//       return "False";
//     }
//   }
//   echo "Is 153 Armstrong number? ".armstrong_number(153);
//   echo "\nIs 21 Armstrong number? ".armstrong_number(21);
// echo '<br>';
#=7=#


#####################################################################################################################################################



//  echo '<br>';
// //1

// function checkYear($year)
// {
    
//     if ($year % 400 == 0)
//         print("Leap Year");

//     else if ($year % 100 == 0)
//         print("Not a Leap Year");
        
//     else if ($year % 4 == 0)
//         print("Leap Year");
        
//     else
//         print("Not a Leap Year");
// }
// $year = 2013;

// checkYear($year);

// echo '<br>';
// //2



// echo '<br>';
// //3
// function test($x, $y) 
// {
//     return $x == $y ? ($x + $y)*3 : $x + $y;
// }
// echo test(2, 2)."\n";
// echo test(3, 2)."\n";
// echo test(1, 2)."\n"; 

// echo '<br>';
// //4
// function test($a, $s) 
// {
//     return ($a == 30) || ($s == 30) || ($a + $s == 30);
// }

// var_dump(test(30, 0));
// var_dump( test(25, 5));
// var_dump( test(20, 30));
// var_dump(test(20, 25));  

// echo '<br>';
// //5
// function test($n) 
// {
//    return $n % 3 == 0 || $n % 7 == 0;
// }

// var_dump(test(9));
// var_dump(test(20));

// echo '<br>';
// //6
// function test($x, $y) 
// {
//    return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
// }

// var_dump(test(20, 84));
// var_dump(test(14, 50));
// var_dump(test(11, 45));
// var_dump(test(25, 40));
// echo '<br>';
//7
// function largest($x, $y, $z) {
//     $max = $x;

//     if ($x >= $y && $x >= $z)
//       $max = $x;
//     elseif ($y >= $x && $y >= $z)
//       $max = $y;
//     else 
//       $max = $z;

//     echo " $max\n";
//   }

//   largest(100, 50, 25);
//   largest(50, 50, 25);
// echo '<br>';
// //8
// echo '<br>';
//9


// echo '<br>';
//10
function check_vote() 
{
    $name = "Rakesh";
    $age = 15;
    if ($age >= 18) {
        echo $name . ", you Are eligible For Vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
check_vote(); 

// echo '<br>';
// //11
// function CheckNumber($x) {
//     if ($x > 0)
//       {$message = "Positive";}
//     if ($x == 0)
//       {$message = "Zero";}
//     if ($x < 0)
//       {$message = "Negative";}
//     echo $message."\n";
//   }

//   CheckNumber(5.5);
//   CheckNumber(-10.8);
//   CheckNumber(0);
// echo '<br>';
// //12



