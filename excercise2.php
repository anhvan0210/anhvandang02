<?php
//q1
function checkEvenNumber($number)
{
    if ($number % 2==0){
        return true;
    } else {
        return false;
    }
}
$number=10;
if (checkEvenNumber($number)) {
    echo $number.' is an even number<br>';
} else {
    echo $number.' is not an even number<br>';
}
//q2
function total($n)
{
    $sum=0;
    for ($index=1; $index <= $n; $index++) {
        $sum +=$index;
    }
    return $sum;
}
$n=5;
$sum= total($n);
echo 'Total from 1 to 5 is ' .$sum."<br>";
//q3
function showMultiplicationTable() {
    for ($index1=1; $index1 <=10; $index1++) {
        echo 'Multiplication table'.$index1.':<br>';
        for ($index2=1; $index2<=10; $index2++) {
            $product =$index1*$index2;
            echo $index1.'x'.$index2.'=' .$product.'<br>';
        }
    echo '<br>';
    }
}
echo showMultiplicationTable();
//q4
function containsWord ($string4, $word)
{
    $lowercaseString = strtolower($string4);
    $lowercaseWord = strtolower($word);
    if (strpos($lowercaseString, $lowercaseWord) !== false) {
        echo "Chuỗi ".$string4." chứa ".$word."<br>";
        return true;
    } else {
        echo "Chuỗi ".$string4." không chứa ".$word."<br>";
        return false;
    }
}
containsWord ('This is my house','my house');
//q5
function findMaxMin ($array5) {
    $max = $array5[0];
    $min = $array5[0];
    $length = count($array5);
    for ($index5=1; $index5<$length; $index5++) {
        if ($array5[$index5]>$max) {
            $max = $array5[$index5];
        }
        if ($array5[$index5]<$min) {
            $min = $array5[$index5];
        }
    }
    echo 'Maxium: '.$max.'<br>';
    echo 'Minium: '.$min.'<br>';
}
findMaxMin([1.5, 2.3, 4.9, 9.8, 1.2]);
//q6
function sortInAscending1($array6) {
    $n6= count($array6);
    for ($i6=0; $i6< $n6; $i6++) {
        $key=$array6[$i6];
        $i7= $i6-1;
        while ($i7>=0 && $array6[$i7]>$key) {
            $array6[$i7+1] = $array6[$i7];
            $i7--;
        }
        $array6[$i7+1]= $key;
    }
    return $array6;
}
$array6= [1, 4, 10, 5, 2];
$sortArray= sortInAscending1($array6);
echo "Mảng sau khi sắp xếp: ";
echo implode(", ", $sortArray);
echo "<br>";
//q7
function calculateFactorial($n7) {
    $result="";
    if ($n7==0) {
        $result="Giai thừa của ".$n7." là: 1<br>";
    } elseif ($n7<0) {
        $result= "Không tồn tại giai thừa của số âm<br>";
    } else {
        $factorial =1;
        for ($index7=1; $index7 <=$n7; $index7++) {
            $factorial=$factorial*$index7;
        }
        $result= "Giai thừa của ".$n7." là: ".$factorial."<br>";
    }
    echo $result;
}
calculateFactorial(-1);
//q8 
function isPrime($number8) {
    if ($number8 <2) {
        return false;
    }
    for ($index8=2; $index8<$number8; $index8++) {
        if ($number8 % $index8 ==0) {
            return false;
        }
    }
    return true;
}
function findPrimesInRange($start,$end) {
    $primes=[];
    for ($i=$start; $i<=$end; $i++) {
        if (isPrime($i)) {
            $primes[]=$i;
        }
    }
    return $primes;
}
$result8=findPrimesInRange(1, 100);
foreach ($result8 as $prime) {
    echo $prime." là số nguyên tố<br>";
}
//q9
function totalArray($array9) {
    $sum9=0;
    foreach ($array9 as $number9) {
        $sum9 += $number9;
    }
   echo "Tổng các phần tử trong mảng là: ".$sum9."<br>";
}
totalArray([1,2, 3.5, 9, 10]);
//q10
function findFibonacciInRange($start1,$end1) {
    $fibonacci =[];
    $fibonacci[0]=0;
    $fibonacci[1]=1;
    for ($index10=2; $index10 <= $end1; $index10++) {
        $fibonacci[$index10] = $fibonacci[$index10 -1] +$fibonacci[$index10 -2];
    }
    $fibonacciInRange=[];
    foreach ($fibonacci as $number10) {
        if ($number10 >=$start1 && $number10<=$end1) {
            $fibonacciInRange[]=$number10;
        }
    }
    return $fibonacciInRange;
}
$fibonacciNumbers = findFibonacciInRange(0,100);
foreach ($fibonacciNumbers as $number10) {
    echo "Các số fibonacci trong khoảng cho trước là: ".$number10."<br>";
}
//q11
function isArmstrongNumber($number11) {
    $sum11=0;
    $originalNumber=$number11;
    $numDigits=strlen($number11);
    while ($number11>0) {
        $digit=$number11%10;
        $sum11 += pow($digit,$numDigits);
        $number11= (int)($number11/10);
    }
    if ($sum11 === $originalNumber) {
        echo $originalNumber." là số Armstrong<br>";
    } else {
        echo $originalNumber." không phải số Armstrong<br>";
    }
}
isArmstrongNumber(153);
//q12
function insertElement($array12, $element, $position) {
    $arrayLength= count($array12);
    if ($position <0 || $position> $arrayLength) {
        echo "Vị trí chèn không hợp lệ<br>";
        return;
    }
    for ($i12=$arrayLength; $i12>$position; $i12--) {
        $array12[$i12]= $array12[$i12-1];
    }
    $array12[$position]=$element;
    print_r($array12);
}
insertElement([1, 2, 3, 5, 8, 9], 11, 2);
//q13
function removeDuplicates($array13) {
    $uniqueArray=[];
    foreach ($array13 as $value) {
        $isDuplicate= false;
        foreach ($uniqueArray as $uniqueValue) {
            if ($value=== $uniqueValue) {
                $isDuplicate= true;
                break;
            }
        }
    }
    if (!$isDuplicate) {
        $uniqueArray[]=$value;
    }
    echo "Mảng gốc: ";
    print_r($array13);
    echo "<br>";
    echo "Mảng sau khi loại bỏ phần tử trùng lặp: ";
    print_r($uniqueArray);
    echo "<br>";
}
removeDuplicates([1, 2, 3, 5, 7, 3, 9]);

