<html>
<body>

<?php

$even = 0;
$odd = 0;
$numbers = array(42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8);
foreach $nummers as $x{
    if($x%2 == 0){
        $even++;
    }
    else{
        $odd++;
    }
}

print "the total of even numbers are: $even";
print "the total of odd numbers are: $odd";

$evenOrOdd = array("even"=>$even, "odd" => $odd);
?>

</body>
</html>
