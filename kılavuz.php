<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../html/hikaye.html">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/5c2368ed16.js" crossorigin="anonymous"></script>
  <title>QUEEN GAME</title>
  <style>
    html,
    body {
      min-width: 290px;
      color: #ff66de;
      background-color: #00ffc8;
      font-family: 'Open Sans', Arial, sans-serif;
      line-height: 1.5;
    }


    /*Navigation Bar*/

    #navbar {
      position: fixed;
      min-width: 290px;
      top: 0px;
      left: 0px;
      width: 310px;
      height: 100%;
      background-color: #ff66de;
      /*box-shadow: 1px 1px 2px #ff9e00;*/
      padding: 10px;

    }

    .logosal {
      display: flex;
      margin: auto;

      border-bottom: 0.2px #7b2cbf solid;
      align-items: center;
    }

    header {
      color: #000000;
      margin: 10px;
      text-align: center;
      font-size: 1.8em;
      font-weight: thin;
      border-bottom: 1px solid #ff66de;
    }

    #main-doc {
      width: 70%;
    }

    #main-doc header {
      text-align: left;
      margin: 0px;
    }

    #navbar ul {
      height: 88%;
      padding: 5px;
      overflow-y: auto;
      overflow-x: hidden;
    }

    #navbar li {
      color: white;
      text-decoration: none;
      margin-bottom: 18px;
      border-bottom: 0.2px #00ffff solid;
      list-style: none;
      box-shadow: 0px 0px 5px 3px rgba(#ff9e00);
      width: 100%;
    }

    #navbar li:hover {
      color: #000000;

    }

    #navbar a {
      font-size: 1.1rem;
      display: block;
      padding: 10px 30px;
      color: white;
      cursor: pointer;
      text-decoration: none;
      text-align: start;
    }

    #navbar a:hover {
      color: black;
    }

    /* Avatar Login Kısmı */

    .profile-photo {
      display: flex;
      width: 20%;
      margin: auto;
      flex-direction: row;
      align-items: center;
      border-radius: 50%;
    }


    /* Avatar Login Kısmı */

    #main-doc {
      position: absolute;
      margin-left: 340px;
      padding: 20px;
      margin-bottom: 110px;
    }

    section li {
      margin: 15px 0px 0px 20px;
    }




    @media only screen and (max-width: 815px) {
      #navbar ul {
        height: 197px;
      }

      #navbar {
        position: absolute;
        top: 0;
        background-color: black;
        padding: 0;
        right: 0;
        margin: 0;
        width: 100%;
        max-height: 275px;
        z-index: 1;
        border-bottom: 1px solid yellow;
      }

      #main-doc {
        position: relative;
        margin-left: 0;
        margin-top: 285px;
      }
    }

    @media only screen and (max-width:400px) {
      #main-doc {
        margin-left: -10px;
      }
    }


    /* Anasayfa Dashboard */




    .ref-link {
      background: -webkit-linear-gradient(red, yellow);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-decoration: none;
    }

    /*TABLO CSS KISMI*/

    .activity-card,
    .summery-card,
    .bday-card {
      background-color: #ffffff;
      border-radius: 7px;
    }

    .activity-card h3 {
      color: var(--text-gray);
      margin: 1rem;
    }

    .activity-card table {
      width: 100%;
      border-collapse: collapse;
    }

    .activity-card thead {
      background: #efefef;
      text-align: left;
    }

    th,
    td {
      font-size: 0.9rem;
      padding: 1rem 1rem;
      color: var(--color-dark);
    }

    td {
      font-size: 0.8rem;
    }

    tbody tr:nth-child(even) {
      background: #f9fafc;
    }



    .td-team {
      display: flex;
      align-items: center;
    }



    .resim {
      width: 900px;
      height: 500px;


    }

    .resim2 {
      width: 900px;
      height: 500px;
    }
  </style>
</head>

<body>
  <nav id="navbar">
    <div><a href="../html/index.html"><img class="logosal" src="quin-game-logo.png" alt="logo"></a></div>
    <ul>
      <li>
        <a class="nav-link" href="index.php">Oyuncular</a>
      </li>
      <li>
        <a class="nav-link" href="grafik.php">Kahramanların Oyun Sayılarına Etkileri Grafik</a>
      </li>
      <li>
        <a class="nav-link" href="sutun.php">Kahramanların Oyun Sayılarına Etkileri Sütun </a>
      </li>
      <li>
        <a class="nav-link" href="kahramanlar.php">Kahramanlar</a>
      </li>
      <li>
        <a class="nav-link" href="kostum.php">Kostümler</a>
      </li>
      <li>
        <a class="nav-link" href="hikaye.php">Hikaye</a>
      </li>
      <li>
        <a class="nav-link" href="oyuncu_degerlendirmesi.php">Oyuncu Değerlendirmesi</a>
      </li>
      <li>
        <a class="nav-link" href="kılavuz.php">Kılavuz</a>
      </li>
      <div class="cikis">
        <button color="black" id="buton"> <a href="giris.php">Çıkış Yap</a></button>
      </div>
    </ul>
  </nav>
  <main id="main-doc">
    <section id="dashboard" class="main-section">
      <div>
        <header>
          Kılavuz
        </header>


        <h3>QUEEN GAME İÇİN KILAVUZ</h3>

        <ul>
          <li>
            <P>Tank kahramanı oyunun alanın sağ tarafında oynar. </P>
          </li>
          <li>
            <p>Büyücü kahramanı oyun alanın mid tarafında oynar.</p>
          </li>
          <li>
            <p>Nişancı kahramanı oyun alanın sol tarafında oynar.</p>
          </li>
          <li>
            <p>Destek kahramanı oyun alanında nişancı ile birlikte oynar. </p>
          </li>
          <li>
            <p>Savaşçı kahramanı oyun alanında istediği tarafta oynayabilir.</p>
          </li>


        </ul>



        <br><br><br><br>

        <p> *HER CUMA ULUSLARARASI YARIŞ YAPILIR VE KAZANAN TAKIM O HAFTA BELİRTİLEN MİKTARDA ÜCRETİ ALIR*</p>

        <br><br><br>

        <img class="resim" src="neon-composition-headline-crazy-friday-260nw-1384458074.jpeg">
        <img class='resim2' src="a432dfe9e8ee06b05b378e1768a817dcec9a5b63c07c20d4cc5b95f7b1040044_800.jpeg">


</body>

</html>