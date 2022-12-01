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
        <div class="text-center">
          <h2>Form Login</h2>
        </div>
        <form action="dashboard.php" method=""> 
          <div class="row mb-3">
              <label for="inputname3"class="col-sm-3 col-form-label">Usernmae</label>
            <div class="col-sm-9">
              <input type="username"class="form-control"id="inputname3">
            </div>
          </div>
          <div class="row mb-3">
              <label for="inputpassword3"class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password"class="form-control"id="inputpassword3">
            </div>
          </div>
            <button type="submit" class="btn btn-success" id="submit" name="login">Login</button>
        </form>
      </div>
    </div>
    <?php
      session_start();

      $_SESSION["user"] = "rahmat";
      $_SESSION["pass"] = 12345;
    ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
  </body>
</html>
