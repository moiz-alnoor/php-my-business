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
    <link href="jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sch.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>الرئيسية#مدرستي</title>

</head>
<body dir="ltr">
<div class="header">

    <div class="pp" >مدرستي  #</div><div class="s" ></div>
    <?
        include("conn.php");
        $a=mysql_query("select * from moiz");
        $qq=mysql_fetch_array($a);
        $ss=$qq['name'];


    ?>
    <div class="s" ><? echo "مرحبا  ..  ".$ss; ?></div>


    <div class="nav6"><?echo date("F d Y ")."  -  التاريخ "; ?></div>

</div>

<div class="main">
    <a href="degree.php">نتيجة جديدة |</a>
    <a href="dgree_report.php"> تقرير نتيجة|</a>

    <a href="eshar.php">إحصائات |</a>
    <a href="report.php"> تقارير |</a>
    <a href="form1.php">الرئيسة |</a>
    <a href="out.php">خروج</a>
</div>

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
<form action="hikma.php" method="post">
    <input type="hidden" name="a" value="1">
    <textarea name="h" class="hickma" dir="rtl"> </textarea>

    <input type="submit" class="hic" name="z" value="حكمة اليوم" style="text-align: right;">

</form>


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
<div id="slider3_container" style="position: relative; top: 17em; left: 16em;   width: 701px; height: 302px; background: #fff; overflow: hidden; ">

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 99px;   top: 0px; width: 600px; height: 290px; border: 0px solid #61b7ff; -webkit-filter: blur(0px); background-color:#c2e1f5; border-radius:11px;  overflow: hidden;">
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">
                <br>
                <form id="form" action="insert_tale_one.php" method="post">
                    <label>                    <input type="text" class="put" name="level" value="المستوي الأول" required/>
                        <input type="text" class="put" name="name" value=""placeholder="  ألاســــم    " required/>

                        <br>


                        <input type="number" class="put" name="amount_d" value="" required placeholder="المبلغ المدفوع"   required/>

                        <input type="text"class="put" name="class_n" value="" placeholder="إسم الفصل     "    required/>
                        <br>

                        <input type="number" class="put" name="amount_r" value=""placeholder="المبلغ المقرر  " required/>
                        <input type="number" class="put" name="tel" value="" placeholder="هاتف "   />

                        <br>

                        <input type="date" class="put" name="date" value="" placeholder="التاريــخ  "   required/>
                        <br>


                        <textarea class="comment" name="thinks" placeholder="... مبلغ أخر..شيئا أخر         "></textarea>




                        <input type="submit" class="save" name="" value="حفظ" style="top: 8px;;"/>


                    </label>

                </form>

            </div>
            <div u="thumb">المستوي الأول</div>
        </div>
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">
                <form id="form" action="insert_table_two.php" method="post">
                    <br>
                    <label>                    <input type="text" class="put" name="level" value="المستوي الثاني" required/>
                        <input type="text" class="put" name="name" value="" placeholder="ألاســــم     " required/>

                        <br>


                        <input type="number" class="put" name="amount_d" value="" required placeholder="المبلغ المدفوع    "   required/>

                        <input type="text"class="put" name="class_n" value="" placeholder="إسم الفصل     "    required/>
                        <br>

                        <input type="number" class="put" name="amount_r" value=""placeholder="المبلغ المقرر   " required/>
                        <input type="number" class="put" name="tel" value="" placeholder="هاتف     "  />

                        <br>

                        <input type="date" class="put" name="date" value="" placeholder="التاريــخ    "  required=""/>
                        <br>

                        <textarea class="comment" name="thinks" placeholder="... مبلغ أخر..شيئا أخر         "></textarea>






                        <input type="submit" class="save" name="" value="حفظ"/>


                    </label>


                </form>

            </div>
            <div u="thumb" >المستوي الثاني</div>
        </div>
        <div>
            <div style="margin: 10px; overflow: hidden; color: #000;">

                <form id="form" action="insert_table_three.php" method="post">
                    <label>
                        <br>
                        <input type="text" class="put" name="level" value="   المستوي الثالث" required/>
                        <input type="text" class="put" name="name" value=""placeholder="  ألاســــم        " required/><br>
                        <input type="text" name="ms"  class="put" placeholder="المساق" required
                               list="ms">
                        <datalist id="ms">

                            <option value="علمي">
                            <option value="أدبي">

                        </datalist>





                        <input type="number" class="put" name="amount_d" value="" required placeholder="المبلغ المدفوع      "   required/><br>

                        <input type="text"class="put" name="class_n" value="" placeholder="إسم الفصل      "    required/>

                        <input type="number" class="put" name="amount_r" value=""placeholder="المبلغ المقرر      " required/>
                        <br>
                        <input type="number" class="put" name="tel" value="" placeholder="هاتف   "  />



                        <input type="date" class="put" name="date" value="" placeholder="التاريــخ       "  required=""/>
                        <br>

                        <textarea class="comment" name="thinks" placeholder="... مبلغ أخر..شيئا أخر         "></textarea>





                        <input type="submit" class="save" name="" value="حفظ"/>


                    </label>


                </form>

            </div>
            <div u="thumb">المستوي الثالث</div>
        </div>
        <div >
            <div style="margin: 10px; overflow: hidden; color: #000;">

                <form   action="sig.php" method="post"  id="pas">
                    <label >

                        <input type="password" class="put" name="a" value=""     placeholder=" كلمة المرورالحالية   " required/><br>

                        <input type="password" class="put" name="pass" value=""    placeholder="  كلمة المرور الجديدة   " required/><br>
                        <input type="email" class="put"  name="email" value=""      placeholder="  إسم المستخدم الجديد    " required/><br>
                        <input type="text" class="put"  name="name" value=""      placeholder="  الإســــــم    " required/><br>

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


<div id="footer">

    <div class="nav2"></div>
    <div class="nav3"></div>
</div>
</div>






</body>
</html>