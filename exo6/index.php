<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 6</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 9 - Exercice 6</h1>
                <p class="lead">Afficher le nombre de jour dans le mois de février de l'année 2016.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <p>
                <?php
                    // On initialise la valeur des dates
                    $date1 = '01-02-2016';
                    $date2 = '01-03-2016';
                    // On transforme les 2 dates en timestamp
                    $date3 = strtotime($date1);
                    $date4 = strtotime($date2);                
                    // On récupère la différence de timestamp entre les 2 précédents
                    $nbJoursTimestamp = $date4 - $date3;
                    // ** Pour convertir le timestamp (exprimé en secondes) en jours **
                    // On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
                    $nbJours = $nbJoursTimestamp/86400; // 86 400 = 60*60*24
                    echo 'Le mois de février 2016 comportait ' . $nbJours . ' jours.';
                ?>
            </p>
            <p>
                <?php    // Autre méthode avec la fonction cal_days_in_months qui retourne le nombre de jour d'un mois d'une année spécifiée
                $d=cal_days_in_month(CAL_GREGORIAN,02,2016);
                echo 'Il y avait ' . $d . ' jours dans le mois de février 2016.';
                ?>
            </p>
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
