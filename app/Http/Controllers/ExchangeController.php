<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exchange;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $exchange = new Exchange();
        
        $exchange->currencies_id = $request->input('currency_list');
        $exchange->value_to_one_dollar = $request->input('exchange_rate');
        $exchange->save();
        
        return json_encode("Added Exchange successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function calculate(Request $request)
    {
        $response = array();
        
        $amount = $request->input('exchange_input');
        
        $from_exchange = Exchange::findOrFail($request->input('from_currency_list'));
       
        if ($from_exchange == null){
            $response = array(
                
                "status" => false,
                "message"=>"Exchange value not found"
            );
            return json_encode($response);
        }
        $from_value = $from_exchange['value_to_one_dollar'] * $amount;
        
          
      
        $to_exchange = Exchange::findOrFail($request->input('to_currency_list'));
        if ($to_exchange == null){
            $response = array(
                
                "status" => false,
                "message"=>"Exchange value not found"
            );
            return json_encode($response);
        }

        $exchanged_value = $from_value / $to_exchange['value_to_one_dollar'];
        
        $response = array(

            "status" => true,
            "exchange_value" => $exchanged_value,
            "message"=>"Exchange value:" . $exchanged_value 
        );
        return json_encode($response);
        

        
    }
}