//q14
function findElementIndex($array14, $element1) {
    $index14= array_search($element1, $array14);
    if ($index14 === false) {
        echo "Không tìm thấy phần tử trong mảng<br>";
    } else {
        echo "Vị trí của phần tử trong mảng là: ".$index14."<br>";
    }
}
findElementIndex([1, 2, 4, 8, 15], 15);
//q15
function reverseString($string15) {
    $length15= strlen($string15);
    $reversed='';
    for ($i15= $length15-1; $i15>=0; $i15--) {
        $reversed .=  $string15[$i15];
    }
    echo "chuỗi đảo ngược: ".$reversed."<br>";
    return;
}
reverseString('rarely, usually');
//q16
function countTheNumberElements($array16) {
    $count16=0;
    foreach ($array16 as $element16) {
        $count16 ++;
    }
    echo "Số phần tử trong mảng là: ".$count16."<br>";
    return;
}
countTheNumberElements([1, 2, 15, 89, 21]);
//q17
function isPalindrome($string17) {
    $string17=strtolower(str_replace(' ', '',$string17));
    $length17 = strlen($string17);
    for ($i17=0; $i17< $length17/2; $i17++) {
        if ($string17[$i17] !==$string17[$length17- $i17 -1]) {
            echo "Chuỗi ".$string17." không phải là chuỗi Palindrome<br>";
            return false;
        }
    }
    echo "Chuỗi ".$string17." là chuỗi Palindrome<br>";
        return true;
}
isPalindrome('level');
//q18
function countOccurrences($array18, $element18) {
    $count18= 0;
    foreach ($array18 as $value18) {
        if ($value18===$element18) {
            $count18++;
    }
}
echo "Số lần xuất hiện của phần tử ".$element18." trong mảng là: ".$count18."<br>";
return;
}
countOccurrences([1, 2, 3, 4, 8, 3],3);
//q19
function sortInDescending($array19) {
     $n19= count($array19);
     for ($i19=0; $i19< $n19 -1; $i19++) {
        for ($j =0; $j< $n19 - $i19 -1; $j++) {
            if ($array19[$j] < $array19[$j+1]) {
                $temp19 = $array19[$j];
                $array19[$j] = $array19[$j+1];
                $array19[$j+1]= $temp19;
            }
        }
     }
     return $array19;
}
$array19= [1, 6, 3, 9, 10];
echo "Mảng ban đầu: ".implode(", ",$array19)."<br>";
$sortInDescending= sortInDescending($array19);
echo "Mảng sau khi sắp xếp giảm dần: ".implode(", ", $sortInDescending)."<br>";
//q20
function addToBeginning($array20, $element20) {
    $n20= count($array20);
    $result20= array();
    $result20[0]= $element20;
    for ($i20 =0; $i20<$n20; $i20++) {
        $result20[$i20 +1]=$array20[$i20];
    }
    return $result20;
}
function addToEnd($array20, $element20a) {
    $n20a= count($array20);
    $result20a= array();
    for ($i20a =0; $i20a< $n20a; $i20a++) {
        $result20a[$i20a]= $array20[$i20a];
    }
    $result20a[$n20a]= $element20a;
    return $result20a;
}
$array20=[1, 10, 5, 8, 4];
$newArray1= addToBeginning($array20, 21);
$newArray2= addToEnd($array20, 12);
print_r($newArray1);
print_r($newArray2);
echo"<br>";
//q21
function findSecondLargest($array21) {
    $largest= $array21[0];
    $secondLargest= null;
    foreach ($array21 as $value21) {
        if ($value21> $largest) {
            $secondLargest= $largest;
            $largest= $value21;
        } elseif ($value21< $largest &&($secondLargest===null||$value21>$secondLargest)) {
            $secondLargest=$value21;
        }
    }
    echo "Số lớn thứ hai trong mảng là: ".$secondLargest."<br>";
    return;
}
findSecondLargest([1, 7, 10, 15, 21]);
//q22
function findGCD($a, $b) {
    while ($b!=0) {
        $tempory=$b;
        $b=$a%$b;
        $a=$tempory;
    }
    return $a;
}
 function findLCM($a, $b) {
    $gcd= findGCD($a, $b);
    $lcm=($a*$b)/$gcd;
    return $lcm;
 }
 $a= 12; $b=18;
 $gcd=findGCD($a,$b);
 $lcm=findLCM($a,$b);
 echo "Ước số chung lớn nhất của ".$a." và ".$b." là: ".$gcd."<br>";
 echo "Bội số chung nhỏ nhất của ".$a." và ".$b." là: ".$lcm."<br>";
