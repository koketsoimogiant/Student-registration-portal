<?php
include("db_config.php");

// If alread logged in just head straight for home.php
if(isset($_SESSION['login_userh'])){
    header("location: home.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from the form
    $myusername = $_POST['username'];
    $mypassword = md5($_POST['password']);

    try {
        $users = $conn->query("SELECT * FROM user WHERE username='$myusername' AND password='$mypassword' ORDER BY id");
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    }

    if ($users->rowCount() <= 0) {
        // echo ": ".$creds->rowCount();      // for testing
        # error out because user entered invalid credentials
        echo "<b style='color: white; position: absolute;'>Nothing to see here, move along!</b>";
    } else {
        try {
            while ($user = $users->fetch(PDO::FETCH_ASSOC)) {
                //start session
                session_start();

                //Set the following details
                $_SESSION['mynames'] = $user["firstname"]." ".$user["middlename"];
                $_SESSION['mysurname'] = $user["surname"];
                $_SESSION['login_userh'] = $user["username"];

                //Go to profile page if all is well
                header("location: home.php");
                die();
            }
        } catch (Exception $e) {
            header("location: login.php?err1fail");
            // echo 'Error: '.$e->error_log();
        }
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->

    <title>Honey Moon Accommodation | Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" href="imgs/favicon.png">


        <style type = "text/css">
            body {
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
                overflow: hidden;
                background-image: url("students.jpg");
                background-attachment: fixed;
                background-size: 100%;
            }

            label {
                font-weight:bold;
                width:150px;
                font-size:14px;
            }

            .dabox {
                border: 0;
                border-bottom: 2px solid white;
                width: 100%;
                background-color: transparent;
                color: black;
                margin-bottom: 3px;
            }

            #loger {
                border-radius: 5px;
            }

            #loger:hover{
                box-shadow: 0 0 10px 10px lightgray;
                size: 3em;
            }

            #btn {
                background: linear-gradient(#252525,#242424,#252525);
                padding: 3px 15px;
                margin-top: 3px;
                color: whitesmoke;
                border: 0;
                border-radius: 4px;
            }
            #btn:hover {
                background: #fff;
                color: black;
            }

            .table {
                margin-left: auto;
                margin-right: auto;
                border: 2px groove black;
            }
        </style>
</head>
<body>
<table cellpadding="20" style="height: 100%; width: 100%;">
    <tbody>
        <tr>
            <td width="100%" height="100%">
                <div align = "center">
                    <div id="loger" style = "-webkit-transition: ease-in 1s; -moz-transition: ease-in 1s; transition: ease-in 1s; background: radial-gradient(lightgray,whitesmoke 65%,lightgray); color:#353535; width:300px; border: solid 1px #FFF; " align = "left">
                        <div style="color: whitesmoke; background-color: #353535; text-align: center; padding:3px; border-top-left-radius: 5px; border-top-right-radius: 5px;"><b>Login</b></div>

                        <div style="margin:30px">

                            <form method = "POST">
                                Username: <input id="txtbx" type="text" name="username" class="dabox" required>
                                Password: <input type="password" name="password" class="dabox" required>
                                <input id="btn" type="submit" name="submit" value="Login"/>
                                <input id="btn" type="button" onclick="document.location.href='index.php'" value="Home"/><br/>
                            </form>
                            <?php
                                if (isset($_GET['err1fail'])) {
                                    echo '<p style="color: red;">Oops, incorrect credentials, please try again carefully</p>'; //, <a href="forgetpassword.php">Help me out</a>
                                }
                                if (isset($_GET['set'])) {
                                    echo '<p style="color: green;">New user has been registered... you can now login</p>';
                                }
                                if (isset($_GET['notlogged'])) {
                                    echo '<p style="color: darkgrey;">You are not logged on, please login.</p>';
                                }
                            ?>
                        </div>

                    </div>

                </div>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>