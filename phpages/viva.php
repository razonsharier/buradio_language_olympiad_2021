<?php
@$go = $_REQUEST['go'];
if (empty($go)) {
    header('Location: viva');
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

$sqlck    = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
$resultck = mysqli_query($db, $sqlck);
$rowck    = mysqli_fetch_array($resultck, MYSQLI_ASSOC);
if ("dis" == $rowck['step1']) {
 echo "<script type='text/javascript'> document.location = 'dismis'; </script>";
 exit;
}

$sql = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $sqlcksw    = "SELECT * FROM settings WHERE sw_type = 'result_publish'";
$resultcksw = mysqli_query($db, $sqlcksw);
$rowcksw    = mysqli_fetch_array($resultcksw, MYSQLI_ASSOC);
if (isset($row["step1"])) {
    if ("off" == $rowcksw["switch"]) {
        $sw_control_on = "display: none";
       } else {
        $sw_control_off = "display: none";
       }
   }

    if ($row["selectionround3"] == "selected") {
        $_SESSION['step2'] = "pass";
        $_SESSION["step2ini"] = "display: none";
    } else {
        echo $tx = "";
        unset($_SESSION["step2ini"]);
        unset($_SESSION["step2"]);
    }

    if (empty($_SESSION['step2'])) {
        $_SESSION["step2"] = "display: none";
    }


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
                <li><a class="liactive" href="#">উপস্থিত বক্তৃতা</a></li>
                <li><a href="score">স্কোর</a></li>
            </ul>
        </div>
        <div id="containbody">
            <div id="quizbody">
                <p style="<?php echo "$sw_control_off" ?>; margin-top: 10px;">১৯ ফেব্রুয়ারি রাত ৮ টায় প্রথম রাউন্ডের রেজাল্ট প্রকাশ করা হবে।</p>
                <div style="<?php echo "$sw_control_on" ?>">
                    <p style="<?php echo $_SESSION['step2ini']; ?>">আপনি এই রাউন্ডের জন্য নির্বাচিত নন।</p>
                    <p style="<?php echo $_SESSION['step2']; ?>">আপনি উপস্থিত বক্তৃতার জন্য নির্বাচিত হয়েছেন।
                        <br /><br /> উপস্থিত বক্তৃতার সময় আপনাকে এসএমএস এর মাধ্যমে জানিয়ে দেওয়া হবে।</p><br />
                </div>
            </div>
        </div>

    </div>
    <?php
}
    ?>
</body>

</html>