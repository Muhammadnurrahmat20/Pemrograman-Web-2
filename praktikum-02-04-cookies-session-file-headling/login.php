<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Form Login</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-3">
        <div class="header text-center">
          <h2> Form  Login </h2> 
        </div>   
        <form action="login.php" method="post">
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="inputUsername">
            </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Paswword</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="inputPassword">
            </div>
          </div>

          <?php
            session_start();
              $inputUsername = 'rahmat';
              $inputPassword = '202022';
              if (isset($_POST['login'])) 
              {
                if ($_POST['inputUsername'] == $inputUsername && $_POST['inputPassword'] == $inputPassword)
                {
                  $_SESSION["inputUsername"] = $inputUsername; 
                  header("location: dashboard.php");
                  echo "Nama Pangguna = ".$_SESSION["inputUsername"];
                } 
                else 
                {    
                  echo "<p>Username Atau Password Salah </p>";
                }
                }   
            ?>
            
          <button type="submit" class="btn btn-success" name="login" value="login"> Login </button>
        </form>
     </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>