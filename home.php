<?php 
  include 'session.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->

    <title>Honey Moon Accommodation | HOME</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <style media="screen">
      body{
        background-image: url("students.jpg");
        background-attachment: fixed;
        background-size: 100%;
      }

      p {
        color: #c9c9c9;
      }
      
      dl, ol, ul {
        list-style: none;
        padding: 0;
      }

      .card {
        margin: 10px;
      }
      
      .modal-footer {
        position: relative;
      }

      @media only screen and (max-width: 992px){
        body {
          background: radial-gradient(lightgray,whitesmoke 65%,lightgray);
        }

        .jumbotron {
          background-color: rgba(0,0,0,.5);
        }
      }
      </style>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Honey Moon Accommodation&trade;</h1>
    </div>
    <div class="container">
      <div class="alert alert-success margin10">
        <b>Welcome to the Honey Moon Accommodation Management Dashboard</b>&nbsp;
        <button class="btn btn-outline-info">Manage Administrators</button>
        <button class="btn btn-outline-primary">button</button>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-success">Koketso Malope</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 201</li>
                <li class="text-dark">Matric Number: #3356647586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success">Accepted</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-danger">Mfundo Sono</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 202</li>
                <li class="text-dark">Matric Number: #6556647586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-danger">Declined</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-success">Jane Aguilera</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 203</li>
                <li class="text-dark">Matric Number: #335456456455855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success">Accepted</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-primary">John Kani</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 204</li>
                <li class="text-dark">Matric Number: #345564547586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Pending</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-primary">Xavier Kani</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 205</li>
                <li class="text-dark">Matric Number: #345564547586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Pending</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-primary">Kamohelo Masite</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 206</li>
                <li class="text-dark">Matric Number: #345564547586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-primary">Pending</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-dark">Monghadi Maseru</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 207</li>
                <li class="text-dark">Matric Number: #345564547586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-success">Accept</button>
                <button class="btn btn-danger">Decline</button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header">
              <b class="card-title text-danger">Terence Ndhlovu</b>
            </div>
            <div class="card-body">
              
              <ul>
                <li class="text-dark">Room: 208</li>
                <li class="text-dark">Matric Number: #345564547586855</li>
                <li class="text-dark">Highest Education: Degree</li>
              </ul>

            </div>
            <div class="card-footer text-center">
                <button class="btn btn-danger">Declined</button>
            </div>
          </div>
        </div>
      </div>

      
      <button class="btn btn-danger float-right" onclick="document.location.href='logout.php'">logout</button>

    </div>
    <div class="modal-footer">
      <p>Honey Moon Accommodation&trade; ; 2020</p>
    </div>
  </body>
</html>
