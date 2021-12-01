<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    //
    function getItems() {
        $return = array();
        for($i=1;$i<=100;$i++) {
                if($i % 3 === 0 && $i % 5 === 0){
                    $return[] = 'Coating Damage and Lightning Strike';
                } else if($i % 3 === 0) {
                    $return[] = 'Coating Damage';
                } else if($i % 5 === 0) {
                    $return[] = 'Lightning Strike';
                } else {
                $return[] = $i;
                }
        }
        return $return;
    }
}
