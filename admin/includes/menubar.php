<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!--<div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>-->
    <br>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <!--<li class="header">REPORTS</li>-->
      <li class=""><a href="home.php"><span>Results</span></a></li>
      <li class=""><a href="votes.php"> <span>Votes</span></a></li>
      <!--<li class="header">MANAGE</li>-->
      <li class=""><a href="voters.php"><span>Voters</span></a></li>
      <li class=""><a href="positions.php"> <span>Positions</span></a></li>
      <li class=""><a href="candidates.php"><span>Candidates</span></a></li>
      <!--<li class="header">SETTINGS</li>-->
      <li class=""><a href="feedbackresults.php"> <span>Feedback/Contact</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"> <span>Election Title</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>