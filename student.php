<?php
session_start();
error_reporting(1);
include("includes/config.php");
if (isset($_POST['submit'])) {
  $regno = $_POST['regno'];
  $password = md5($_POST['password']);
  $query = mysqli_query($bd, "SELECT * FROM students WHERE StudentRegno='$regno' and password='$password'");
  if (mysqli_num_rows($query) > 0) {
    $num = mysqli_fetch_array($query);
    $extra = "change-password.php"; //
    $_SESSION['login'] = $_POST['regno'];
    $_SESSION['id'] = $num['studentRegno'];
    $_SESSION['sname'] = $num['studentName'];
    $uip = $_SERVER['REMOTE_ADDR'];
    $status = 1;
    $log = mysqli_query($bd, "insert into userlog(studentRegno,userip,status) values('" . $_SESSION['login'] . "','$uip','$status')");
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("location:http://$host$uri/$extra");
    exit();
  } else {
    $_SESSION['errmsg'] = "Invalid Reg no or Password";
    $extra = "student.php";
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("location:http://$host$uri/$extra");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to Enter</title>
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
  <style>
    body {
      background-color: #252724;
      color: white;
      font-family: "Roboto", sans-serif;
    }

    .container-nav {
      background-color: #ff9100;
      height: 55px;
      display: flex;
      justify-content: space-between;
      color: white;
      align-items: center;
      font-size: 20px;
      font-weight: bold;
    }

    .container-nav span {
      margin-left: 100px;
    }

    .container-nav a {
      color: white;
      margin: 5px;
      text-decoration: none;
    }

    .navbar-nav {
      margin-right: 100px;

    }

    footer {
      background-color: #ff9100;
      font-size: large;
      color: white;
      font-weight: 500;
    }

    .well {
      display: flex;
      justify-content: center;
      background-color: #252724;
      border: none;
    }

    .sub-well {
      width: 30%;
    }

    .content {
      margin-top: 50px;
    }

    .btn-info {
      background-color: #ff9100;
    }

    .btn-info:hover {
      background-color: #f5a623;
    }

    .notmember {
      font-size: larger;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav>
    <div class="container-nav">
      <div>
        <span>EduKomp</span>
      </div>
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </div>
    </div>
  </nav>

  <section>
    <div class="content">
      <div class="container">
        <h1 class="page-head-line text-center">Please Login To Enter</h1>
        <p class="text-muted notmember">Not a member? <a class="text-decoration-none" href="add-new.php">Register</a></p>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div class="well">
      <div class="sub-well">
        <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg'] = ""); ?></span>
        <form name="admin" method="post">
          <label>Enter Reg no : </label>
          <input type="text" name="regno" class="form-control" />
          <label>Enter Password : </label>
          <input type="password" name="password" class="form-control" />
          <hr />
          <button type="submit" name="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>
        </form>
      </div>
    </div>
  </section>

  <script src="assets/js/jquery-1.11.1.js"></script>

  <script src="assets/js/bootstrap.js"></script>
  <footer class="text-center navbar-fixed-bottom">
    <p>&copy; Created with love by Anggota Kelompok</p>
  </footer>
</body>

</html>