//q23
function isPerfectNumber($number23) {
    if ($number23<=0) {
        echo $number23." không phải là số hoàn hảo<br>";
        return false;
    }
    $sum23=0;
    for ($i23=1; $i23<=$number23/2; $i23++) {
        if ($number23% $i23==0) {
            $sum23+=$i23;
        }
    }
    if ($sum23==$number23) {
        echo $number23." là một số hoàn hảo<br>";
    } else {
        echo $number23." không phải là một số hoàn hảo<br>";
    }
}
isPerfectNumber(6); 
//q24
function findLargestOddNumber($array24) {
    $largestOddNumber= null;
    foreach ($array24 as $value24) {
        if ($value24%2 !=0 && ($largestOddNumber===null||$value24> $largestOddNumber)) {
            $largestOddNumber = $value24;
        }
    }
    return $largestOddNumber;
}
$largestOddNumber= findLargestOddNumber([1, 5, 9, 10, 45, 79, 24]);
if ($largestOddNumber!== null) {
    echo "Số lẻ lớn nhất trong mảng là: ".$largestOddNumber."<br>";
} else {
    echo "Không có số lẻ trong mảng<br>";
}
//q25
function isPrime2($number25) {
    if($number25<2) {
        echo $number25." không phải là số nguyên tố<br>";
        return false;
    } 
    for ($i25=2; $i25<$number25; $i25++) {
        if ($number25 % $i25===0) {
            echo $number25." không phải là số nguyên tố<br>";
            return false;
        } 
     }
     echo $number25." là số nguyên tố<br>";
            return true;
}
isPrime2(15);
//q26
function findLargestPositiveNumber($array26) {
    $maxPositiveNumber= null;
    foreach ($array26 as $number26) {
        if ($number26>0 && ($maxPositiveNumber=== null|| $number26>$maxPositiveNumber)) {
            $maxPositiveNumber =$number26;
        }
    }
    return $maxPositiveNumber;
}
$largestPositiveNumber= findLargestPositiveNumber([-1, 2, -3, 4.5, -6, 9.8]);
if ($largestPositiveNumber !==null) {
    echo "Số dương lớn nhất trong mảng là: ".$largestPositiveNumber."<br>";
} else {
    echo "Không tìm thấy số dương trong mảng<br>";
}
//q27
function findLargestNegativeNumber($array27) {
    $maxNegativeNumber = null;
    foreach ($array27 as $number27) {
        if($number27<0 && ($maxNegativeNumber===null|| $number27>$maxNegativeNumber)) {
            $maxNegativeNumber= $number27;
        }
    }
    return $maxNegativeNumber;
}
$largestNegativeNumber= findLargestNegativeNumber([-1, -0.9, 2, 9.8, -100]);
if ($largestNegativeNumber!=null) {
    echo "Số âm lớn nhất trong mảng là: ".$largestNegativeNumber."<br>";
} else {
    echo "Không tìm thấy số âm lớn nhất trong mảng<br>";
}
//q28
function sumOfOddNumber($n28) {
    $sum28=0;
    for($i28=1; $i28<=$n28; $i28++) {
        if($i28 %2 !==0) {
            $sum28+=$i28;
        }
    }
    echo "Tổng các số lẻ từ 1 đến ".$n28." là: ".$sum28."<br>";
    return;
}
sumOfOddNumber(10);
//q29
function isPerfectSquare($num29) {
    $sqrt= intval(sqrt($num29));
    return ($sqrt *$sqrt== $num29);
}
function findPerfectSquares($start29, $end29) {
    $result29= array();
    for ($i29= $start29; $i29<= $end29; $i29++) {
       if (isPerfectSquare($i29)) {
        $result29[]= $i29;
       }
    }
    echo "Các số chính phương trong khoảng từ ".$start29." đến ".$end29." là: ".implode(", ", $result29)."<br>";
    return;
}
findPerfectSquares(1, 100);

//q30
function containSubstring ($content, $subContent) 
{
    $len= strlen($subContent);
    $contentLen= strlen($content);
    if ($len > $contentLen) {
        return false;
    }
    for ($i1= 0; $i1 <=($contentLen - $len); $i1++) {
        if (substr($content, $i1, $len)=== $subContent) {
            return true;
        }
    }
    return false;
}
$content='prototyping model has four types';
$subContent='model ';
if (containSubstring($content, $subContent)) {
    echo 'string contains substring<br>';
}
else {
    echo 'string dont contain substring<br>';
}
