<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>6. práce</title>
  </head>
  <body>
    <h1>Příběh o bezdomovcovi co se musel rychle vodky napít, žel dostatek peněz neměl, protože ho skupinka nepřizpůsobivých spoluobčanů okradla.</h1>
    <?php

    $homelessmoney=25;
    $vodkaPrice=119;
    $student=17;
    $interview=40;
    $richboi=100;
    $residents=50;
     ?>
     <p> <?php echo "Bezdomovec momentálně vlastní $homelessmoney,- ";
     $homelessmoney+=$student ?> </p>

    <p>  <?php  echo "Studentka přihodila $student,-. Bezdomovec momentálně vlastní $homelessmoney,-";
     $homelessmoney+=$interview ?> </p>

    <p> <?php echo "Chlap kterýmu dopadl dobře pracovní pohovor přihodil $interview,-. Bezdomovec momentálně vlastní $homelessmoney,-";
     $homelessmoney+=$richboi ?> </p>

    <p> <?php   echo "Podnikatel si odlehčil peněženku o $richboi,-. Bezdomovec momentálně vlastní $homelessmoney,-";
     $homelessmoney-=$residents ?> </p>

    <p> <?php  echo "Zlí lidi ukradly bezdomákovi $residents,-. Bezdomovec momentálně vlastní $homelessmoney,-"; ?> </p>

    <p> <?php echo "Chudák bezdomák má už jenom $homelessmoney,-"; ?></p>

    <?php

    if ($homelessmoney >= $vodkaPrice) {   $homelessmoney-=$vodkaPrice;
      echo "Bezdomovec koupil vodku za $vodkaPrice,-. Po transakci vlastní $homelessmoney,-";


    }else { echo "Chudák bezdomák nemá ani na vodku. Smutný to člověk.";

    }

    ?>



  </body>
</html>
