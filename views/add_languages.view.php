<?php
$name = 'زبان ها';
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
          <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
              <h3 class="box-title">افزودن زبان</h3>
      </div>
      <form role="form" method="post" action="languages.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="langname">نام زبان</label>
                  <input type="text" name="viewname" class="form-control" id="langname" required>
                </div>
                <div class="form-group">
                  <label for="viewname">نام لاتین زبان</label>
                  <input type="text"  name="name" class="form-control" id="viewname" required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">افزودن</button>
              </div>
            </form>
    </div>
</div>
<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">زبان ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th>نام زبان</th>
                  <th>نام لاتین</th>
                  <th>عملیات</th>
                </tr>
                <tbody>
                  <?php viewlang($conn); ?>
                </tbody>
              </thead>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>








</div>
</div>
</main>
</div>
</div>
</div>
 <?php require 'footer.view.php';?>
