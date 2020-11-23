<form action="" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="ایمیل" >
        <div class="input-group-append">
            <span class="fa fa-envelope input-group-text"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox" name="Reminder" value="Reminder1"> یاد آوری من
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<?php
//$translations = [

//    'fa' => [
//        'Hello!' => 'درود!',
//        'Hi!' => 'درود!'
//    ],
//    'fr' => [
//        'Hello!' => 'Bonjour!'
//    ]
//];
//$r=["1","2","3"];
//setcookie("reply", json_encode($r), time() + 3600);
//var_dump($_COOKIE['reply']);
if(isset($_POST['Reminder']) && isset($_POST['email'])) {

    $email=$_POST['email'];
    $value_email = [];
    print_r($value_email);
    if (isset($_COOKIE["reply"])) {
        $value_email = json_decode($_COOKIE["reply"], true);
        echo "=>"."<br>";
        var_dump($_COOKIE['reply']);

    }
    if(!in_array($email,$value_email))
    {
        echo "000";

        $value_email[] = $email;
        setcookie("reply", json_encode($value_email), time() + 3600);
      var_dump($value_email);
    }


}
//
//function getTranslation($translations, $lang , $statement)
//{
//    if($translations["$lang"]["$statement"] == null)
//    {
//        return  $statement;
//        exit;
//    }
//    else
//    {
//        return $translations["$lang"]["$statement"];
//
//    }
//}
//
//echo getTranslation($translations,'fa','Hello!');
//echo "<br>";
//echo getTranslation($translations,'fa','Hi!');
//echo "<br>";
//echo getTranslation($translations,'fr','Something');
//
//?>
