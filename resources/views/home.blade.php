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
                        <form name="add_currency_form" method="POST">
                            {{ csrf_field() }}
                            <input name="currency_name" id="currency_name" type="text" placeholder="Currency Name" />
                            <input name="currency_code" id="currency_code" type="text" placeholder="Currency Code" />
                            <input name="add_currency" id="add_currency" value="Add currency" type="button" />
                            
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

