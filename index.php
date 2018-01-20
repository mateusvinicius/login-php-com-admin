
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css.css" type="text/css" />
<?php include_once 'config.php'; ?>
</head>

<body>
<?php 

  include 'includes/header.php';
  

 ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-sm-6 col-md-4 col-md-offset-4">
               
                    <h1 class="text-center login-title">Area de Login</h1>
                    <form  action="verificar.php" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name='email'>
                        <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email com ninguém.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name='senha'>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">lembre-me</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                <?php 

                  if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];

                      switch($msg){
                        case 1 :
                        ?>
              <div class="mensage">
                  <div class="alert alert-warning" role="alert">
                        Senha ou login Errado porra !
                  </div>
              </div>
                <?php
                    }
                    }



?>

                

                
            </div>  
            <div class="col-md-4"></div>
        </div>    
        
        
        
    

</body>

</html> 