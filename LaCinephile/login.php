<?php 
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);
        
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] == $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        $my_message = "Wrong username or password!";
    }else
    {
        $my_message = "Wrong username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title></title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap"');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow: hidden;
}

#text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}

#password{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}

#button{
    padding: 10px;
    width: 100px;
    color: #EEEEEE;
    background-color: #00ADB5;
    border: none;
}

a{
    background: none;
    border: none;
    text-decoration: none;
    color: white;
    font-family: cormorant garamond;
}

#box{
    background-color: #393E46;
    margin: auto;
    width: 300px;
    padding: 20px;
    border-radius: 3%;
    margin-top: 155px;
}

label {
    margin-left: 20px;
    margin-top: -20px;
    display: block;
    color: white;
}

input[type="password"] {
    width: calc(100% - 22px);
    padding: 8px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

input[type="checkbox"] {
    margin-top: 10px;
    margin-right: 5px;
}

input[type="password"] {
    display: block;
}

input[type="password"].hide-password {
    display: none;
}

nav img {
    height: 70px;
    cursor: pointer;
}
nav {
    width: 100%;
    display: flex;
    background-color: #EEEEEE;
    padding: .1rem;
    position: fixed;
    top: 0%;
    z-index: 100;
}
main {
    width: 100vw;
    height: 100vh;
    background-color: #222831;
    z-index: -1;
}
.cont-right{
    margin-left: 65%;
}
.navpages{
    display: flex;
    margin-top: 1%;
}
.link{
    background: none;
    border: none;
    text-decoration: none;
    color: white;
    font-family: Bebas Neue;
    font-size: 18px;
    cursor: pointer;
    padding: 0;
    margin-left: 8px;
    margin-right: 8px;
    border-radius: 10%;
}
.lns{
    display: flex;
    background: none;
    border: none;
    text-decoration: none;
    cursor: pointer;
    padding: 0;
    border-radius: 10%;
    margin-top: 3%;
    margin-left: 68.5%;
}
.lns h3 {
    margin-top: -3px;
}

.logout{
    margin-left: 60px;
}
.lns button {
    background: none;
    border: none;
    text-decoration: none;
    color: #222831;
    font-family: Bebas Neue;
    font-size: 18px;
    cursor: pointer;
    padding: 0;
    margin-left: 7.5px;
    margin-right: 7.5px;
    border-radius: 10%;
}
.lns button:hover{
    text-decoration: underline;
    color: black;
}
a{
    text-decoration: none;
    color: rgba(0, 173, 181, .75);
}
a:hover{
    color: #00ADB5; 
    text-decoration: underline;
}
.front{
    box-sizing: border-box;
    z-index: 0;
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) .1% , rgba(34, 40, 49, 1) ), url(bg.jpg);
    position: absolute;
    height: 100vh;
    width: 100vw;
    opacity: 70%;
    filter: blur(2px);
}
.footer {
    box-sizing: border-box;
    z-index: 1;
    background: linear-gradient(to bottom, rgba(34, 40, 49, 0), rgba(34, 40, 49, 1));
    position: absolute;
    height: 100vh;
    width: 100vw;
}

</style>

<body>
    <nav data-aos="slide-down" data-aos-duration="1500">
        <div class="Logo" data-aos="slide-right" data-aos-duration="1500">
            <img src="logopics\LogoTP.png" alt="">
        </div>
    </nav>

    <div class="front" data-aos="slide-down" data-aos-duration="1500"></div> 
    
    <main>
        <div class="maincontent">
        
        </div>
        <div class="footer" data-aos="fade-up">
            <div id="box" data-aos="fade-up" data-aos-duration="1500">
                <form method="post">
                <div id="error_message" style="color: #BF3131; <?= empty($my_message) ? 'display:none;' : ''; ?>">
                <?= $my_message; ?>
                </div>

                    <div style="font-family: cormorant garamond; font-size: 20px; margin: 10px; color: white;">Sign In</div>
                    <div style="font-family: cormorant garamond; font-size: 15px; color: white;">Username</div>
                    <input id="text" type="text" name="user_name" required><br><br>

                    <div style="font-family: cormorant garamond; font-size: 15px; color: white;">Password</div>
                    <input id="password" type="password" name="password" required>
                    <input type="checkbox" id="showPassword">
                    <label for="showPassword" style="font-family: cormorant garamond; font-size: 15px;">Show Password</label><br>

                    <input id="button" type="submit" value="Login">
                    <div style="font-family: cormorant garamond; font-size: 10; color: white;">Don't have an account?</div>
                    <a href="signup.php">Sign Up here</a><br><br>

                </form>
            </div>
        </div>    
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
<script src="script.js"></script>

</html>