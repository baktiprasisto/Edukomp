<?php
session_start();
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  date_default_timezone_set('Asia/Kolkata'); // change according timezone
  $currentTime = date('d-m-Y h:i:s A', time());
  if (isset($_POST['submit'])) {
    $sql = mysqli_query($bd, "SELECT * FROM  students where pincode='" . trim($_POST['pincode']) . "' && StudentRegno='" . $_SESSION['login'] . "'");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
      $_SESSION['pcode'] = $_POST['pincode'];
      header("location:enroll.php");
    } else {
      $_SESSION['msg'] = "Error :Wrong Pincode. Please Enter a Valid Pincode !!";
    }
  }
?>

  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pincode Verification</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
      body {
        background-color: #252724;
      }
      footer {
        background-color: #ffc107;
      }
    </style>
  </head>

  <body>
    <?php include('includes/header.php'); ?>

    <?php if ($_SESSION['login'] != "") {
      include('includes/menubar.php');
    }
    ?>

    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-head-line text-center">Student Pincode Verification</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                Pincode Verification
              </div>
              <font color="red" align="center"><?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?></font>


              <div class="panel-body">
                <form name="pincodeverify" method="post">
                  <div class="form-group">
                    <label for="pincode">Enter Pincode</label>
                    <input type="password" class="form-control" id="pincode" name="pincode" placeholder="Pincode" required />
                  </div>

                  <button type="submit" name="submit" class="btn btn-default">Verify</button>
                  <hr />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/footer.php'); ?>

    <!-- <footer class="text-center mt-5 navbar-fixed-bottom">
      <p>&copy; Create with love by Anggota Kelompok</p>
    </footer> -->

    <script src="assets/js/jquery-1.11.1.js"></script>

    <script src="assets/js/bootstrap.js"></script>
  </body>

  </html>
<?php } ?>