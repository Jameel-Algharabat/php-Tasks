<?php
//----------------1----------------\\
// for($x=1; $x<=10; $x++)
// {
//  if($x< 10)
//  {
//  echo "$x-";
//  }
//  else
//   {
//  echo "$x"."\n";
//   }
// }

//----------------2----------------\\

// $sum = 0;
// for($x=1; $x<=30; $x++)
// {
// $sum +=$x;
// }
// echo "The sum of the numbers 0 to 30 is $sum"."\n";

//----------------3----------------\\
// for($x=1;$x<=5;$x++)
// {
//    for ($y=1;$y<=$x;$y++)
//     {
// 	 echo "*";
// 	    if($y< $x)
// 		 {
// 		   echo " ";
// 		 }
//      }
//      echo  '<br>';
// }
//----------------4----------------\\

//----------------5----------------\\



//////Indexed Arrays///////
$size=array("Big","Medium","Short");  
foreach( $size as $s )  
{  
  echo "Size is: $s<br />";  
}  


///////Associative Arrays//////
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);

$ages["Peter"] = "22";
$ages["Clark"] = "32";
$ages["John"] = "28";


////Multidimensional Arrays//////
$contacts = array(
  array(
      "name" => "Peter Parker",
      "email" => "peterparker@mail.com",
  ),
  array(
      "name" => "Clark Kent",
      "email" => "clarkkent@mail.com",
  ),
  array(
      "name" => "Harry Potter",
      "email" => "harrypotter@mail.com",
  )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[1]["email"];






































//----------------6----------------\\
// $n = 5;
// $x = 1;
// for($i=1;$i<=$n-1;$i++)
// {
//  $x*=($i+1); 
// }
// echo $n = $x;


//----------------7----------------\\
// function Fibonacci($n){
  
//   $num1 = 0;
//   $num2 = 1;

//   $counter = 0;
//   while ($counter < $n){
//       echo ' '.$num1;
//       $num3 = $num2 + $num1;
//       $num1 = $num2;
//       $num2 = $num3;
//       $counter = $counter + 1;
//   }
// }

// $n = 9;
// Fibonacci($n);


//----------------8----------------\\
// $text="Orange coding Academy";
// $search_char="c";
// $count="0";
// for($x="0"; $x< strlen($text); $x++)
//   { 
//     if(substr($text,$x,1)==$search_char)
//     {
//     $count=$count+1;
// 	}
//   }
// echo $count."\n";

//----------------9----------------\\




//----------------10----------------\\



//----------------11----------------\\

//----------------12----------------\\



//----------------13----------------\\




//----------------14----------------\\
?>
<!-- <table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
// for($i=1;$i<=6;$i++)
// {
// echo "<tr>";
// for ($j=1;$j<=5;$j++)
//   {
//   echo "<td>$i * $j = ".$i*$j."</td>";
//   }
//   echo "</tr>";
//   }
?>
</table> -->