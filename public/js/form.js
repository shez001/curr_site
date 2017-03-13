$(document).ready(function(){
    $.ajaxSetup(
    {
        headers:
        {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });
    
    function updateCurrency(){
        
         $.ajax({
               url: "/curr_site/public/currency/get",
               type: "get",
               success: function (response) {
                  // you will get response from your php page (what you echo or print)   
                  optionHtml = "";
                  data = JSON.parse(response);
                  
                  for (key in data){
                      optionHtml += "<option value=" + data[key].id + ">" + data[key].name + "</option>";
                  }
                  
                  $("#currency_list").html(optionHtml);
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
               }


           });
        
        return true;
    }

    updateCurrency();
    $("#add_currency").click(function(){
        var values = $("#add_currency_form").serialize();
        
        $.ajax({
               url: "/curr_site/public/currency/add",
               type: "post",
               data: values ,
               success: function (response) {
                  // you will get response from your php page (what you echo or print)                 
                    alert(response);
                    updateCurrency();
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
               }


           });
   
   
   });
   
   
      $("#add_exchange").click(function(){
        var values = $("#add_exchange_form").serialize();
        
        $.ajax({
               url: "/curr_site/public/exchange/add",
               type: "post",
               data: values ,
               success: function (response) {
                  // you will get response from your php page (what you echo or print)                 
                    alert(response);
                    
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
               }


           });
   
   
   });
    
 
});