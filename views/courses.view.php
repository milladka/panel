<?php
$name = 'دوره ها';
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
<div class="col-md-6">
  <h4>مدیریت دوره ها</h4>
</div>
</div>
</br>
<div class="col-md-12">
        <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
            <h3 class="box-title">افزودن دوره جدید</h3>
    </div>
    <form role="form" method="post" action="courses.php">
            <div class="box-body">
              <div class="form-group">
                <label for="namecourse">نام دوره</label>
                <input type="text" name="namecourse" class="form-control" id="namecourse" required>
              </div>
              <div class="form-group">
                <label for="timecourse">مدت دوره</label>
                <input type="text"  name="timecourse" class="form-control" id="timecourse" required>
              </div>
              <div class="rtl form-group">
                  <label>نوع دوره:</label>
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="typecourse" id="inlineRadio1" value="حضوری">
                      <label class="form-check-label" for="inlineRadio1">حضوری  </label>
                </div>
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="typecourse" id="inlineRadio2" value="غیرحضوری">
                      <label class="form-check-label" for="inlineRadio2">غیرحضوری  </label>
                </div>
              </div>
              
              <div class="form-group">
              <label for="languagecourse">زبان دوره</label>
               <select class="form-control"  name="languagecourse" id="languagecourse">
                  <?php GetLangname($conn); ?>
             </select>
             </div>
             <div class="form-group">
                <label for="desccourse">توضیحات دوره</label>
                  <textarea class="form-control" name="desccourse" id="desccourse" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="amountcourse">هزینه دوره ( به ریال )</label>
                    <input type="number"  name="amountcourse" class="form-control" id="amountcourse" required>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">افزودن</button>
            </div>
          </form>
  </div>
</div>
        <br>
        <div class="col-12">
            <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">دوره ها</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">کد</th>
                                <th>نام دوره</th>
                                <th>مدت</th>
                                <th>نوع</th>
                                <th>زبان</th>
                                <th>قیمت (ریال)</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                <?php viewCourses($conn); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>


        </div>















</div>
</div>
</main>
</div>
</div>
</div>
 <?php require 'footer.view.php';?>
