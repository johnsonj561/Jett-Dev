<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">Jett Dev | <span class="text-orange navbar-pi">pi</span></a>
    </div>
    <form role="form" action="#" method = "post" name="navbar-form">
      <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="/view/projects.php">Projects</a>
          </li>
          <li>
            <a href="/view/contact.php">Contact</a>
          </li>
          <li>
            <?php if(isLoggedIn()){ echo '<a href="/index.php?result=logout-success" name="logout" >Log Out</a>'; } 
else{ echo '<a href="/index.php">Log In</a>'; } ?>
          </li>
        </ul>
      </div>
    </form>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>