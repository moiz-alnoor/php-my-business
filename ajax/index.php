<html>
<head>
<script src="../Public/Mybusiness_js/jquery-1.8.3.min.js"></script>
   <!--<script src="../public/my_business_js/mybusiness.js"></script>-->
    <script type="text/javascript">
      $(document).ready(function(){
      $("#check").click(function(){
         var value = $(this).val();
              if(!value==""){
              $.post("ajax.php",{
        value:value},function(data){
      $("#result").html(data);


    })

}
});


        });



    </script>
</head>
<body>
<label>

    <select name="check" id="check" style="border-radius: 4px; width: 7em;">
        <option value="list">list</option>

        <option value="">no</option>
    <option value="apple">apple</option>
    <option value="nokia">nokia</option>
    <option value="microsoft">microsoft</option>
</select>
</label>
<div id="result"></div>
<?echo $value = $_POST["value"];?></body>
</html>
<?
    echo $s =  date('y,m,d')."<br>";
   echo $s =  date('y') + date('m');

?>