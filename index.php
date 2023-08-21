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
      body {
        background-image: url("students.jpg");
        background-attachment: fixed;
        background-size: 100%;
      }

      .pager p {
        background-color: rgba(0,0,0,0.8);
        border-radius: 5px;
        padding: 15px;
      }

      p {
        color: #c9c9c9;
      }

      .row {
        text-align: center;
      }

      .footer {
        backround: linear-gradient(45deg, backround, rgba(0,0,0,.5), rgba(0,0,0,.1));
        width: 98%;
        height: 3em;
        text-align: center;
        position: absolute;
        bottom: 0;
        margin: 0;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Honey Moon Accommodation&trade;</h1>
    </div>
    <div class="container">
      <br><br>
      <div class="row">
        <button class="btn btn-success btn-lg" onclick="document.location.href='login.php'" type="button" name="button">Administrator</button>
        <button class="btn btn-info btn-lg" onclick="document.location.href='register.php'" type="button" name="button">I'm a student</button>
      </div>
      <div class="row">
        <div class="pager">
          <p>welcome to our student accommodation! <br>Please select an option above.</p>
        </div>
      </div>
    </div>
    <div class="footer">
      <pre>Honey Moon Accommodation&trade; ; 2020</pre>
    </div>
  </body>
</html>
