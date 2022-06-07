<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Сулусчаан</title>
</head>
<body>
  <header>

    <div id="logo" onclick="slowScroll('#top')">
      <span class="text">Чуоранчык</span>
    </div>

    <div id="about">
      <a href="#" title="Главная" onclick="slowScroll ('#main')">Наша группа</a>
      <a href="#" onclick="slowScroll ('#mltst')" title="Мультстудия">Мультстудия</a>
      <a href="#" onclick="slowScroll('#roboto')" title="Робототехника">Робототехника</a>
      <a href="intellect_game.php" onclick="" onclick="slowScroll('#intell')" title="Интеллектуальные игры">Интеллектуальные игры</a>
      <a href="for_parents.php" onclick="" onclick="slowScroll('#fam')" title="Для родителей">Для родителей</a>
      <a href="Form.php" onclick="" onclick="slowScroll('#fam')" title="Для родителей">Личный кабинет</a>
    </div>

  </header>

  <div id="top">
    <h1>Сулусчаан</h1>
    <h3>Средняя группа</h3>
  </div>

  <!-- main -->
  <div class="container">
  <div id="main">
      <h2 class="intro">Наша группа</h2>
  </div>


  
  <!--image slider start-->
  <section class="section-g">

    <div class="content-g">
      <div class="slider middle">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked />
          <input type="radio" name="r" id="r2" checked/>
          <input type="radio" name="r" id="r3" checked/>
          <input type="radio" name="r" id="r4" checked/>
          <input type="radio" name="r" id="r5" checked/>

          <div class="slide s1"><img src="img/1.jpeg" alt="" /></div>
          <div class="slide s2"><img src="img/2.jpeg" alt="" /></div>
          <div class="slide s3"><img src="img/3.jpeg" alt="" /></div>
          <div class="slide s4"><img src="img/4.jpeg" alt="" /></div>
          <div class="slide s5"><img src="img/17.jpeg" alt="" /></div>
        </div>
        <div class="navigation">
          <label for="r1" class="bar"></label>
          <label for="r2" class="bar"></label>
          <label for="r3" class="bar"></label>
          <label for="r4" class="bar"></label>
          <label for="r5" class="bar"></label>
        </div>
      </div>
    </div>

  </section>
  <!-- slider end -->
  <!-- main end-->
  
  <!-- multstudio -->
  <div class="mltst" id="mltst">

    <div class="intro">

      <h2>Мультстудия</h2>

    </div>

    <section>

      <video class="contrils" controls="controls" width="640">

        <source src="video/1.mp4" type="video/mp4">
        <source src="video/1 (video-converter.com).webm" type="video/webm">
        <source src="video/1 (video-converter.com).mp4" type="video/mp4">

      </video>

    </section>

  </div>

  <!-- multstudio end -->

  <!-- Robototehnika -->
  <div class="" id="roboto">
      <h2 class="intro">Робототехника</h2>
  </div>
  <!--image slider start-->
  <section class="section-h">

    <div class="content-h">
      <div class="sliderr middl">
        <div class="slidess">
          <input type="radio" name="rr" id="rr1" checked />
          <input type="radio" name="rr" id="rr2" checked/>
          <input type="radio" name="rr" id="rr3" checked/>
          <input type="radio" name="rr" id="rr4" checked />
          <input type="radio" name="rr" id="rr5" checked/>
          <input type="radio" name="rr" id="rr6" checked/>

          <div class="slidee ss1"><img src="img/16.jpeg" alt="" /></div>
          <div class="slidee ss2"><img src="img/7.jpeg" alt="" /></div>
          <div class="slidee ss3"><img src="img/8.jpeg" alt="" /></div>
          <div class="slidee ss4"><img src="img/9.jpeg" alt="" /></div>
          <div class="slidee ss5"><img src="img/13.jpeg" alt="" /></div>
          <div class="slidee ss6"><img src="img/15.jpeg" alt="" /></div>
          
        </div>
        <div class="navigationn">
          <label for="rr1" class="barr"></label>
          <label for="rr2" class="barr"></label>
          <label for="rr3" class="barr"></label>
          <label for="rr4" class="barr"></label>
          <label for="rr5" class="barr"></label>
          <label for="rr6" class="barr"></label>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- slider end -->
  
  
  <!-- Robototehnika end-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
       $("header").removeClass("fixed");
      else
       $("header").attr("class","fixed");
    });
  </script>
</body>
<div class="footer">
    <div class="container">
        <p class="text_left">© Чуораанчык средняя группа Сулусчаан</p>
        <p class="text_right">Михайлова Юлия 2022</p>
    </div>
</html>