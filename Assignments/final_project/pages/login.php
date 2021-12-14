<?php



function init(){
  $output = "";

if(isset($_POST['login'])){
  require_once 'classes/Pdo_methods.php';
  $admin = new Admin();
  $output = $admin->login($_POST);
  if($output === 'success'){
    header('Location: index.php');
  }
}
  
$html=<<<HTML
  <div class="container"><h1>Login</h1>
    
  
  <form action="login.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="sshaper@test.com">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="login" value="Login">
          </div>
        </div>
      </div>
      </form>



    </div>

HTML;
return [$output, $html];
}
?>
