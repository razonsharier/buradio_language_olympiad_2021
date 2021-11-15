<?php
@$go = $_REQUEST['go'];
if (empty($go)) {
    header('Location: score');
    exit;
}
?>

<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php

header('Cache-control: no-cache, must-revalidate, max-age=0');

if (empty($_SESSION['regmobile']) && empty($_SESSION['regpass'])) {
    $_SESSION["error_login"] = "প্রথমে লগইন করুন!";
    echo "<script type='text/javascript'> document.location = 'login'; </script>";
    exit;
}

require('php/db.php');
$mobile = mysqli_real_escape_string($db, $_SESSION['regmobile']);
$password = mysqli_real_escape_string($db, $_SESSION['regpass']);

$sqltm = "SELECT * FROM reg t1 INNER JOIN rank t2 ON t1.userid = t2.userid";
$resulttm = mysqli_query($db, $sqltm);
$counttm = mysqli_num_rows($resulttm);
while ($rowtm = mysqli_fetch_array($resulttm, MYSQLI_ASSOC)) {
    if ($rowtm['userid'] == $rowtm['userid']) {
        $uid = $rowtm['userid'];
        $marks1 = $rowtm["marks1"];
        $marks2 = $rowtm["marks2"];
        $marks3 = $rowtm["marks3"];
        $totalmarks = ($marks1 + $marks2 + $marks3);
        $tmqury = "UPDATE rank SET totalmarks = '$totalmarks' WHERE userid = $uid";
        mysqli_query($db, $tmqury);
    }
}

$sqlcksw    = "SELECT * FROM settings WHERE sw_type = 'result_publish'";
$resultcksw = mysqli_query($db, $sqlcksw);
$rowcksw    = mysqli_fetch_array($resultcksw, MYSQLI_ASSOC);
if ("off" == $rowcksw["switch"]) {
    $sw_control_on = "display: none";
   } else {
    $sw_control_off = "display: none";
   }

$sql = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মাতৃভাষা অলিম্পিয়াড - BURADiO</title>
    <link rel="shortcut icon" href="media/logo2.png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="bodycontainer">
        <!-- body container to centralize elements-->
        <div id="header">
            <!-- header nav bar -->
            <div id="navmenu">
                <div class="left">
                    <a href="home"><img class="logo" src="media/logo.jpg"></a>
                </div>
                <div class="right">
                    <a class="outbutton" href="logout">লগআউট করুন</a>
                </div>
            </div>
        </div>
        <div id="userdtls">
            <p style="font-size: 16px;"><strong><?php echo $row['name'] ?></strong></p>
            <p style="font-size: 14px;"><?php echo $row['mobile'] ?></p>
            <p style="font-size: 14px;"><?php echo $row['email'] ?></p>
        </div>
        <div id="navitem">
            <ul>
                <li><a href="dashboard">কুইজ</a></li>
                <li><a href="viva">উপস্থিত বক্তৃতা</a></li>
                <li><a class="liactive" href="#">স্কোর</a></li>
            </ul>
        </div>

        <?php
            $sqlm = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
            $resultm = mysqli_query($db, $sqlm);
            $countm = mysqli_num_rows($resultm);
            $rowm = mysqli_fetch_array($resultm, MYSQLI_ASSOC);
            $marks1m = $rowm["marks1"];
            $marks2m = $rowm["marks2"];
            $marks3m = $rowm["marks3"];
            $totalmarksm = ($marks1m + $marks2m + $marks3m);
            ?>

        <div id="containbody">
            <div id="rankbody">
            <p style="<?php echo "$sw_control_off" ?>">১৯ ফেব্রুয়ারি রাত ৮ টায় প্রথম রাউন্ডের রেজাল্ট প্রকাশ করা হবে।</p>
                <div style="<?php echo "$sw_control_on" ?>">
                    <p>আপনার সর্বমোট স্কোরঃ <strong style="font-size: 22px;"><?php echo "$totalmarksm" ?></strong></p>
                    <hr />
                    <br />
                    <p>প্রথম রাউন্ডের স্কোরঃ <strong style="font-size: 16px;"><?php echo $rowm['marks1'] ?></strong></p>
                    <p>দ্বিতীয় রাউন্ডের স্কোরঃ <strong style="font-size: 16px;"><?php echo $rowm['marks3'] ?></strong>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <?php
}
    ?>
</body>

</html>