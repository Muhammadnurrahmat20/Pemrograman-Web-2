<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous" />
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="row mt-3 col-md-6 offset-3">
        <div class="header text-center">
          <h1>Form Login</h1>
        </div>
        <form action="login.php" method="post"> 
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Usernmae</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" name="inputUsername">
            </div>
          </div>
          <div class="row mb-3">
              <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="inputPassword">
            </div>
          </div>
          <?php
           session_start();
           $inputUsername = 'rahmat';
           $inputPassword = '20202205088';
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
            <button type="submit" class="btn btn-success" name="login" value="login">Login</button>
        </form>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
  </body>
</html>