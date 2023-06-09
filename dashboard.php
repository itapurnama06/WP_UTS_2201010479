<?php
include "function.php";
session_start();
if($_SESSION['login'] == false){
    header('Location:login.php');
}

    $query = query("SELECT * FROM tbadmin");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-warning">
            <h3 class="text-light p-3"><b>Sistem Informasi Akademika</b></h3>
        </div>

        <div class="col-3" style="background-color:#DBDFEA; padding-bottom:38%;">
            <ul class="list-group">
                <li class="list-group-item text-warning mt-2 mb-2"><a href="dashboard.php" style="text-decoration:none;color:orange;">Dashboard</a></li>
                <li class="list-group-item text-warning mb-2"><a href="mahasiswa.php" style="text-decoration:none;color:orange;">Mahasiswa</a></li>
                <li class="list-group-item text-warning"><a href="logout.php" style="text-decoration:none;color:orange;">Logout</a></li>
            </ul>
        </div>
            
        <div class="col-9">
            <div class="row">
                <div class="col-12 p-3 border-bottom border-3">
                    <h1>Dasboard</h1>
                </div>

                <div class="col-4 mt-3">
                    <div class="bg-warning text-center border rounded text-light">
                        <h1><a href="mahasiswa.php"style="text-decoration:none;color:white;"><i class="fa fa-graduation-cap"></i>Mahasiswa<br>
                        <b>1</b><br>
                        <i class="fs-3">Data Mahasiswa</i>
                        </a></h1>  
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>