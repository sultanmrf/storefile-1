
<?php

if(count($_POST) && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['comment']))
{
    $show_at_index=isset($_POST['show_at_index']) ? 1 : 0;
   $update_true=updateCate($_POST['id'],$_POST['title'],$show_at_index,$_POST['comment']);
     if($update_true == true)
     {
		 	 echo "<script>alert('دسته شما بروز شد')</script>";
     }	
}
if(count($_GET) && isset($_GET['id']) && is_numeric($_GET['id']))
{
	$result = getCate($_GET['id']);
  $cate = mysqli_fetch_assoc($result);
}
?>


	<!-- Main content -->
    <div class="content">
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">درج دسته بندی جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
						
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
								<input type="hidden" name="id" value="<?= $cate['id'] ?>" />
                  <div class="form-group col-6">
                    <label for="title">عنوان دسته بندی </label>
                    <input type="text" name="title" class="form-control" id="title" value="<?= $cate['title']  ?>" placeholder="عنوان دسته بندی را وارد کنید">
                  </div>
                 
                   <div class="form-group">
                    <label for="description">توضیحات </label>
                    <textarea name="comment" style="width: 630px;height: 100px;" class="form-control" id="comment" ><?= $cate['comment']  ?></textarea>
                  </div>
									
									 <div class="form-group">
                    <label for="show_at_index">نمایش در صفحه اصلی</label>
                   <input type="checkbox" name="show_at_index" value="1" <?= $cate['show_at_index'] ? 'checked' : '' ?> class="mr-2" id="show_at_index">

									</div>
                <div class="card-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-danger col-6">ارسال</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
       
          <!--/.col (right) -->
        </div>
      </div>
		</div>		
		
	</div>	
    <!-- /.content -->
</body>
</html>
