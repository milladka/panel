<?php
$name = 'ثبت نام مدرس';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.view.php';
$username = $_SESSION['username'];
$conn =connectToDB();
?>
<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12"><h5>ثبت نام مدرس</h5>
                <p class="note">به منظور درخواست جهت تدریس زبان های خارجی در آکادمی ساینا زبان، فرم زیر را تکمیل نمایید. پس از بررسی اطلاعات توسط کارشناسان دسترسی شما به پنل مدرسین فعال می شود.
                </p>
            </div>
			<br>
			<?php if(! is_null($status)): ?>
                <div class="alert alert-<?php echo $typestatus; ?>">
                    <small><?=  $status; ?></small>
                </div>
			<?php endif;?>
			<br>
            <hr>
            <br>
            <br>
            <br>
            <br>
			<div class="col-12">
				<form action="register_teacher.php" method="POST">

                    <div class="form">
                        <div class="form-group col-md-6">
                            <div>۱- نحوه آموزش در دوره ها را مشخص کنید</div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox" value="آموزش غیرحضوری" id="typecourse">
                                <label class="form-check-label" for="typecourse">
                                    آموزش غیرحضوری
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox" value="آموزش حضوری" id="typecourse2">
                                <label class="form-check-label" for="typecourse2">
                                    آموزش حضوری
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="typecourse" type="checkbox" value="آموزش آنلاین از طریق اسکایپ و ... انجام داده ام." id="typecourse3">
                                <label class="form-check-label" for="typecourse3">
                                    آموزش آنلاین از طریق اسکایپ و ... انجام داده ام.
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">۲- خواستار آموزش زبان عمومی</label>
                            <select id="inputState" class="form-control">
                                <option selected>انتخاب کنید</option>
                              <?php  viewlangli($conn)?>
                            </select>
                        </div>
                        <br>
                        <div>۳- متقاضی تدریس در دوره</div>
                        <br>
                        <?php viewCoursescheack($conn) ?>
                        <br>
                        <div class="form-row">
                            <div>۵- تصویر کارت ملی</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required="" accept="*/image">
                            </div>
                            <br>
                            <div>۶- تصویر شناسنامه</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required="" accept="*/image">
                            </div>
                            <br>
                            <div>۷- تصویر مدرک تحصیلی</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" required="" accept="*/image">
                            </div>
                        </div>

                    </div>





					<div class="form-row">
						<div class="col-2">
							<button type="submit" class="btn btn-success btn-block btn-sm">ثبت درخواست</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>
