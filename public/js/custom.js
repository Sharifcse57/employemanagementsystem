$(document).ready(function(){
    $(".dog-button").click(function(){
      
        $('#fade').toggle();

    });
});


$( function() {
    $( "#datepicker1,#datepicker2" ).datepicker({
       changeMonth:true, 
       changeYear: true
    });
} );

$( function() {
    $( "#datepick1,#datepick2" ).datepicker({
      changeMonth:true, 
      changeYear: true
    });
} );


$( function() {
    $( "#menu" ).menu();
} );

  

$(".readview").click(function(){
var abc=$(this).attr("value");
 $.ajax({
  url: 'payitemts.modal',
  method : "POST",
  data: { "id" : abc },
  success : function (data)
  {
    $("#myModal").html(data);
  },
  beforeSend: function(){
   },
   complete: function(){
   }
 });
});


// payitem % calculation

$(".percent_input").keyup(function(){
  
var abc=$(this).attr("data_acccurate");
var id="#accurate_"+abc;

var basic=parseInt($(this).attr("basic_payment"));
var percent=parseInt($(this).val());

$(id).val(basic/100*percent);

var total=0;

$(".exact_input").each(function () {

  total+=parseInt($(this).val());

});
$("#total_ammount").text(total);


});

// payitem exact calculation

$(".exact_input").keyup(function(){
var abc=$(this).attr("data_acccurate");
var id="#percent_"+abc;

var basic=parseInt($(id).attr("basic_payment"));
var exact=parseInt($(this).val());


var  percent= exact*100/basic;
     percent = Math.round(percent * 100) / 100;

$(id).val(percent);

var total=0;

$(".exact_input").each(function () {

  total+=parseInt($(this).val());

});
$("#total_ammount").text(total);
});



$("#find").keyup(function(){
  
$value=$(this).val();
$.ajax({

        type  : 'GET',
        url   : '/abc',
        data  : {'search': $value},
        dataType : 'json',
        success : function(res){
          $table="";
          for (var i = 0; i < res.data.length; i++) 
          {
           var strVar="";  
            strVar +="<a href="+res.data[i].id+">"+res.data[i].fullname+"<\/a>";
            $table += strVar;
          }
              $('.result').html($table);
    },
     error: function(res){
          $table="<tr><td colspan=\" 3\"> search not found <\/td><\/tr>";
              $('.result').html($table);


    } 
  });

});

//active employee

$(".nnn").click(function(){
  
var abc=$(this).attr("value");
var active=$(this).attr("active");
 $.ajax({
        type  : 'GET',
        url   : '/active',
        data  : {'id':abc,'active': active}, 
        dataType : 'json',
        success : function(res){
       
         $('#data_'+abc).fadeOut( "slow", function() {
      $('.success').html("successfully activated");
        });
    }
     
  });

});

//deactive employee

$(".active").click(function(){
  
var abc=$(this).attr("value");
var active=$(this).attr("active");
 $.ajax({
        type  : 'GET',
        url   : '/activated',
        data  : {'id':abc,'active': active}, 
        dataType : 'json',
        success : function(res){
       
         $('#data_'+abc).fadeOut( "slow", function() {
      $('.success').html("successfully deactivated");
        });
    }
     
  });

});

//number input

 function xyz(x){
      if (isNaN(x)== true) {
        alert("please enter number");
        }
        else{
           var subtotal = document.getElementById('subtotal').value;
           var grandtotal=(parseInt(subtotal)-parseInt(x));
          document.getElementById('grand').value = grandtotal;
        }
}


// datepicker 
$(function () {
                $('#pickme').datetimepicker();
            });

$( function() {
    $( ".datepicker" ).datepicker();
  } );

// calculator

 function sharifcal(abc)
  {
  calculator.txt1.value=calculator.txt1.value+abc;
  }  

//ptint function

  function print_div(){
    var body= $('body').html();
    var print_div= $('#print_div').html();
    $('body').html(print_div);
    window.print();
    $('body').html(body);
  }

  