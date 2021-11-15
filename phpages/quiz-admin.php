<?php
@$go = $_REQUEST['go'];
if (empty($go)) {
 header('Location: admin131');
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

require 'php/db.php';

if(isset($_POST['rsltswitch'])){ 
    $rsltswitch    = "UPDATE settings SET switch = '$_POST[rsltswitch]' WHERE sw_type = 'result_publish'";
 $rsltswitchqry = mysqli_query($db, $rsltswitch);
}

if(isset($_POST['vivascr']) && isset($_POST['getvivaid'])){ 
    $vivascr    = "UPDATE reg SET marks3 = '$_POST[vivascr]' WHERE id = '$_POST[getvivaid]'";
 $vivascrqry = mysqli_query($db, $vivascr);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>মাতৃভাষা অলিম্পিয়াড - BURADiO</title>
    <link rel="shortcut icon" href="media/logo2.png">
    <link rel="stylesheet" href="css/style.css">

    <style>
        button {
            margin: 0 auto;
            max-width: 120px;
            width: 100%;
            position: relative;
        }

        input {
            width: 30px;
        }

        #containbody {
            margin: 0 auto;
            max-width: 1000px;
            font-family: Arial, Helvetica, sans-serif;
            min-height: 80px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            overflow: auto;
            text-align: center;
        }

        .abutton {
            padding: 0;
            border: 0;
            width: 40px;
            height: 20px;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        table {
            font-size: 14px;
        }

        select {
            width: 100px;
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
                    <a href="index.php"><img class="logo" src="media/logo.jpg"></a>
                </div>
                <div class="right">
                    <a class="quizbutton" href="home">হোম পেইজ</a>
                </div>
            </div>
        </div>

        <div id="containbody">

            <div id="scorebody">
                <h2 style="font-family: bangla;"><strong><u>অ্যাডমিন প্যানেল - মাতৃভাষা অলিম্পিয়াড</u></strong></h2>
                <div style="text-align: left;">
                    <i
                        style="background-color: #ffffff; padding: 5px 15px; font-size: 12px; border-radius: 4px; border: 1px solid #D9E4E6">pass</i>
                    <i
                        style="background-color: #e0aaaa; padding: 5px 15px; font-size: 12px; border-radius: 4px;">dis</i>
                    <i
                        style="background-color: #e0dfaa; padding: 5px 15px; font-size: 12px; border-radius: 4px;">fail</i>
                    <i
                        style="background-color: #aae0ba; padding: 5px 15px; font-size: 12px; border-radius: 4px;">new</i>
                </div>
                <div style="float: right; margin-top: -25px; font-size: 14px;">
                    <?php
                $sqlcksw    = "SELECT * FROM settings WHERE sw_type = 'result_publish'";
                $resultcksw = mysqli_query($db, $sqlcksw);
                $rowcksw    = mysqli_fetch_array($resultcksw, MYSQLI_ASSOC);
                ?>
                    <a>Result Publish: </a>
                    <form method="POST">
                        <select name="rsltswitch" onchange='this.form.submit()'>
                            <option value="<?php echo $rowcksw['switch'] ?>" hidden selected>
                                <?php echo $rowcksw['switch'] ?></option>
                            <option value="on"><b>on</b></option>
                            <option value="off">off</option>
                        </select>
                    </form>
                </div>
                <table class="responstable">
                    <tbody>
                        <tr>
                            <th style="width: 30px;">ক্রমিক</th>
                            <th>নাম</th>
                            <th>মোবাইল</th>
                            <th>ইমেইল</th>
                            <th style="width: 50px;">কুইজ</th>
                            <th style="width: 80px;">উপস্থিত বক্তৃতা</th>
                            <th style="width: 140px;">শুরু / শেষ</th>
                        </tr>

                        <?php
$sqlr    = "SELECT * FROM reg ORDER BY marks1 DESC";
$resultr = mysqli_query($db, $sqlr);
$countr  = mysqli_num_rows($resultr);
while ($rowr = mysqli_fetch_array($resultr, MYSQLI_ASSOC)) {

    if ($rowr['step1'] == "dis") {
        $statuspd = "background-color: #e0aaaa;";
        $vivascrhid = "display: none;";
    } elseif ($rowr['step1'] == "pass") {
        $statuspd = "";
        $vivascrhid = "";
    } elseif ($rowr['step1'] == "fail") {
        $statuspd = "background-color: #e0dfaa";
        $vivascrhid = "display: none;";
    } else {
        $statuspd = "background-color: #aae0ba";
        $vivascrhid = "display: none;";
    }
 ?>
                        <tr style="<?php echo $statuspd; ?>">
                            <td>
                                <?php echo @$snr += 1; ?>


                            </td>
                            <td><?php echo $rowr['name']; ?></td>
                            <td><?php echo $rowr['mobile']; ?></td>
                            <td>
                                <?php echo $rowr['email']; ?> <br />
                                <i>(ip: <?php echo $rowr['ip']; ?>)</i>
                            </td>
                            <td><?php echo $rowr['marks1']; ?></td>
                            <td>
                                <form method="POST">
                                    <select
                                        style="<?php echo $vivascrhid; ?>; width: 70px; background-color: #ffffff; margin-top: 5px; margin-bottom: -10px; border: 0px;"
                                        name="vivascr" onchange='this.form.submit()'>
                                        <option value="<?php echo $rowr['marks3'] ?>" hidden selected>
                                            <?php echo $rowr['marks3'] ?></option>
                                        <?php
                                        for ($i=1; $i<=20; $i++)
                                        {
                                        ?>
                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <input style="display: none;" value="<?php echo $rowr['id'] ?>" name="getvivaid" type="text" autocomplete="off">
                                </form>
                            </td>
                            <td><?php echo $rowr['questart']; ?> <br /> <?php echo $rowr['quend']; ?></td>
                        </tr>
                        <?php
}
?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</body>

</html>