<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Palincontroller extends Controller
{
    //logic
    public function palindrome(){
        $a=212;
        $temp=$a;
        $pal=0;
        while($temp>0){
            $rem=$temp%10;
            $pal=($pal*10)+$rem;
            $temp =intval($temp/10);
        }
        if($pal==$a)
            echo $a." is a palindrome number.";
        else
            echo $a." is not a palindrome number.";
    }
}
