<!DOCTYPE html>

<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="" />
    <meta charset="UTF-8">
    <title> Login Kahawa Coffee </title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login-style.css') ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="<?= base_url('assets/img/cover.jpg') ?>" alt="">
        <div class="text">
          <span class="text-1">KAHAWA<br>Coffee & Roastery</span>
          <span class="text-2">versi 1.0</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <?= form_open('auth') ?>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username/email" value="<?= set_value('username') ?>" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" value="<?= set_value('password') ?>" required>
              </div>
              <?= $flash_data ? $flash_data : "" ?>
              <div class="button input-box">
                <input type="submit" value="Submit">
              </div>
              <!-- <div class="text sign-up-text">Belum punya akun? <a href="https://wa.me/6281269877675?text=Mohon%20buatkan%20akun%20untuk%20login%20E-Dokument"> Daftar</a></div> -->
            </div>
        </form>
      </div>
    </div>
    </div>
  </div>
</body>
</html>