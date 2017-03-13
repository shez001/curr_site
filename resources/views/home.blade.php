@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Welcome
                    
                    <div class="form-inline">
                        
                        <h2>Add Currency:</h2>
                        <form name="add_currency_form" id="add_currency_form" method="POST">
                            {{ csrf_field() }}
                            <input name="currency_name" id="currency_name" type="text" placeholder="Currency Name" />
                            <input name="currency_code" id="currency_code" type="text" placeholder="Currency Code" />
                            <input name="add_currency" id="add_currency" value="Add currency" type="button" />
                            
                        </form>
                        
                        <h2>Add Exchange:</h2>
                        <form name="add_exchange_form" id="add_exchange_form" method="POST">
                            {{ csrf_field() }}
                            <select name="currency_list" id="currency_list"></select>
                            Exchange rate: <input name="exchange_rate" id="exchange_rate" type="number"/>
                            <input name="add_currency" id="add_exchange" value="Add Exchange" type="button" />
                            
                        </form>
                        
                        <h2>Convert Currecny:</h2>
                        <form name="exchange_form" id="exchange_form" method="POST">
                            {{ csrf_field() }}
                            From exchange: <select name="from_currency_list" id="from_currency_list"></select>
                            To exchange: <select name="to_currency_list" id="to_currency_list"></select>
                            
                            Amount to convert: <input name="exchange_input" id="exchange_input" type="number"/><br>
                            Amount to receive: <input name="exchange_output" id="exchange_output" readonly="readonly" type="number"/>
                            
                        </form>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

