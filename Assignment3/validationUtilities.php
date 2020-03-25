<?php
function fIsValidLength($input, $minLength, $maxLength) {
   $input = trim($input);
   $IsValid = (strlen($input) >= $minLength && strlen($input) <= $maxLength);
   return $IsValid;
}

function fIsValidDate($date) {
   $date = str_replace('-', '/', $date);
   $test_arr = explode('/', $date);
   if (count($test_arr) == 3 && is_numeric($test_arr[0]) && is_numeric($test_arr[1]) && is_numeric($test_arr[2])) {
      if (checkdate($test_arr[1], $test_arr[2], $test_arr[0])) {
         return true;
      } else {
         return false; 
      }
   } else {
      return false;
   }
}

function fIsValidZipcode($zip){
    if(strlen($zip) == 5 && is_numeric($zip)){
        return true;
    }
    else{
        return false;
    }
}

function fIsValidRange($value,$min,$max){
    if(!is_numeric($value)){
        return false;
    }
    else{
        if($value >= $min && $value <= $max){
            return true;
        }
        else{
            return false;
        }
    }
}
?>