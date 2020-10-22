<?php  
    include ("koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kuliner Wisata Blitar</title>
    <link rel="stylesheet" type="text/css" href="css\style_login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container register ">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>KULINER WISATA BLITAR</h3>
                <p>Silahkan Login atau Daftar</p>
                <a class="" href="index.php">
                <input type="submit" class="btn" value="Halaman Utama"></a>

            </div>
            
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar</a>
                    </li>
                </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <h3 class="register-heading">Silahkan Masuk</h3>
                    <form class="row register-form" action="login.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" value="" name="username" id="username" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" value="" name="password" id="password" />
                            </div>
                            <input type="submit" class="btnRegister" value="Masuk" name="login">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
                    <h3  class="register-heading">Daftar</h3>
                    <div class="row register-form">
                        <p>Daftar disini......</p>
                        <div class="col-md-6">
                            
                        </div>
                        <div class="col-md-6"> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>