<?php
$name = 'پیشخوان';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.view.php';

$username = $_SESSION['username'];
 $conn =connectToDB();
?>
	<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
			<div class="container">
				<div class="row">
					<div class="col-12"><h5>پیشخوان</h5></div>
					<div class="col-12">
                       <? GetemptyUser($username , $conn);?>
                    </div>
					<div class="col-md-6">
						<!-- start news widget -->
						<div class="widget widget-news">
							<h6 class="title-widget-news">اخبار و اطلاعیه ها</h6>
							<div class="list-group">
<!--								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">-->
<!--									<div class="d-flex w-100 justify-content-between">-->
<!--										<h6 class="mb-1">برگزاری دوره آموزش زبان انگلیسی</h6>-->
<!--										<small>۳ روز پیش</small>-->
<!--									</div>-->
<!--									<small>دوره جدید زبان از امروز آغاز می شود</small>-->
<!--								</a>-->
<!--								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">-->
<!--									<div class="d-flex w-100 justify-content-between">-->
<!--										<h6 class="mb-1">برگزاری دوره آموزش زبان انگلیسی</h6>-->
<!--										<small class="text-muted">۳ روز پیش</small>-->
<!--									</div>-->
<!--									<small class="text-muted">دوره جدید زبان از امروز آغاز می شود</small>-->
<!--								</a>-->
<!--								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">-->
<!--									<div class="d-flex w-100 justify-content-between">-->
<!--										<h6 class="mb-1">برگزاری دوره آموزش زبان انگلیسی</h6>-->
<!--										<small class="text-muted">۳ روز پیش</small>-->
<!--									</div>-->
<!--									<small class="text-muted">دوره جدید زبان از امروز آغاز می شود</small>-->
<!--								</a>-->
                              <?php  viewNewsIndex($conn) ?>
							</div>
						</div>
						<!-- end new widget -->
					</div>
					<div class="col-md-6">
						<!-- start-widget-request -->
						<div class="widget-request">
							<h6 class="title-widget-request">درخواست ها</h6>
							<div class="row">
								<div class="col-sm-6">
									<div class="card reg-master">
										<div class="card-body">
											<h6 class="card-title">مدرس زبان خارجی هستید ؟</h6>
											<p class="card-text">اگر در زمینه تدریس زبان خارجی مهارت دارید، از لینک زیر به مدرسین ما بپیوندید.</p>
											<a href="#" class="btn btn-info btn-block btn-sm">ثبت نام مدرس</a>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card reg-tranlator">
										<div class="card-body">
											<h6 class="card-title">مترجم زبان خارجی هستید؟</h6>
											<p class="card-text">اگر در زمینه ترجمه زبان های خارجی تخصص دارید به مترجمین آکادمی بپیوندید.</p>
											<a href="#" class="btn btn-info btn-block btn-sm">ثبت نام مترجم</a>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- end-widget-request -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 table-course">
						<h6>دوره های شما</h6>
						<table class="table table-striped table-dark">
							<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">دوره</th>
								<th scope="col">ترم فعلی</th>
								<th scope="col">کارنامه</th>
								<th scope="col">ترم جدید</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>آموزش مقدماتی انگلیسی</td>
								<td>ترم دوم</td>
								<td><small>در حال انجام</small></td>
								<td></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>آموزش تخصصی اسپانیایی</td>
								<td>ترم یک</td>
								<td><button class="btn btn-primary btn-sm">کارنامه</button></td>
								<td><button class="btn btn-success btn-sm">ثبت نام ترم </button></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>تخصصی خبرنویسی انگلیسی</td>
								<td>ترم یک</td>
								<td> <small>در حال انجام</small></td>
								<td></td>
							</tr>
							</tbody>
						</table>
					</div>
                    <div class="col-12">


                    </div>
				</div>
			</div>
		</main>


</div>
	</div>
</div>
<?php require 'footer.view.php';
