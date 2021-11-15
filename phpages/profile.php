<?php
@$go = $_REQUEST['go'];
if (empty($go)) {
 header('Location: dashboard');
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

require 'php/db.php';

//update scoreboard
$sqltm    = "SELECT * FROM reg t1 INNER JOIN rank t2 ON t1.userid = t2.userid";
$resulttm = mysqli_query($db, $sqltm);
$counttm  = mysqli_num_rows($resulttm);
while ($rowtm = mysqli_fetch_array($resulttm, MYSQLI_ASSOC)) {
 if ($rowtm['userid'] == $rowtm['userid']) {
  $uid        = $rowtm['userid'];
  $marks1     = $rowtm["marks1"];
  $marks2     = $rowtm["marks2"];
  $marks3     = $rowtm["marks3"];
  $totalmarks = ($marks1 + $marks2 + $marks3);
  $tmqury     = "UPDATE rank SET totalmarks = '$totalmarks' WHERE userid = $uid";
  mysqli_query($db, $tmqury);
 }
}

$mobile   = mysqli_real_escape_string($db, $_SESSION['regmobile']);
$password = mysqli_real_escape_string($db, $_SESSION['regpass']);

$sqlck    = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
$resultck = mysqli_query($db, $sqlck);
$rowck    = mysqli_fetch_array($resultck, MYSQLI_ASSOC);
if ("dis" == $rowck['step1']) {
 echo "<script type='text/javascript'> document.location = 'dismis'; </script>";
 exit;
}


$sql    = "SELECT * FROM reg WHERE mobile = '$mobile' AND pass = '$password'";
$result = mysqli_query($db, $sql);
$count  = mysqli_num_rows($result);
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

 //access code
 $useridac = $row['userid'];
 unset($_SESSION["secondpage"]);
 $_SESSION["firstpage"] = "$useridac";

 if ("pass" == $row["step1"]) {
  $_SESSION['step1']    = "pass";
  $_SESSION["step1ini"] = "display: none";
 } elseif ("fail" == $row["step1"]) {
  $_SESSION['step11']   = "fail";
  $_SESSION["step1ini"] = "display: none";
 } else {
  echo $tx = "";
  unset($_SESSION["step1ini"]);
  unset($_SESSION["step1"]);
  unset($_SESSION["step11"]);
 }

 if (empty($_SESSION['step1'])) {
  $_SESSION["step1"] = "display: none";
 }

 if ("fail" == $row["step1"]) {
  $_SESSION['step11']   = "fail";
  $_SESSION["step1"]    = "display: none";
  $_SESSION["step1ini"] = "display: none";
 } else {
  echo $tx = "";
  unset($_SESSION["step11"]);
 }

 if (empty($_SESSION['step11'])) {
  $_SESSION["step11"] = "display: none";
 }

 if (empty($_SESSION['step1ini'])) {
    $_SESSION["step1inihid"] = "display: none";
   } else {
    unset($_SESSION["step1inihid"]);
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
    <style>
        body {
            margin: 0;
        }
    </style>
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
            <p style="font-size: 16px;"><strong><?php echo $row['name']; ?></strong></p>
            <p style="font-size: 14px;"><?php echo $row['mobile']; ?></p>
            <p style="font-size: 14px;"><?php echo $row['email']; ?></p>
        </div>
        <div id="navitem">
            <ul>
                <li><a class="liactive" href="#">কুইজ</a></li>
                <li><a href="viva">উপস্থিত বক্তৃতা</a></li>
                <li><a href="score">স্কোর</a></li>
            </ul>
        </div>
        <div id="containbody">
            <div id="quizbody">

                <div style="<?php echo $_SESSION['step1inihid']; ?>">
                    <p style="<?php echo "$sw_control_off" ?>; margin-top: 10px;">আপনার কুইজটি জমা নেওয়া
                        হয়েছে।<br /><br />প্রথম রাউন্ডের রেজাল্ট ১৯ ফেব্রুয়ারি রাত ৮ টায় প্রকাশ করা হবে।</p>
                </div>


                <div style="<?php echo "$sw_control_on" ?>">
                    <p style="<?php echo $_SESSION['step11']; ?>">আপনি কুইজ পরিক্ষায় <strong><a
                                style="color: red;">অনুত্তীর্ণ!</a></strong></p>


                    <p style="<?php echo $_SESSION['step1']; ?>">আপনি কুইজ পরিক্ষায় <strong><a
                                style="color: green;">উত্তীর্ণ!</a></strong> <br />


                        <p style="<?php echo $_SESSION['step1']; ?>;margin-top: 50px">উপরের "উপস্থিত বক্তৃতা"
                            ট্যাব থেকে
                            উপস্থিত বক্তৃতার সময় জেনে নিন।</p>
                    </p>
                </div>

                <p>১৯ ফেব্রুয়ারি বিকাল ৪ টার পর কুইজ প্রতিযোগিতায় অংশগ্রহণ করা যাবে।</p>
                <div style="display: none;">
                <div style="<?php echo $_SESSION['step1ini']; ?>">
                    <p>কুইজ পর্বে অংশগ্রহন করতে নিচের বাটনে ক্লিক করুন।</p>
                    <br /><br />
                    <a class="quizbutton" href="quiz">কুইজে প্রবেশ
                        করুন!</a>
                    <p style="color:red;">(কুইজের সতর্কতা গুলো ভালো ভাবে পড়ে
                        দেখবেন)
                    </p>
                </div>
    </div>


            </div>
        </div>

    </div>
    <?php
}
?>
</body>

</html>