<?php
require_once("admin/includes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>فروشگاه</title>

    <link rel="stylesheet" href="admin/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-v4-rtl/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="./style.css" />
    <style>
        .card-3d-all
        {
            perspective: 1000px ;
        }
        .card-3d
        {
            position: relative;
            transform-style: preserve-3d;
            transform: rotatex(11deg) ;
            transition: 0.7s ease-in-out;

        }
        .card-3d:hover
        {
            position: relative;
            transform-style: preserve-3d;
            transform: rotatex(2deg);
            box-shadow: 2px 2px 15px 1px #01FF70;
        }
    </style>

</head>
<body dir="rtl">

<?php
require_once("front_layouts/header.php");
$posts = getPostsForIndex(10, 'id', 'DESC');
?>

<main class="rtl mt-5 col-12">
    <div class="d-flex justify-content-center flex-wrap card-3d-all">

        <?php
            while($row=mysqli_fetch_array($posts))
            {
                ?>
                <div class="m-4 card card-3d"  style="width: 18rem;">
                    <div class="card-img ">
                        <img src="admin/posts/image-post/<?= !empty($row['pic_url']) ? $row['pic_url'] : 'p1.jpg'; ?>" class="card-img-top" alt="store">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="single.php" class="nav-link p-0 text-dark"><?= $row['title'] ?></a>
                        </h5>
                        <p class="card-text text-muted o-font-sm"><?= $row['short_description'] ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <i class="font-weight-bold text-success">25,000 تومان</i>
                        <i class="fa fa-low-vision fa-1x text-danger"><?= $row['count_views'] ?></i>
                        <i class="fa fa-check-circle-o fa-1x text-danger"><?= $row['count_views'] ?></i>

                    </div>
                    <div class="card-footer">
                        <a href="single.php?id=<?= $row['id'] ?>" class="btn btn-outline-secondary btn-block">ادامه مطلب</a>
                    </div>
                </div>

                <?php

        }

        ?>

    </div>
</main>


<?php require_once("front_layouts/footer.php"); ?>


<script src="./node_modules/jquery/dist/jquery.min.js"></script>
<script src="./popper.min.js"></script>
<script src="./node_modules/bootstrap-v4-rtl/dist/js/bootstrap.min.js"></script>

</body>
</html>