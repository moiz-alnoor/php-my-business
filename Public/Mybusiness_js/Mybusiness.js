function conf()
{
    var x = confirm('تأكيد العمليه');
    if(x){
        return true;
    }

    else
        return false;
}



$(document).ready(function(){

    //ajax

    var alertHey = function() {

        var  aa = $('#session').val();

        $.ajax({

            url:'ajax.php?session='+ aa,
            success:function(data){
                $('.azzo').html(data);
            }
        });


        setTimeout(alertHey, 250);
    }

    setTimeout(alertHey, 250);


        $(".select").click(function(){
            var value = $(this).val();
            if(!value==""){
                $.post("ajaxFunction.php",{
                    value:value},function(data){
                    $("#moiz").html(data);
                })
            }
        });




    $(".select_to").click(function(){
        var value = $(this).val();
        if(!value==""){
            $.post("ajaxOrder_to.php",{
                value:value},function(data){
                $(".gEtorder").html(data);
            })
        }
    });


    $("#IncomeTwo").click(function(){
        var value = $(this).val();
        if(!value==""){
            $.post("Income.php",{
                value:value},function(data){
                $(".gEtorder").html(data);
            })
        }
    });

    $("#IncomeOne").click(function(){
        var value = $(this).val();
        if(!value== ""){
            $.post("Income.php",{
                value:value},function(data){
                $(".gEtorder").html(data);
            })
        }
    });



    $("#sale").click(function(){
        var value = $(this).val();
        if(!value==""){
            $.post("Sale.php",{
                value:value},function(data){
                $("#ali").html(data);
            })
        }
    });




   $(".icon-arrow-left2").click(function(){

       document.location.href = "../My.php";

   });



    $("#AlertCont").fadeOut(9000);

    $("#alert").fadeOut(9000);


    $(".icon-menu").click(function () {

        $(".logo").toggle(10);
    });


    $("#s_sale").hide();



    $("#v_sale").click(function () {

        $("#s_sale").toggle();

    });





$("#task1").hide();

    $("#tax11").hide();
    $("#tax12").hide();

    $("#q").click(function () {
        $("#tax11").toggle();
        $("#tax12").toggle();
    });

    $("#r").click(function () {

        $("#task2").toggle();
    });

    $(".other1").hide();


    $(".General_G1 ").show();
    $(".General_G2 ").show();


    $(".other").click(function () {


        $(".General_G1 ").toggle();
        $(".General_G2 ").toggle();


        $(".other1").toggle();


    });




    $("#s").click(function () {

        $("#task3").toggle();
    });

});




