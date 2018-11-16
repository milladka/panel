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
                       <?php GetemptyUser($username , $conn) ?>
            </div>
			<div class="col-md-6">
						<!-- start news widget -->
				<div class="widget widget-news">
				<h6 class="title-widget-news">اخبار و اطلاعیه ها</h6>
				<div class="list-group">
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
			    <div class="col-sm-6"><?php getidfromteacher2($username , $conn)?></div>
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
	</div>
</main>
</div>
	</div>
</div>
<?php require 'footer.view.php';
