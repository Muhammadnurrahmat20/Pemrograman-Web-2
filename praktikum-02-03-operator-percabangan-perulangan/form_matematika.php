<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FORM MATEMATIKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous" />
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="row mt-3">
        <div class="card text-center">
          <div class="card-header">
            <h1>OPERATOR ARITMATIKA</h1>
            <p>20202205088 - Muhammad Nur Rahmat</p>
              <?php
                date_default_timezone_set ('Asia/Makassar');
                echo date ('l, d F Y H:i:s');
              ?>
          </div>
          <div class="card-body">
            <form>
              <div class="row mb-3">
                <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Pertama</label>
                <div class="col-sm-9">
                  <input type="number"class="form-control"id="inputnumber3"name="txtangka1">
                </div>
              </div>
              <div class="row mb-3">
                  <label for="inputnumber3"class="col-sm-3 col-form-label">Angka Kedua</label>
                <div class="col-sm-9">
                  <input type="number"class="form-control"id="inputnumber3"name="txtangka2">
                </div>
              </div>
              <button type="submit" class="btn btn-success">HITUNG</button>
            </form>
          </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
  </body>
</html>
