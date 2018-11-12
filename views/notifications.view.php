<?php
$name = 'اطلاع رسانی';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.admin.view.php';
$username = $_SESSION['username'];
$conn =connectToDB();
?>
<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12">

			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h4>اطلاع رسانی، اخبار و اعلامیه ها</h4>
			</div>
            <div class="col-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">کد</th>
                                <th>متن خبر</th>
                                <th>تاریخ</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php viewNews($conn) ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">افزودن خبر جدید</h3>
                    </div>
                    <form role="form" method="post" action="notifications.php">
                            <div class="form-group">
                                <label for="textnews">متن خبر</label>
                                <textarea class="form-control" name="textnews" id="desccourse" rows="3"></textarea>
                            </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">افزودن</button>
                        </div>
                    </form>
                </div>
            </div>




















        </div>
    </div>
</main>
    </div>
    </div>
    </div>
<?php require 'footer.view.php';?>