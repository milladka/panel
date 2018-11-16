<?php
$name = 'ثبت نام مدرس';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.view.php';
$username = $_SESSION['username'];
$conn     = connectToDB();

?>
<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
    <div class="container">
        <div class="row">
            <div class="col-12"><h5>ثبت نام مدرس</h5>
                <p class="note">به منظور درخواست جهت تدریس زبان های خارجی در آکادمی ساینا زبان، فرم زیر را تکمیل نمایید.
                    پس از بررسی اطلاعات توسط کارشناسان دسترسی شما به پنل مدرسین فعال می شود.
                </p>
				<?php if ( ! is_null( $status ) ): ?>
                    <div class="alert alert-<?php echo $typestatus; ?> mt-3 mt-lg-3">
                        <small><?=$status;?></small>
                    </div>
				<?php endif; ?>
            </div>
            <div class="section-form py-3 py-lg-3 px-3 px-lg-3 my-lg-3 shadow-sm">
                <div class="row">
                    <div class="col-lg-12 px-lg-4">
                        <form action="register_teacher.php" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" value="<?php GetinfoUser($username,$conn ,'id');?>" name="id_user">
                            <div class="soal py-3">۱- نحوه آموزش در دوره ها را مشخص کنید</div>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox" value="آموزش غیرحضوری"
                                       id="typecourse">
                                <label class="form-check-label" for="typecourse">
                                    آموزش غیرحضوری
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox" value="آموزش حضوری"
                                       id="typecourse2">
                                <label class="form-check-label" for="typecourse2">
                                    آموزش حضوری
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox"
                                       value="آموزش آنلاین از طریق اسکایپ و ... انجام داده ام." id="typecourse3">
                                <label class="form-check-label" for="typecourse3">
                                    آموزش آنلاین از طریق اسکایپ و ... انجام داده ام.
                                </label>
                            </div>
                            <div class="soal py-3 mt-3">۲- خواستار آموزش زبان عمومی</div>
                            <select id="inputState" name="languagescourse" class="form-control col-md-6">
                                <option selected>انتخاب کنید</option>
								<?php viewlangli( $conn ) ?>
                            </select>
                            <div class="soal py-3 mt-3">۳- متقاضی تدریس در دوره</div>
							<?php viewCoursescheack( $conn ) ?>
                            <div class="soal py-3 mt-3">4-آپلود مدارک</div>
                            <div id="attachmentdiv">
                                <label class="uploader pt-4" for="attachment_1" >تصویر کارت ملی <span>فایل jpg, jpeg, png با حداکثر حجم 200kb مجاز است</span></label>
                                <div id="attachmentdiv_1" class="py-2">
                                    <input type="file" id="attachment_1" name="attachment_1" required>
                                </div>
                                <label class="uploader pt-4" for="attachment_2">تصویر مدرک تحصیلی <span>فایل jpg, jpeg, png با حداکثر حجم 200kb مجاز است</span></label>
                                <div id="attachmentdiv_2" class="py-2">
                                    <input type="file" id="attachment_2" name="attachment_2" required>
                                </div>
                                <label class="uploader pt-4" for="attachment_3">فایل سوابق کاری  <span>فایل pdf با حداکثر حجم 2mb مجاز است</span></label>
                                <div id="attachmentdiv_3" class="py-2">
                                    <input type="file" id="attachment_3" name="attachment_3" required>
                                </div>
                            </div>
                            <div class="soal py-3 mt-3">5-تعهد نامه</div>
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                اینجانب با مشخصات فوق با آگاهی از شرایط، نحوه کار و قیمتهای مندرج در وب سایت، متعهد می
                                شوم در راستای اهداف آکادمی زبان ساینا تلاش کرده و اسرار آکادمی را در اختیار شخص ثالث
                                قرار نداده و ارتباط با زبان آموزان و سفارش دهندگان ترجمه صرفا از طریق و با اجازه آکادمی
                                انجام شود. تخطی از این موارد این حق را برای موسسه ایجاد خواهد کرد که اقدام قانونی انجام
                                دهد. همچنین متعهد می شوم از مترجم گوگل و غیره استفاده نکنم و اسرار و محتوای ترجمه و
                                مدارک را در هیچ جایی افشا نکنم. </label>
                            <?php getidfromteacher( $username, $conn) ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
