<?

    session_start();
    if(!isset($_SESSION['user_name']))
    {
        header("location:school.php");
        //  include("school.php");
    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="rep.css">
    <link rel="stylesheet" type="text/css" href="sch.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>الرئيسية#مدرستي</title>

</head>
<body dir="ltr">

 <div id="top" >www.myschool.com </div>
 <div class="img">
 <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 4em;">
  <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right: 7em;">
   <img alt="" src="../img/logo/twitter.jpg " width="40" height="40" style="position:absolute;top: 1px;right:10em;">
 </div>
 </div>
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
    <div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>


<div class="header"  >
</div>
<center>
<div class="asaid" style="height:40em;"> 

<dio class="arrow_box"><?
        $today=date(" d ");

        // Find what today is? using date function
        if($today%2==0){
            echo "  وحد طريقة كتابة الأرقام";
        }


        else{
            echo "تذكر أن هناك فرق بين أوا في كتابة الألف";

        }


    ?>

</dio>
<diu class="arrow_box1"><?
        $today=date(" d ");


        if($today%2==0){
            echo("نسخ البيانات بصورة دورية مهم")   ;

        }
        else{
            echo(" إضغط علي زر خروج بعد الإنتهاء<br> من عملياتك علي النظام لتأكيد الخصوصية");

        }



    ?>

</diu>

<!---<form action="school.html" method="post">
    <input type="text" class="cr" name="" value="" placeholder="الرقم">
    <input type="submit" class="select" name="" value="إستعلام "required/>

</form> -->




<!-- it works the same with all jquery version from 1.x to 2.x -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->
<!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
<script type="text/javascript" src="js/jssor.core.js"></script>
<script type="text/javascript" src="js/jssor.utils.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

            $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 5, 					                //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                $AutoCenter: 3,                             //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                $SpacingX: 0,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                $SpacingY: 0,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                $DisplayPieces: 5,                              //[Optional] Number of pieces to display, default value is 1
                $ParkingPosition: 0,                            //[Optional] The offset position to park thumbnail
                $Orientation: 2,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
            }
        };

        var jssor_slider3 = new $JssorSlider$("slider3_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider3.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                var sliderWidth = parentWidth;

                //keep the slider width no more than 701
                sliderWidth = Math.min(sliderWidth, 801);

                jssor_slider3.$SetScaleWidth(sliderWidth);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $(window).bind('resize', ScaleSlider);
        }


        //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
        //    $(window).bind("orientationchange", ScaleSlider);
        //}
        //responsive code end
    });
</script>
<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div id="slider3_container" style="position: relative; top: 9em;    width: 701px; height: 400px; background:white; overflow: hidden; ">

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 99px;  width: 540px; height: 360px; border: 1px solid hsl(0,0%,90%); -webkit-filter: blur(0px); background-color: hsl(0,0%,97%); border-radius:0px;  overflow: hidden;">
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">



<form action="insert_tale_one.php" method="post">
               <table style="text-align: right; font-size: 12px; direction: rtl; ">

                   <tr>
                   <td>الرقم<br><input type="text" class="put" name="no" value="" required/>
                       </td>
                       <td>الإسم رباعي<br><input type="text"  class="put" name="name" value=""  required/></td>

                       <td>المستوي<br><input type="text" class="put" name="level" value="الأول"  required/>
                       </td>
                        </tr>
                   <tr>
                      <td>إسم الفصل<br><input type="text" class="put" name="class" value=""  required/>

                       <td>السكن<br><input type="text"  class="put" name="address" value=""  />
                       </td>
					   <td>هاتف<br><input type="text"  class="put" name="tel" value=""  />
                       </td>
					   
                   </tr>
                   <tr>
                       <td>تاريخ الميلاد<br><input type="date" class="put" name="bday" value="" />
                       </td>
                       <td>مجموع الأساس<br><input type="text"  class="put" name="dgree" value="" />
                       </td><td>المدرسة السابقة<br><input type="text" class="put" name="lastedu" value="" />
                       </td>
                   </tr>
                   <tr>
                       <td>إسم ولي الأمر<br><input type="text" class="put" name="fname" value="" />
                       </td>
                       <td>السكن<br><input type="text"  class="put" name="fadd" value="" />
                       </td><td>هاتف<br><input type="text" class="put" name="ftel" value="" />
					   <tr>
                       <td>المبلغ المقرر<br><input type="text" class="put" name="amountmgrer" value="" required/>
                       </td>
                       <td>عدد الدفعات المالية<br><input type="text"  class="put" name="numbergst" value="" />
                       </td><td>ملحوظة<br><input type="text" class="put" name="note" value="" />
                       </td>
                   </tr>
                   
                          

              
                <input type="submit" class="save" value="حفظ" style=" width: 7em; height: 2.5em; left:5em;top:21em;;">
               </table> 
