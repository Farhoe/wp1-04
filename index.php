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
    $student=$homelessmoney+17;
    $interview=$student+40;
    $richboi=$interview+100;
    $residents=$richboi-50;
     ?>

  <p>Bezdomovec vlastní <?php echo $homelessmoney ?> </p>
  <p> Soucítící studentka, čekající na vlak, vkládá do čepice 17 Kč. Bezdomovec nyní má  <?php echo $student; ?> </p>
  <p> Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 Kč. Bezdomovec nyní má <?php echo $interview ?> </p>
  <p>Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč. Bezdomovec nyní má  <?php echo $richboi ?></p>
  <p>Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč. Bezdomovec nyní má <?php echo $residents ?> </p>



  </body>
</html>
