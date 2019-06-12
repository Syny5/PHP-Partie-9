<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 7</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 9 - Exercice 7</h1>
                <p class="lead">Afficher la date du jour + 20 jours.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php 
                $basicTimesTamp = time(); // On crée une variable TimeStamp actuel.
                $timesTampPlusTwenty = strtotime('+20 days', $timestamp); // On crée une variable ayant une valeur de 20 jours.
                $timestampAdded = $timesTampPlusTwenty + $basicTimesTamp // On crée une variable qui prend en compte l'addition des deux timestamp.
            ?>
            <p><?= 'Timestamp du jour : ' . time(); ?></p>
            <p><?= 'Timestamp du jour + 20 jours : ' . $timestampAdded; ?></p>
            <p>
                <?php
                // On définit la variable date à l'aide de la fonction date.
                $date = date('d/m/Y');
                echo 'Date du jour : ' . $date;
                ?>
            </p>
            <p><?= 'Date du jour +20 jours : ' . date('d/m/Y', strtotime($Date. ' + 20 days')); ?></p>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