</form>

            </div>
            <div u="thumb">المستوي الأول</div>
        </div>
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">

                <form action="insert_table_two.php" method="post">
                    <table style="text-align: right; font-size: 12px; direction: rtl;">

                        <tr>
                            <td>الرقم<br><input type="text" class="put" name="no" value="" required/>
                            </td>
                            <td>الإسم رباعي<br><input type="text"  class="put" name="name" value=""  required/></td>

                            <td>المستوي<br><input type="text" class="put" name="level" value="الثاني"  required/>
                            </td>
                        </tr>
                        <tr>
                            <td>إسم الفصل<br><input type="text" class="put" name="class" value=""  required/>

                            <td>السكن<br><input type="text"  class="put" name="address" value=""  />
                            </td>
                            <td>هاتف<br><input type="text"  class="put" name="tel" value=""  />
                            </td>

                        </tr>
                        <tr>
                            <td>تاريخ الميلاد<br><input type="date" class="put" name="bday" value="" />
                            </td>
                            <td>مجموع الأساس<br><input type="text"  class="put" name="dgree" value="" />
                            </td><td>المدرسة السابقة<br><input type="text" class="put" name="lastedu" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>إسم ولي الأمر<br><input type="text" class="put" name="fname" value="" />
                            </td>
                            <td>السكن<br><input type="text"  class="put" name="fadd" value="" />
                            </td><td>هاتف<br><input type="text" class="put" name="ftel" value="" />
                        <tr>
                            <td>المبلغ المقرر<br><input type="text" class="put" name="amountmgrer" value="" required/>
                            </td>
                            <td>عدد الدفعات المالية<br><input type="text"  class="put" name="numbergst" value="" />
                            </td><td>ملحوظة<br><input type="text" class="put" name="note" value="" />
                            </td>
                        </tr>

                        <input type="submit" class="save" value="حفظ" style="left: 33.3em; position: absolute; top: 16.3em; width: 5em; height: 2em;">


                    </table> </form>







            </div>
            <div u="thumb" >المستوي الثاني</div>
        </div>
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">

                <form action="insert_table_three.php" method="post">
                    <table style="text-align: right; font-size: 12px; direction: rtl;">

                        <tr>
                            <td>الرقم<br><input type="text" class="put" name="no" value="" required/>
                            </td>
                            <td>الإسم رباعي<br><input type="text"  class="put" name="name" value=""  required/></td>

                            <td>المستوي<br><input type="text" class="put" name="level" value="الثالث"  required/>
                            </td>
                        </tr>
                        <tr>
                            <td>إسم الفصل<br><input type="text" class="put" name="class" value=""  required/>

                            <td>السكن<br><input type="text"  class="put" name="address" value=""  />
                            </td>
                            <td>هاتف <br><input type="text"  class="put" name="tel" value=""  />
                            </td>

                        </tr>
                        <tr>
                            <td>تاريخ الميلاد<br><input type="date" class="put" name="bday" value="" />
                            </td>
                            <td>مجموع الأساس<br><input type="text"  class="put" name="dgree" value="" />
                            </td><td>المدرسة السابقة<br><input type="text" class="put" name="lastedu" value="" />
                            </td>
                        </tr>
                        <tr>
                            <td>إسم ولي الأمر<br><input type="text" class="put" name="fname" value="" />
                            </td>
                            <td>السكن<br><input type="text"  class="put" name="fadd" value="" />
                            </td><td>هاتف<br><input type="text" class="put" name="ftel" value="" />
                        <tr>
                            <td>المبلغ المقرر<br><input type="text" class="put" name="amountmgrer" value="" required/>
                            </td>
                            <td>عدد الدفعات المالية<br><input type="text"  class="put" name="numbergst" value="" />
                            </td><td>ملحوظة<br><input type="text" class="put" name="note" value="" />
                            </td>
                        </tr>

                        <input type="submit" class="save" value="حفظ" style="left: 33.3em; position: absolute; top: 16.3em; width: 5em; height: 2em;">


                    </table> </form>







            </div>
            <div u="thumb">المستوي الثالث</div>
        </div>
        <div >
            <div style="margin: 10px; overflow: hidden; color: #000;">

                <form   action="sig.php" method="post"  id="pas">
                    <label >

                        <input type="password" class="put2" name="a" value=""     placeholder=" كلمة المرورالحالية "   required/><br>

                        <input type="password" class="put2" name="pass" value=""    placeholder=" كلمة المرور الجديدة " required/><br>
                        <input type="email" class="put2"  name="email" value=""      placeholder=" إسم المستخدم الجديد " required/><br>
                        <input type="text" class="put2"  name="name" value=""      placeholder=" إسم مستخدم النظـام  " required/><br>

                        <input type="submit" id="chan" name="" value="تغيير"/>


                    </label>


                </form>

            </div>
            <div u="thumb">إعدادات المستخدم</div>
        </div>



    </div>

    <!-- ThumbnailNavigator Skin Begin -->
    <div u="thumbnavigator" class="jssort13" style="position: absolute; width: 100px; height: 150px; left: 0px; top: 0px;">
        <!-- Thumbnail Item Skin Begin -->

        <div u="slides" style="cursor: move; top:0px; left:0px; border-top: 0px solid gray;">
            <div u="prototype" class="p" style="POSITION: absolute; WIDTH: 100px; HEIGHT: 30px; TOP: 0; LEFT: 0; padding:0px;">
                <div class=w><ThumbnailTemplate class="c" style=" WIDTH: 100%; HEIGHT: 100%; position:absolute; TOP: 0; LEFT: 0; line-height:28px; text-align:center;"></ThumbnailTemplate></div>
            </div>
        </div>
        <!-- Thumbnail Item Skin End -->
    </div>
    <!-- ThumbnailNavigator Skin End -->


</div>
<!-- Jssor Slider End -->



<div class="section">
<a href="form1.php"> <p style="right: 1em; top: 1em;"> تسجيل جديد &diams;</p> </a>

<a href="addgst.php"> <p style="right: 1em; top: 3em;"> دفع قسط &diams;</p> </a>

<a href="est3lam.php"> <p style="right: 1em; top: 5em;"> إستعلامات &diams;</p> </a>
<a href="report.php"> <p style="right: 1em; top: 7em;"> تقارير &diams;</p> </a>

<a href="eshar.php"> <p style="right: 1em; top: 9em;"> بيانات مالية &diams;</p> </a>

<a href="class.php"> <p style="right: 1em; top: 11em;"> حزف سجل فصل &diams;</p> </a>
 <a href="ou.php"><p style="right: 1em; top: 13em;">  الغياب &diams;</p></a>
    <a href="out.php"><p style="right: 1em; top: 15em;"> خروج  &diams;</p></a>


</div>

</div>
</center>


<div class="footer">
</div>



</body>
</html>