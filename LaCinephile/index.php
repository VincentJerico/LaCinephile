<?php
session_start();
    $_SESSION;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
      overflow-x: hidden;
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
      height: 150vh;
      background-color: #222831;
      z-index: -1;
      max-height: 150vh;
  }
  .cont-right{
    margin-left: 72.7%;
    margin-top: 1%;
  }
  .navpages{
      display: flex;
      margin-top: 1%;
  }

@media only screen and (max-width: 100%) {
  .cont-right {
    margin-left: auto;
    display: flex;
    justify-content: flex-end;
  }

  .navpages {
    flex-direction: column;
    align-items: center;
  }

  .lns {
    margin-left: auto;
  }
}

@media only screen and (max-width: 100%) {
  .cont-right {
    display: none;
  }

  .nav img {
    margin-left: auto;
    margin-right: auto;
  }
}
  .link{
      background: none;
      border: none;
      text-decoration: none;
      color: white;
      font-family: Bebas Neue;
      font-size: 21px;
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
  }
  .logout{
      margin-left: 8px;
  }
  .lns button {
      background: none;
      border: none;
      text-decoration: none;
      color: #222831;
      font-family: Bebas Neue;
      font-size: 21px;
      cursor: pointer;
      padding: 0;
      margin-left: auto;
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
      display: flex;
      justify-content: center;
      align-items: center;
  }
  .slider{
    width: 800px;
    height: 500px;
    border-radius: 10px;
    overflow: hidden;
    margin-top: -100px;
  }

  .slides{
    width: 500%;
    height: 500px;
    display: flex;
    transition: transform 1.5s;
  }

  .slides input{
    display: none;
  }

  .slide{
    width: 20%;
    transition: 1.5s;
    overflow: hidden;

  }

  .slide img{
    width: auto;
    height: 500px;
    padding-left: 233px;
    border-radius: 10px;
  }

  /*css for manual slide navigation*/

  .navigation-manual{
    position: absolute;
    width: 800px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
  }

  .manual-btn{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }

  .manual-btn:not(:last-child){
    margin-right: 40px;
  }

  .manual-btn:hover{
    background: #40D3DC;
  }

  #radio1:checked ~ .first{
    margin-left: 0;
  }

  #radio2:checked ~ .first{
    margin-left: -20%;
  }

  #radio3:checked ~ .first{
    margin-left: -40%;
  }

  #radio4:checked ~ .first{
    margin-left: -60%;
  }

  /*css for automatic navigation*/

  .navigation-auto{
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;
  }

  .navigation-auto div{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
  }

  .navigation-auto div:not(:last-child){
    margin-right: 40px;
  }

  #radio1:checked ~ .navigation-auto .auto-btn1{
    background: #40D3DC;
  }

  #radio2:checked ~ .navigation-auto .auto-btn2{
    background: #40D3DC;
  }

  #radio3:checked ~ .navigation-auto .auto-btn3{
    background: #40D3DC;
  }

  #radio4:checked ~ .navigation-auto .auto-btn4{
    background: #40D3DC;
  }

  .main-footer{
    display: flex;
    z-index: 5;
    background-color: whitesmoke;
    height: 50vh;
    width: 100vw;
    margin-top: 100%;
  }
</style>

<body>
    <nav data-aos="slide-down" data-aos-duration="1500">
        <div class="Logo" data-aos="slide-right" data-aos-duration="1500">
            <a href="index.php"><img src="logopics\LogoTP.png" alt=""></a>
        </div>
        <div class="cont-right" data-aos="slide-left" data-aos-duration="1500">
          <div class="navpages">
            <div class="home">
              <button class="link" > <a href="index.php">Home</a></button>
            </div>
            <div class="sched">
              <button class="link" > <a href="sched.php">Schedules</a></button>
            </div>
            <div class="soon">
              <button class="link"><a href="soon.php">Coming Soon</a></button>
            </div>
            <div class="contact">
              <button class="link"><a href="contact.php">Contact</a></button>
            </div>
            <div class="lns">
              <div class="logout">
                <a href="./logout.php"><button class="#">Logout</button></a>
              </div>
            </div>
          </div>
        </div>
    </nav>
    <div class="front" data-aos="slide-down" data-aos-duration="1500"></div> 
    <main>
        <div class="maincontent">

        </div>
        <div class="footer" data-aos="fade-up">
            <!--image slider start-->
            <div data-aos="fade-up" data-aos-duration="2000" class="slider">
              <div class="slides">
                  <!--radio buttons start-->
                  <input type="radio" name="radio-btn" id="radio1">
                  <input type="radio" name="radio-btn" id="radio2">
                  <input type="radio" name="radio-btn" id="radio3">
                  <input type="radio" name="radio-btn" id="radio4">
                  <!--radio buttons end-->
                  <!--slide images start-->
                  <div class="slide first">
                      <img src="./showing/1.jfif" alt="">
                  </div>
                  <div class="slide">
                      <img src="./showing/2.jfif" alt="">
                  </div>
                  <div class="slide">
                      <img src="./showing/3.jpg" alt="">
                  </div>
                  <div class="slide">
                      <img src="./showing/4.jfif" alt="">
                  </div>
                  <!--slide images end-->
                  <!--automatic navigation start-->
                  <div class="navigation-auto">
                  <div class="auto-btn1"></div>
                  <div class="auto-btn2"></div>
                  <div class="auto-btn3"></div>
                  <div class="auto-btn4"></div>
                  </div>
                  <!--automatic navigation end-->
              </div>
              <!--manual navigation start-->
              <div class="navigation-manual">
                  <label for="radio1" class="manual-btn"></label>
                  <label for="radio2" class="manual-btn"></label>
                  <label for="radio3" class="manual-btn"></label>
                  <label for="radio4" class="manual-btn"></label>
              </div>
              <!--manual navigation end-->
            </div>
            <!--image slider end-->
        </div>
        <div class="main-footer">

        </div>
    </main>
    
    
    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 4000);
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>
