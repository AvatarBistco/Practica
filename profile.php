<?php
session_start();
if (!$_SESSION['user'])
 {
    header('Location: /index.php');
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="/assets/css/profile.css">
</head>
<body>

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

<!-- Background & animion & navbar & title -->
  <div class="container-fluid">
<!-- Background animtion-->
    <div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
<!-- header -->
   <header>
<!-- navbar -->
     <nav>
        <ul>
           <li><a href="#">Главная</a></li>
           <li><a href="about-us.html">О нас</a></li>
            <li><a href="/schedule.php">Расписание занятий</a></li>
          
            <li><a href="/contacts.html">Контакты</a></li>
            <li><a href="/profile.php">Профиль</a></li>
         </ul>
       </nav>
<!-- logo -->
      <div class="logo"><span>N</span></div>



<div class="profile_box">

  <form>
    <div class="form_block">
    <div class="avatar_block">
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" height="200" alt="">
    </div>
    <div class="colum_box">
    <div class="name">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    </div>
    <div class="email">
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    </div>
    <div class="exit">
        <a href="vendor/logout.php" class="logout">Выход</a><br><br><br>
    </div>


</div>
    


        
    </form>


<style>
  h2{
    color: white;
  }

  a{
    text-decoration: none;
    color: white;
  }
.profile_box{
  padding-top: 200px;
  padding-left: 10px;
}

body {
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
    margin: 0 auto  ;
  }
  .container-fluid{
    height: 100%;
    margin: 0;
    padding: 0;
    width: 100%;
    background: #FFF;
  }
  /* ============= Animation background ========= */
  .background {
    background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
    background-size: 400% 400%;
    animation: Gradient 15s ease infinite;
    position: relative;
    height: 110vh ;
    width: 100%;
    overflow: hidden;
    padding:0;
    margin:0px;
    background-repeat: repeat;
  }
  .cube {
    position: absolute;
    top: 80vh;
    left: 45vw;
    width: 10px;
    height: 10px;
    border: solid 1px #D7D4E4;
    transform-origin: top left;
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    animation: cube 12s ease-in forwards infinite;
  }
  .cube:nth-child(2n) {
    border-color: #FFF ;
  }
  .cube:nth-child(2) {
    animation-delay: 2s;
    left: 25vw;
    top: 40vh;
  }
  .cube:nth-child(3) {
    animation-delay: 4s;
    left: 75vw;
    top: 50vh;
  }
  .cube:nth-child(4) {
    animation-delay: 6s;
    left: 90vw;
    top: 10vh;
  }
  .cube:nth-child(5) {
    animation-delay: 8s;
    left: 10vw;
    top: 85vh;
  }
  .cube:nth-child(6) {
    animation-delay: 10s;
    left: 50vw;
    top: 10vh;
  }
  /* ================= Header ============ */
  header{
    position: absolute;
    top:0%;
    left: 0%;
    width:100%;
    margin: 0;
    padding: 0;
  }
  /* navbar */
  nav{
    color: #FFF;
    float: right;
    margin:30px 90px;
  }
  nav ul{
    list-style: none;
  }
  nav ul li {
    float: left;
    transition: .3s;
  }
  nav ul li a{
    text-decoration: none;
    color: #EFEEF5;
    transition: .5;
    font-size: 15px;
    margin-left:16px;
  }
  nav ul li:hover a{
    text-decoration: none;
    color: #591BC5;;
  }
  nav ul li:hover{
    height: 45px;
    padding-top: 30px;
    margin-top: -30px;
   background: #EFEEF5;
    text-decoration: none;
    transform: skew(15deg);
  }
  /* Logo */
  .logo{
    width: 35px;
    height: 35px;
    background: #EFEEF5;
    margin: 40px 63px;
    float: left;
    transform: rotate(-30deg);
  }
  .logo span{
    color: #591BC5;
    font-size: 2em;
    line-height: 1.4;
    padding-left: 5px;
    font-weight: bold;
  }

   /* Animate Background*/
   @keyframes Gradient {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  @keyframes cube {
    from {
      transform: scale(0) rotate(0deg) translate(-50%, -50%);
      opacity: 1;
    }
    to {
      transform: scale(20) rotate(960deg) translate(-50%, -50%);
      opacity: 0;
    }

}

</style>
        

    <!-- Профиль -->

   


   
   

</body>

</html>