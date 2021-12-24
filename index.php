<?php

include("baglan.php");
?>

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
        <a class="nav-link" href="sutun.php">Kahramanların Oyun Sayılarına Etkileri Sütun</a>
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
          Oyuncu Ekle
        </header>

        <form action="/oyuncu_ekle.php" method="post">
          <input id="ad" name="ad" placeholder="ad" />
          <input id="soyad" name="soyad" placeholder="soyad" />
          <input id="id" name="id" placeholder="id" />
          <input id="il" name="il" placeholder="il" />
          <input id="cinsiyet" name="cinsiyet" placeholder="cinsiyet" />
          <button type="submit">Oyuncuyu Ekle</button>
        </form>
        <header>
          Oyuncular
        </header </div>
        <div class="box-1">

          <div class="box-2">
            <div class="activity-card">
              <h3>QUEEN GAME OYUNCULAR</h3>

              <table>
                <thead>
                  <tr>
                    <th>AD SOYAD</th>
                    <th>ID</th>
                    <th>İL</th>
                    <th>CİNSİYET</th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT oyuncular.id, oyuncular.ad, oyuncular.soyad, iller.il_ad, cinsiyet_isim
                                FROM oyuncular
                                INNER JOIN iller ON oyuncular.il_id=iller.il_id 
                                INNER JOIN cinsiyet ON oyuncular.cinsiyet_id=cinsiyet.cinsiyetid
                                 ORDER BY oyuncular.id DESC";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                      echo "<tr>";
                      echo "<td>" . $row["ad"] . " " . $row["soyad"] . "</td>";
                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td>" . $row["il_ad"] . "</td>";
                      echo "<td>" . $row["cinsiyet_isim"] . "</td>";
                      echo `<td class="td-team">
                                                <div class="img-1"></div>
                                                <div class="img-1"></div>
                                                <div class="img-1"></div>
                                                <div class="img-1"></div>
                                                <div class="img-1"></div>
                                              </td>
                                              <td>
                                                  <span class="badge success"></span>
                                              </td>  </tr>`;
                      //        echo "İsim: : " . $row["ad"]. " Soyad: ". $row["soyad"]. " - ID: " . $row["id"]. "Cinsiyet: " . $row["cinsiyet_id"]. " <br>";
                    }
                  } else {
                    echo "0 results";
                  }
                  $conn->close();
                  ?>



                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-team">
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                    </td>
                    <td>
                      <span class="badge warning"></span>
                    </td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-team">
                      <div class="img-1"></div>
                    </td>
                    <td>
                      <span class="badge warning"></span>
                    </td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-team">
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                    </td>
                    <td>
                      <span class="badge success"> </span>
                    </td>
                  </tr>

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="td-team">
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                      <div class="img-1"></div>
                    </td>
                    <td>
                      <span class="badge success"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

    </section>

    <footer id="Referans" class="main-section">

    </footer>
  </main>






</body>

</html>