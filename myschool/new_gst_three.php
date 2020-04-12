<?

    include("conn.php");

    $n=$_POST['number'];

    $w=mysql_query("select * from student_three where number ='$n'");
    $t=mysql_fetch_array($w);
    $v_new_gst=$_POST['v_new_gst'];
    $number=$t['number'];
    $vgstone=$t['vgstone'];
    $vgsttwo=$t['vgsttwo'];
    $vgstthree=$t['vgstthree'];
    $vgstfour=$t['vgstfour'];
    $vgstfive=$t['vgstfive'];

    $vgstsex=$t['vgstsex'];
    $vgstseven=$t['vgstseven'];
    $vgsteyt=$t['vgsteyt'];

    $total=$vgstone+$vgsttwo+$vgstthree+$vgstfour+$vgstfive+$vgstsex+$vgstseven+$vgsteyt+$v_new_gst;
    $amountmgrer=$t['amountmgrer'];
    $amountrim=$amountmgrer-$total;


    $number=$_POST['number'];
    $t_new_gst=$_POST['t_new_gst'];
    $d_new_gst=$_POST['d_new_gst'];
    $v_new=$_POST['v_new_gst'];

    switch($t_new_gst){
        case 1:
    if($t['vgstone']<1){


            $m=mysql_query("update student_three set vgstone='$v_new',dgstone='$d_new_gst',amountrim ='$amountrim',totalamountdue='$total'  where number ='$number'");

            if($m){
                echo "<script> alert('تمت عملية إضافة دفعة مالية جدبدة ');</script>";
                require_once("addgst.php");

            }
            else{
                echo "<script> alert('لم تتم عملية إضافة الدفعة المالية الجديدة');</script>";
                require_once("addgst.php");

            }
            break;
    }
    else{
        echo "<script> alert('  لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية أولي');</script>";
        require_once("addgst.php");

    }
            break;

        case 2;
    if($t['vgsttwo']<1){

        $m=mysql_query("update student_three set vgsttwo='$v_new',dgsttwo='$d_new_gst',amountrim ='$amountrim',totalamountdue='$total'   where number ='$number'");

            if($m){
                echo "<script> alert('تمت عملية إضافة دفعة مالية جدبدة');</script>";
                require_once("addgst.php");

            }
            else{
                echo "<script> alert('لم تتم عملية إضافة الدفعة المالية الجديدة');</script>";
                require_once("addgst.php");

            }

            break;
    }
    else{
        echo "<script> alert(' لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية ثانية');</script>";
        require_once("addgst.php");

    }
break;
        case 3;
    if($t['vgstthree']<1){

        $m=mysql_query("update student_three set vgstthree='$v_new',dgstthree='$d_new_gst' ,amountrim ='$amountrim',totalamountdue='$total'  where number ='$number'");

            if($m){
                echo "<script> alert('تمت عملية إضافة دفعة مالية جدبدة');</script>";
                require_once("addgst.php");

            }
            else{
                echo "<script> alert('لم تتم عملية إضافة الدفعة المالية الجديدة');</script>";
                require_once("addgst.php");

            }
    }
    else{
        echo "<script> alert('لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية ثالثة');</script>";
        require_once("addgst.php");

    }


            break;
        case 4:

    if($t['vgstfour']<1){

        $m=mysql_query("update student_three set  vgstfour='$v_new',dgstfour='$d_new_gst',amountrim ='$amountrim',totalamountdue='$total'  where number ='$number'");

            if($m){
                echo "<script> alert('تمت عملية إضافة دفعة مالية جدبدة');</script>";
                require_once("addgst.php");

            }
            else{
                echo "<script> alert(' لم تتم عملية إضافة الدفعة المالية الجديدة ');</script>";
                require_once("addgst.php");

            }
    }
    else{
        echo "<script> alert('  لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية رابعة');</script>";
        require_once("addgst.php");

    }

            break;
        case 5:
    if($t['vgstfive']<1){

        $m=mysql_query("update student_three set  vgstfive='$v_new',dgstfive='$d_new_gst' ,amountrim ='$amountrim',totalamountdue='$total' where number ='$number'");

            if($m){
                echo "<script> alert('تمت عملية إضافة دفعة مالية جديدة ');</script>";
                require_once("addgst.php");

            }
            else{
                echo "<script> alert(' لم تمت عملية إضافة دفعة مالية جديدة');</script>";
                require_once("addgst.php");

            }
    }
    else{
        echo "<script> alert('  لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية خامسة');</script>";
        require_once("addgst.php");

    }


            break;
        case 6:
            if($t['vgstsex']<1){

                $m=mysql_query("update student_three set  vgstsex='$v_new',dgstsex='$d_new_gst' ,amountrim ='$amountrim',totalamountdue='$total' where number ='$number'");

                if($m){
                    echo "<script> alert('تمت عملية إضافة دفعة مالية جديدة ');</script>";
                    require_once("addgst.php");

                }
                else{
                    echo "<script> alert('لم تمت عملية إضافة دفعة مالية جديدة');</script>";
                    require_once("addgst.php");

                }
            }
            else{
                echo "<script> alert(' لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية سادسة');</script>";
                require_once("addgst.php");

            }


            break;
        case 7:
            if($t['vgstseven']<1){

                $m=mysql_query("update student_three set  vgstseven='$v_new',dgstseven='$d_new_gst' ,amountrim ='$amountrim',totalamountdue='$total' where number ='$number'");

                if($m){
                    echo "<script> alert('تمت عملية إضافة دفعة مالية جديدة');</script>";
                    require_once("addgst.php");

                }
                else{
                    echo "<script> alert('لم تتم عملية إضافة الدفعة المالية الجديده');</script>";
                    require_once("addgst.php");

                }
            }
            else{
                echo "<script> alert('  لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية سابعة');</script>";
                require_once("addgst.php");

            }


            break;
        case 8:
            if($t['vgsteyt']<1){

                $m=mysql_query("update student_three set  vgsteyt='$v_new',dgsteyt='$d_new_gst' ,amountrim ='$amountrim',totalamountdue='$total' where number ='$number'");

                if($m){
                    echo "<script> alert('تمت عملية إضافة دفعة مالية جديدة ');</script>";
                    require_once("addgst.php");

                }
                else{
                    echo "<script> alert(' لم تتم عملية إضافة الدفعة المالية الجديده');</script>";
                    require_once("addgst.php");

                }
            }
            else{
                echo "<script> alert('    لم تتم العملية لقد قمت مسبقا بدفع مبلغ كدفعة مالية ثامنة');</script>";
                require_once("addgst.php");

            }


            break;

        default:
            echo "<script> alert('لم تتم عملية إضافة القسط');</script>";
            require_once("addgst.php");
            break;

    }?>
