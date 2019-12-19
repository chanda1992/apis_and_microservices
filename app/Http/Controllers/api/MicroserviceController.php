<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use DateTime;

/**
 * Description of MicroserviceController
 *
 * @author Kinjal
 */
class MicroserviceController extends Controller {
    
    /* return timestamp */
    public function return_timestamp($timestamp)
    {        
        $validate_date = $this->validateDate($timestamp);
        if($validate_date) {
           $unix = strtotime($timestamp); 
            //Sun, 20 Nov 2016 17:31:29 GMT
            $utc = date("D, d M Y H:i:s e", $unix);        
            return response()->json(['unix' => $unix, 'utc' => $utc]);
        }   else {
            return response()->json(['error' => 'Invalid Date']);
        }                  
    }
    
    
    //this function will validate that whether the passed date is valid or not
    function validateDate($date, $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format, $date);
        return $d->format($format) === $date;
    }
}
