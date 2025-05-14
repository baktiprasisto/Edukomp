<?php
include("includes/config.php");

if (isset($_POST["submit"])) {
  $studentname = $_POST['studentname'];
  $studentregno = $_POST['studentregno'];
  $password = md5($_POST['password']);
  $pincode = rand(100000, 999999);
  $ret = mysqli_query($bd, "insert into students(studentName,StudentRegno,password,pincode) values('$studentname','$studentregno','$password','$pincode')");
  if ($ret) {
    $_SESSION['msg'] = "Student Registered Successfully !!";
  } else {
    $_SESSION['msg'] = "Error : Student  not Register";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Register</title>
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

    .btn-kirim {
      background-color: #ff9100;
    }

    footer {
      text-align: center;
      margin-top: 100px;
      position: absolute;
      bottom: 0px;
      background-color: #ff9100;
      width: 100%;
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

  <div class="container mt-5">
    <div class="text-center mb-4">
      <h4 class="mb-3 fw-bold">PLEASE REGISTER TO ENTER</h4>
      <p class="text-muted">Already a member? <a class="text-decoration-none" href="student.php">Login</a></p>
    </div>

    <div class="container d-flex justify-content-center mt-5">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">No Reg :</label>
            <input type="text" class="form-control" id="studentregno" name="studentregno" placeholder="12345678">
          </div>
          <div class="col">
            <label class="form-label">Name :</label>
            <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Johnny Depp">
          </div>

          <!-- <div class="col">
            <label class="form-label">No Reg / NPM:</label>
            <input type="text" class="form-control" id="studentregno" name="studentregno" placeholder="081923">
          </div> -->
        </div>

        <div class="mb-3">
          <label class="form-label">Password:</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="">
        </div>

        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn-secondary btn-kirim" name="submit">Submit</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>
  <footer>
    <p>&copy; Created with love by Anggota Kelompok</p>
  </footer>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>