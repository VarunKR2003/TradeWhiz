<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./commonStyle.css" />
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        a,
        button {
            cursor: pointer;
        }

        #login-card {
            width: 40vw;
            height: 80vh;
        }

        .login-card>h2 {
            margin: 0 0 12px;
            font-size: 36px;
            font-weight: 600;
        }

        .login-card>h3 {
            margin: 0 0 30px;
            font-weight: 500;
            font-size: 16px;
            color: rgba(0, 0, 0, 0.38);
        }

        .login-form {
            width: 100%;
            margin: 0;
            display: grid;
            gap: 16px;
            
        }

        .login-card {
            padding: 70px 30px 44px;
            width: 30%;
            text-align: center;
            border-radius: 28px;
            background-color: rgba(18, 70, 86, 0.5);
           
            
            
           
        }
       

        @media (width >=500px) {
            .login-card {
                margin: 130px;
                width: 400px;
            }
            
                
            
        }

        @keyframes pan {
            100% {
                background-position: 15% 50%;
            }
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            padding: 0 24px;
            background-image: url("Images/concert2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            animation: pan 6s infinite alternate linear;
            font-weight: 400;
        }

        @media (width >=500px) {
            body {
                padding: 0;
            }
        }

        .login-form>a {
            color: #04193b;
        }

        .login-form input,
        .login-form>button {
            width: 100%;
            height: 56px;
            padding: 16px;
            border-radius: 8px;
        }

        .login-form>input {
            border: 2px solid #ebebeb;
        }

        .Login {
            width: 100%;
            height: 56px;
            border: 0;
            background: #04409f;
            color: #f9f9f9;
            font-weight: 600;
        }
    </style>
</head>

<body>
<header>
      <div id="logo">
        <a href="./index.php">
          <img src="./img/TradeWhiz.png" alt="" />
        </a>
      </div>
      <ul class="nav" id="nav">
        <li class="nav-link"><a href="./index.php">Home</a></li>
        <li class="nav-link"><a href="./aboutus.php">About Us</a></li>
        <li class="nav-link"><a href="./Login.php">Login</a></li>
        <li class="sociallinkContainer">
          <img class="sociallink" src="./img/fabook-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/twitter-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="" />
          <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="" />
        </li>
      </ul>
      <div id="barContainer">
        <i id="bar" class="fa-solid fa-bars"></i>
      </div>
    </header>

    
    <div class="login-card" id="login-card">
        <h2>Enter Your Credentials</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input class="Login" type="submit" value="Register">
        </form>
    </div>
   
    <?php
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect("localhost", "root", "", "fullproject");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $userId = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM signup WHERE user_name='$userId'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $storedHashedPassword = $row['password'];

            if (password_verify($password, $storedHashedPassword)) {
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                header("location: index.php");
                exit;
            } else {
                echo "<p>Password is invalid.</p>";
            }
        } else {
            echo "<p>User ID is invalid.</p>";
        }

        mysqli_close($conn);
    }
    ?>


</body>

</html>
