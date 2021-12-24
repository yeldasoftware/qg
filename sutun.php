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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js" integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
          Sütun
        </header>
      </div>
      <div class="box-1">

        <div class="box-2">
          <div class="activity-card">
            <div>
              <canvas id="myChart"></canvas>
            </div>
            <?php
            $kahramanlar = [];
            $sql = "SELECT kahramanlar.kahraman_ad, oyun.oyun_sayisi
                  FROM kahramanlar
                  INNER JOIN oyun ON oyun.kahramanid=kahramanlar.kahramanid;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                $kahramanlar[$row["kahraman_ad"]] += $row["oyun_sayisi"];
              }
            } else {
              echo "0 results";
            }
            $conn->close();


            ?>


            <script>
              const data = {
                labels: [
                  <?php
                  foreach ($kahramanlar as $ad => $oyun_sayisi) {
                    echo "'" . $ad . "',";
                  }
                  ?>
                ],
                datasets: [{
                  label: 'Kahramanların Oyun Sayısı',
                  data: [
                    <?php
                    foreach ($kahramanlar as $ad => $oyun_sayisi) {
                      echo "'" . $oyun_sayisi . "',";
                    }
                    ?>
                  ],
                  backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                  ],
                  borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                  ],
                  borderWidth: 1
                }]
              };

              const config = {
                type: 'bar',
                data: data,
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                },
              };

              const ctx = document.getElementById('myChart');
              const myChart = new Chart(ctx, config);
            </script>

          </div>
        </div>
      </div>

    </section>

    <footer id="Referans" class="main-section">

    </footer>
  </main>
</body>

</html>