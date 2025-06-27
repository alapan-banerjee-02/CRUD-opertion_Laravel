<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Palincontroller extends Controller
{
    //logic
    // public function palindrome(){
    //     $a=212;
    //     $temp=$a;
    //     $pal=0;
    //     while($temp>0){
    //         $rem=$temp%10;
    //         $pal=($pal*10)+$rem;
    //         $temp =intval($temp/10);
    //     }
    //     if($pal==$a)
    //         echo $a." is a palindrome number.";
    //     else
    //         echo $a." is not a palindrome number.";
    // }

    public function arr_func(){
        $arr=array("red","green","yellow");
        print_r($arr);
        echo "<br>";
        $pop=array_pop($arr);
        echo $pop;
        echo "<br>";
        array_push($arr,$pop,"blue");
        print_r($arr);
        echo "<br>";
        $shift=array_shift($arr);// shift and replace places by left side
        print_r($arr);
        echo "<br>";
        array_unshift($arr,"pink",$shift,"white");// it will be oops of shift
        print_r($arr);
        echo "<br>";
        print_r(count($arr));//array size count
        echo"<br>";
        echo sizeof($arr);// same as above
        echo"<br>";
        $rev=array_reverse($arr);//reverse the array
        print_r($rev);
        echo "<br>";
        $a=array(30,"hii6",300,"hello",45.7);
        print_r($a);
        echo "<br>";
        $sum=array_sum($a);//sum of the array only numberic value
        print_r($sum);
        echo "<br>";
        $b=array("a","b","c");
        $c=array(1,2,3);
        print_r(array_combine($b,$c));// array combine by key value pair
        echo "<br>";
        print_r(array_merge($arr,$b,$c));// merge this array
        echo "<br>";
        $a1=array(1,2,2,2,3,3,3,3,3,4,4,2,5,1);
        print_r(array_unique($a1));// unique value of array
        echo "<br>";
        print_r(array_count_values($a1));// which value repit how much in this array it will be came by key value pair
        echo "<br>";

    }
}
