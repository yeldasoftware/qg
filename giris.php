<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="signin.css">
  <title>Document</title>
  <style>
    :root {
      --color-white: #f3f3f3;
      --color-gradient: linear-gradient(#008000, #38b000);
      --color-gradient-dark: rgba(0, 0, 0, 0.25);
      --color-button: linear-gradient(315deg, hsla(168, 89%, 51%, 1) 1%, hsla(231, 100%, 50%, 1) 100%);
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      font-family: 'Times New Roman', Times, serif;
      font-size: 1.18rem;
      font-weight: 400;
      line-height: 1.2;
      color: var(--color-white);
      margin: 0;
    }

    /*Mobil dostu olması için background-attachment: fixed; kullan.*/

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background: linear-gradient(90deg, hsla(344, 97%, 63%, 1) 0%, hsla(298, 90%, 59%, 1) 100%);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    h1 {
      font-weight: 400;
      line-height: 1.2;
    }

    p {
      font-size: 1.125rem;
    }

    h1,
    p {
      margin-top: 0;
      margin-bottom: 0.5rem;
    }

    a {
      color: white;
      font-style: italic;
    }

    label {
      display: flex;
      align-items: center;
      margin-bottom: 0.5rem;
    }

    input,
    button,
    select,
    textarea {
      margin: 0;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
    }

    button {
      border: none;

    }

    #container {
      width: 100%;
      margin: 3.125rem auto 2rem auto;
    }

    @media (min-width:576px) {
      #container {
        max-width: 540px;
      }
    }

    header {
      padding: 0 0.625rem;
    }

    #description {
      font-style: italic;
      font-weight: 200;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    }

    #title {
      text-align: center;
    }

    /* Form Kısmı */

    form {
      background: var(--color-gradient-dark);
      padding: 2.5rem 0.625rem;
      border-radius: 1rem;
      backdrop-filter: blur(20px);
      margin-top: 20px;
    }

    @media (min-width: 480px) {
      form {
        padding: 2.5rem;
      }
    }

    #form-group {
      margin: 0 auto 0.625rem auto;
      padding: 0.25rem;
    }

    .form-control {
      display: block;
      width: 100%;
      height: 2.375rem;
      padding: 0.375rem 0.75rem;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: none;
      border-radius: 0.4rem;
    }


    .submit-button {
      display: block;
      position: static;
      background: var(--color-button);
      color: #fff;
      padding: 0.75rem;
      border-radius: 0.75rem;
      margin: auto;
      width: 150px;
      height: 50px;
      cursor: pointer;
      transition: border, border-radius 1s;
    }

    .submit-button:hover {
      border-radius: 0;
      background: linear-gradient(0deg, hsla(168, 89%, 51%, 1) 1%, hsla(231, 100%, 50%, 1) 100%);


    }

    .logo_foto {
      display: block;
      width: 300px;
      height: 100%;
      margin: auto;
      border-radius: 0.75rem;
    }

    .oturum_ac {
      align-items: center;
    }

    .oturum_ac_text {
      margin-left: 120px;
      font-size: 50px;
    }

    .kayit_ol {
      align-items: center;
    }

    .kayit_ol_text {
      margin-left: 145px;
    }
  </style>

</head>

<body>



  <div id="container">
    <header>
    </header>
    <div class="logo">
      <img class="logo_foto" src="quin-game-logo.png">

    </div>


    <div>
      <form id="survey-form">
        <div class="oturum_ac">
          <p class="oturum_ac_text">Oturum Aç</p>
        </div>
        <div id="form-group">
          <label id="name-label" for="name">Yönetici Id: </label>
          <input class="form-control" type="text" name="name" id="name" required placeholder="Kullanıcı Id'nizi Giriniz">
        </div>
        <div id="form-group">
          <label id="email-label" for="email">Şifre: </label>
          <input class="form-control" type="password" name="password" id="password" required placeholder="Şifrenizi Giriniz">
        </div>

        <div id="form-group">
          <button type="button" id="submit" onclick="location='index.php'" class="submit-button">
            Oturum Aç
        </div>

      </form>


      <form id="survey-form">
        <div class="oturum_ac">
          <p class="oturum_ac_text">Oturum Aç</p>
        </div>
        <div id="form-group">
          <label id="name-label" for="name">Kullanıcı Id: </label>
          <input class="form-control" type="text" name="name" id="name" required placeholder="Kullanıcı Id'nizi Giriniz">
        </div>
        <div id="form-group">
          <label id="email-label" for="email">Şifre: </label>
          <input class="form-control" type="password" name="password" id="password" required placeholder="Şifrenizi Giriniz">
        </div>

        <div id="form-group">
          <button type="button" id="submit" onclick="location='index.php'" class="submit-button">
            Oturum Aç
        </div>

      </form>
    </div>
  </div>
</body>

</html>