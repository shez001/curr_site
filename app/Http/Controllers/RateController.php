<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exchange;
use App\Currency;

class RateController extends Controller
{
    //
    public function GetRate(Request $request)
    {
        $response = array();
        
        $amount = $request->input('amount');
        
        $from_exchange = Exchange::query()->findOrFail($request->input('from_currency_id'));
        
        if ($from_exchange == null){
            $response = array(
                
                "status" => false,
                "message"=>"Exchange value not found"
            );
            return json_encode($response);
        }
        $from_value = $from_exchange->get('value_to_one_dollar') * $amount;
        $to_exchange = Exchange::query()->findOrFail($request->input('to_currency_id'));
        if ($to_exchange == null){
            $response = array(
                
                "status" => false,
                "message"=>"Exchange value not found"
            );
            return json_encode($response);
        }

        $exchanged_value = $from_value / $to_exchange->get('value_to_one_dollar');
        
        $response = array(

            "status" => true,
            "message"=>"Exchange value:" . $exchanged_value 
        );
        return json_encode($response);
        

        
    }
}
