<?php
require_once 'admin/includes/functions.php';
$getcate=getCate(null,3);
?>
<header class="rtl">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" width="100" height="60"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"> </span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-light" href="index.php">صفحه اصلی</a>
                </li>

                  <?php

                  while ($row=mysqli_fetch_array($getcate))
                  {
                  ?>

                <li class="nav-item">
                  <a class="nav-link text-light" href="category_post.php?id_cate=<?= $row['id'] ?>"><?= $row['title'] ?></a>
                </li>

                  <?php
                  }
                  ?>
                  <?php
                  if(isset($_SESSION['login']) == 1)
                  {
                      ?>
                  <li class="nav-item active">
                      <a class="nav-link" href="admin/dashboard.php">حساب من <span class="sr-only">(current)</span></a>
                  </li>
                  <?php
                  }
                  ?>

                  <li class="nav-item active">
                      <a class="nav-link" href="about.php">درباره ما <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="contact.php">تماس با ما <span class="sr-only">(current)</span></a>
                  </li>

              </ul>

              <form class="form-inline flex-nowrap my-2 my-lg-0 col-lg-5" action="result_search.php" method="get">
                <input class="form-control mr-sm-2 col-9 " type="search" name="search" placeholder="جستجو ..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 ml-md-0 ml-2" type="submit" >جستجو</button>
              </form>
                <li class="nav-item active text-light " style="list-style: none">
                    <a class="nav-link text-light" href="register.php">ثبت نام <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active " style="list-style: none">
                    <a class="nav-link text-light" href="login.php">ورود <span class="sr-only">(current)</span></a>
                </li>
            </div>
          </nav>
    </header>
