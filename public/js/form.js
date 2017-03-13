$(document).ready(function(){
    $.ajaxSetup(
{
    headers:
    {
        'X-CSRF-Token': $('input[name="_token"]').val()
    }
});

    $("#add_currency").click(function(){
        var values = $("#add_currency_form").serialize();
        $.ajax({
               url: "/curr_site/public/currency/add",
               type: "post",
               data: values ,
               success: function (response) {
                  // you will get response from your php page (what you echo or print)                 
                    alert('herer');
               },
               error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
               }


           });
   
   
   }); 
    
 
});