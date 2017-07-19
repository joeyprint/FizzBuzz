<?php

namespace App;

class FizzBuzz {

  public function input($num1) {
    if(is_numeric($num1)) {
      if($num1%2 == 1) {
        return "Fizz";
      }
      else {
        return "Buzz";
      }
    }
    else {
      return "Fizz";
    }
  }
}