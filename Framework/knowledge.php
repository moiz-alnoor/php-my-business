<?php


class know{


public function Edit_account(){

echo "<div id='AlertCont'> <div id='alert'> تم تعديل بيانات الحساب </div> </div>";
}
public function Sale(){

echo "<div id='AlertCont'> <div id='alert'> تمت عمليه البيع </div> </div>";
}

public function No_sale(){

echo "<div id='AlertCont'> <div id='alert_big'> لن تتم عمليه البيع كميه الأصناف في  المخزن أقل من العدد المطلوب</div> </div>";
}


public function RE_inv(){

echo "<div id='AlertCont'> <div id='alert'> تم رد البضاعه المشتراه</div> </div>";
}

public function NO_inv(){

echo "<div id='AlertCont'> <div id='alert_big'> لن تتم العمليه الكميه المردوده أقل من البضاعه الموجوده</div> </div>";
}

public function no_pass(){

echo "<div id='AlertCont'> <div id='alert'> كلمه المرور غير صحيحه </div> </div>";

}

public function no_email(){

echo "<div id='AlertCont'> <div id='alert'> البريد الإلكتروني غير صحيح</div> </div>";

}

public function Emp_new(){

echo "<div id='AlertCont'> <div id='alert'> تم تسجيل الموظف </div> </div>";

}


public function Accounts(){

echo "<div id='AlertCont'> <div id='alert'> تم تسجيل الحساب </div> </div>";

}

public function D_accounts(){

echo "<div id='AlertCont'> <div id='alert'> تم حزف حساب الشركه </div> </div>";

}

    public function General(){

        echo "<div id='AlertCont'> <div id='alert'> تم تسجيل القيد في دفتر اليوميه</div> </div>";
    }
	public function inventory(){

	    echo "<div id='AlertCont'> <div id='alert'> تم إضافه المخزون</div> </div>";


	}

	public function p_order(){

	    echo "<div id='AlertCont'> <div id='alert'> تم تقديم طلب الشراء</div> </div>";


	}

	public function dell(){

	    echo "<div id='AlertCont'> <div id='alert'> تم الحزف </div> </div>";


	}
	public function Employee_Edit(){

	    echo "<div id='AlertCont'> <div id='alert'> تم تعديل بيانات الموظف </div> </div>";


	}

	public function Employee_Dell(){

	    echo "<div id='AlertCont'> <div id='alert'> تم حزف الموظف</div> </div>";


	}
		public function Sale_Invoice(){

	    echo "<div id='AlertCont'> <div id='alert'> تم التقيد في الفاتوره</div> </div>";


	}
	public function Capital_add(){

	    echo "<div id='AlertCont'> <div id='alert'> تم إضافه مبلغ لرأس المال</div> </div>";


	}
	
	public function Capital_new(){

	    echo "<div id='AlertCont'> <div id='alert'> تم تحديد قيمه رأس المال</div> </div>";


	}

	public function No(){

	    echo "<div id='AlertCont'> <div id='alert'>لم تتم العمليه</div> </div>";


	}
	public function No_P(){

	    echo "<div id='AlertCont'> <div id='alert'>لم تتم العمليه - تأكد من كلمه المرور</div> </div>";


	}
	
	public function No_Company(){

	    echo "<div id='AlertCont'> <div id='alert'>لاتوجد شركه بهذه البيانات</div> </div>";


	}
	
	public function Company(){

	    echo "<div id='AlertCont'> <div id='alert'>تم فتح حساب الشركه .. سجل الدخول </div> </div>";


	}


		public function Exist(){

        echo "<div id='AlertCont'> <div id='alert'>حساب  رأس المال موجود   </div> </div>";


    }
	
public function views(){

        echo "<div id='AlertCont'> <div id='alert'>تحاول الدخول للـ Views</div> </div>";


    }

public function General_Re(){

        echo "<div id='AlertCont'> <div id='alert'>تم التراجع عن القيد</div> </div>";


    }
	
public function no_p_qual(){

        echo "<div id='AlertCont'> <div id='alert'>كلمه المرور غير متطابقه</div> </div>";


    }
	}


?>