<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="header text-center">
                    <h3> Halaman Dashboard</h3> 
                    <p> 
                    <?php
                        session_start();

                        if (isset($_SESSION['inputUsername']))
                        {
                            echo "Nama Pengguna = ".$_SESSION['inputUsername'];
                        }
                        else
                        {
                            header("location: login.php"); 
                        }
                        ?>
                        
                    </p>
                </div>   
                    
                <div class="text-center">
                    <a href='logout.php'><button type="submit" class="btn btn-danger" > Logout </button></a>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>