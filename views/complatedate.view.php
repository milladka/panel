<?php
$name = 'اطلاعات کاربری';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.view.php';
?>
<script>
    function Func(Shahrestanha) {
        var _Shahrestan = document.getElementById("Shahrestan");
        _Shahrestan.options.length = 0;
        if(Shahrestanha != "") {
            var arr = Shahrestanha.split(",");
            for(i = 0; i < arr.length; i++) {
                if(arr[i] != "") {
                    _Shahrestan.options[_Shahrestan.options.length]=new Option(arr[i],arr[i]);
                }
            }
        }
    }
</script>
<script type="text/javascript" language="javascript">
    $(function() {
        $("#Ostan").change(function(){
            var studentNmae= $('option:selected', this).attr('stud_name');
            $('#state').val(studentNmae);
        });
    });
</script>
<?php
$username = $_SESSION['username'];
$conn =connectToDB();
?>
<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12"><h5>تکمیل اطلاعات کاربری</h5></div>
			<br>

			<br>
			<div class="col-12">
				<form action="complatedata.php" method="POST">
					<div class="form-row">
						<div class="col-lg-1 col-xs-12">
							<label for="id">آی دی کاربری</label>
							<input type="text" id="id" name="id" class="form-control" value="<?php GetinfoUser($username , $conn, 'id'); ?>"  style="font-family: tahoma, serif;" disabled>
						</div>
						<div class="col-sm">
							<label for="username">نام کاربری</label>
							<input type="text" id="username" name="username" class="form-control" value="<?php GetinfoUser($username , $conn, 'username'); ?>"  style="font-family: tahoma, serif;" disabled>
						</div>
						<div class="col-sm">
							<label for="email">ایمیل</label>
							<input type="email" id="email" name="email" class="form-control" value="<?php GetinfoUser($username , $conn, 'email');?>" required>
						</div>
						<div class="col-sm">
							<label for="mobile">شماره موبایل</label>
							<input type="text" id="mobile" name="mobile" class="form-control" value="<?php GetinfoUser($username , $conn, 'mobile');?>" required>
						</div>
					</div>
					<br>
					<br>
					<div class="form-row">
						<div class="col-sm">
							<label for="fullname">نام و نام خانوادگی</label>
							<input type="text" id="fullname" name="fullname" class="form-control" value="<?php GetinfoUser($username , $conn, 'fullname');?>" required>
						</div>
						<div class="col-sm">
							<label for="phone">تلفن ثابت</label>
							<input type="text" id="phone" name="phone" class="form-control" value="<?php GetinfoUser($username , $conn, 'phone');?>" >
						</div>
						<div class="col-sm">
							<label for="codemelli">کدملی</label>
							<input type="text" id="codemelli" name="codemelli" class="form-control" value="<?php GetinfoUser($username , $conn, 'codemelli');?>" >
						</div>
					</div>
					<br>
					<br>
					<div class="form-row">
						<div class="col-sm">
							<label for="Ostan">استان </label>
							<select id="Ostan" class="custom-select" name="Ostan" onchange="Func(this.value)"  >
								<option stud_name="" value="<?php GetinfoUser($username , $conn, 'state');?>"><?php GetinfoUser($username , $conn, 'state');?></option>
								<option stud_name="آذربایجان شرقی" value="  ,آذرشهر ,اسکو ,اهر ,بستان‌آباد ,بناب ,تبریز ,جلفا ,چاراویماق ,سراب ,شبستر ,عجب‌شیر ,کلیبر ,مراغه ,مرند ,ملکان ,میانه ,ورزقان ,هریس ,هشترود">آذربایجان شرقی</option>
								<option stud_name="آذربایجان غربی" value="  ,ارومیه ,اشنویه ,بوکان ,پیرانشهر ,تکاب ,چالدران ,خوی ,سردشت ,سلماس ,شاهین‌دژ ,ماکو ,مهاباد ,میاندوآب ,نقده">آذربایجان غربی</option>
								<option stud_name="اردبیل" value="  ,اردبیل ,بیله‌سوار ,پارس‌آباد ,خلخال ,کوثر ,گِرمی ,مِشگین‌شهر ,نَمین ,نیر">اردبیل</option>
								<option stud_name="اصفهان" value="  ,آران و بیدگل ,اردستان ,اصفهان ,برخوار و میمه ,تیران و کرون ,چادگان ,خمینی‌شهر ,خوانسار ,سمیرم ,شهرضا ,سمیرم سفلی ,فریدن ,فریدون‌شهر ,فلاورجان ,کاشان ,گلپایگان ,لنجان ,مبارکه ,نائین ,نجف‌آباد ,نطنز">اصفهان</option>
								<option stud_name="ایلام" value="  ,آبدانان ,ایلام ,ایوان ,دره‌شهر ,دهلران ,شیروان و چرداول ,مهران">ایلام</option>
								<option stud_name="بوشهر" value="  ,بوشهر ,تنگستان ,جم ,دشتستان ,دشتی,دیر ,دیلم ,کنگان ,گناوه">بوشهر</option>
								<option stud_name="تهران" value="  ,اسلام‌شهر ,پاکدشت ,تهران ,دماوند ,رباط‌کریم ,ری ,ساوجبلاغ ,شمیرانات ,شهریار ,فیروزکوه ,کرج ,نظرآباد ,ورامین">تهران</option>
								<option stud_name="چهارمحال و بختیاری" value="  ,اردل ,بروجن ,شهرکرد ,فارسان ,کوهرنگ ,لردگان">چهارمحال و بختیاری</option>
								<option stud_name="خراسان جنوبی" value="  ,بیرجند ,درمیان ,سرایان ,سربیشه ,فردوس ,قائنات,نهبندان">خراسان جنوبی</option>
								<option stud_name="خراسان رضوی" value="  ,بردسکن ,تایباد ,تربت جام ,تربت حیدریه ,چناران ,خلیل‌آباد ,خواف ,درگز ,رشتخوار ,سبزوار ,سرخس ,فریمان ,قوچان ,کاشمر ,کلات ,گناباد ,مشهد ,مه ولات ,نیشابور">خراسان رضوی</option>
								<option stud_name="خراسان شمالی" value="  ,اسفراین ,بجنورد ,جاجرم ,شیروان ,فاروج ,مانه و سملقان">خراسان شمالی</option>
								<option stud_name="خوزستان" value="  ,آبادان ,امیدیه ,اندیمشک ,اهواز ,ایذه ,باغ‌ملک ,بندر ماهشهر ,بهبهان ,خرمشهر ,دزفول ,دشت آزادگان ,رامشیر ,رامهرمز ,شادگان ,شوش ,شوشتر ,گتوند ,لالی ,مسجد سلیمان,هندیجان ">خوزستان</option>
								<option stud_name="زنجان" value="  ,ابهر ,ایجرود ,خدابنده ,خرمدره ,زنجان ,طارم ,ماه‌نشان">زنجان</option>
								<option stud_name="سمنان" value="  ,دامغان ,سمنان ,شاهرود ,گرمسار ,مهدی‌شهر">سمنان</option>
								<option stud_name="سیستان و بلوچستان" value="  ,ایرانشهر ,چابهار ,خاش ,دلگان ,زابل ,زاهدان ,زهک ,سراوان ,سرباز ,کنارک ,نیک‌شهر">سیستان و بلوچستان</option>
								<option stud_name="فارس" value="  ,آباده ,ارسنجان ,استهبان ,اقلید ,بوانات ,پاسارگاد ,جهرم ,خرم‌بید ,خنج ,داراب ,زرین‌دشت ,سپیدان ,شیراز ,فراشبند ,فسا ,فیروزآباد ,قیر و کارزین ,کازرون ,لارستان ,لامِرد ,مرودشت ,ممسنی ,مهر ,نی‌ریز">فارس</option>
								<option stud_name="قزوین" value="  ,آبیک ,البرز ,بوئین‌زهرا ,تاکستان ,قزوین">قزوین</option>
								<option stud_name="قم" value="  ,قم">قم</option>
								<option stud_name="کردستان" value="  ,بانه ,بیجار ,دیواندره ,سروآباد ,سقز ,سنندج ,قروه ,کامیاران ,مریوان">کردستان</option>
								<option stud_name="کرمان" value="  ,بافت ,بردسیر ,بم ,جیرفت ,راور ,رفسنجان ,رودبار جنوب ,زرند ,سیرجان ,شهر بابک ,عنبرآباد ,قلعه گنج ,کرمان ,کوهبنان ,کهنوج ,منوجان">کرمان</option>
								<option stud_name="کرمانشاه" value="  ,اسلام‌آباد غرب ,پاوه ,ثلاث باباجانی ,جوانرود ,دالاهو ,روانسر ,سرپل ذهاب ,سنقر ,صحنه ,قصر شیرین ,کرمانشاه ,کنگاور ,گیلان غرب ,هرسین">کرمانشاه</option>
								<option stud_name="کهگیلویه و بویراحمد" value="  ,بویراحمد ,بهمئی ,دنا ,کهگیلویه ,گچساران">کهگیلویه و بویراحمد</option>
								<option stud_name="گلستان" value="  ,آزادشهر ,آق‌قلا ,بندر گز ,ترکمن ,رامیان ,علی‌آباد ,کردکوی ,کلاله ,گرگان ,گنبد کاووس ,مراوه‌تپه ,مینودشت">گلستان</option>
								<option stud_name="گیلان" value="  ,آستارا ,آستانه اشرفیه ,اَملَش ,بندر انزلی ,رشت ,رضوانشهر ,رودبار ,رودسر ,سیاهکل ,شَفت ,صومعه‌سرا ,طوالش ,فومَن ,لاهیجان ,لنگرود ,ماسال">گیلان</option>
								<option stud_name="لرستان" value="  ,ازنا ,الیگودرز ,بروجرد ,پل‌دختر ,خرم‌آباد ,دورود ,دلفان ,سلسله ,کوهدشت">لرستان</option>
								<option stud_name="مازندران" value="  ,آمل ,بابل ,بابلسر ,بهشهر ,تنکابن ,جویبار ,چالوس ,رامسر ,ساری ,سوادکوه ,قائم‌شهر ,گلوگاه ,محمودآباد ,نکا ,نور ,نوشهر">مازندران</option>
								<option stud_name="مرکزی" value="  ,آشتیان ,اراک ,تفرش ,خمین ,دلیجان ,زرندیه ,ساوه ,شازند ,کمیجان ,محلات">مرکزی</option>
								<option stud_name="هرمزگان" value="  ,ابوموسی ,بستک ,بندر عباس ,بندر لنگه ,جاسک ,حاجی‌آباد ,شهرستان خمیر ,رودان  ,قشم ,گاوبندی ,میناب">هرمزگان</option>
								<option stud_name="همدان" value="  ,اسدآباد ,بهار ,تویسرکان ,رزن ,کبودرآهنگ ,ملایر ,نهاوند ,همدان">همدان</option>
								<option stud_name="یزد" value="  ,ابرکوه ,اردکان ,بافق ,تفت ,خاتم ,صدوق ,طبس ,مهریز ,مِیبُد ,یزد">یزد</option>
							</select>
							<input type='hidden' id="state" name="state" value=""/>

						</div>
						<div class="col-sm">
							<label for="Shahrestan">شهرستان</label>
							<select name="city" id="Shahrestan" class="custom-select" >
								<option value="<?php GetinfoUser($username , $conn, 'city');?>" ><?php GetinfoUser($username , $conn, 'city');?></option>
							</select>
						</div>
						<div class="col-sm">
							<label for="postalcode">کد پستی</label>
							<input type="text" id="postalcode" name="postalcode" class="form-control" value="<?php GetinfoUser($username , $conn, 'postalcode');?>" >
						</div>
					</div>
					<br>
					<br>
					<div class="form-row">
						<div class="col-sm">
							<label for="languages">زبان های مورد علاقه</label>
							<input type="text" id="languages" name="languages" class="form-control" value="<?php GetinfoUser($username , $conn, 'languages');?>" >
						</div>
						<div class="col-sm">
							<label for="address">آدرس</label>
							<input type="text" id="address" name="address" class="form-control" value="<?php GetinfoUser($username , $conn, 'address');?>" >
						</div>
					</div>
					<br>
					<?php if(! is_null($status)): ?>
						<div class="alert alert-<?php echo $typestatus; ?>">
							<small><?=  $status; ?></small>
						</div>
					<?php endif;?>
					<div class="form-row">
						<div class="col-2">
							<button type="submit" class="btn btn-success btn-block btn-sm">ثبت و بروزرسانی</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
