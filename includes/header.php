<?php
include("includes/config.php");
error_reporting(0);
?>
<?php if ($_SESSION['login'] != "") { ?>
  <style>
    header {
      color: white;
      background-color: #ff9100;
    }
  </style>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <strong>Welcome: </strong><?php echo htmlentities($_SESSION['sname']); ?>
          &nbsp;&nbsp;
          <strong>Last Login:<?php
                              $ret = mysqli_query($bd, "SELECT  * from userlog where studentRegno='" . $_SESSION['login'] . "' order by id desc limit 1,1");
                              $row = mysqli_fetch_array($ret);
                              echo $row['userip']; ?> at <?php echo $row['loginTime']; ?></strong>
        </div>

      </div>
    </div>
  </header>
<?php } ?>

<!-- <div class="navbar navbar-inverse set-radius-zero">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="" href="#" style="color:#fff; ">
        ONLINE COURSE REGISTRATION
      </a>

    </div>

    <div class="left-div">
      <i class="fa fa-user-plus login-icon"></i>
    </div>
  </div>
</div> -->