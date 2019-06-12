<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 4</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 9 - Exercice 4</h1>
                <p class="lead">Afficher le timestamp du jour. Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
              <p><?= 'Timestamp du jour : ' . time(); ?></p>
              <p><?= 'Timestamp du mardi 2 août 2016 à 15h00 : ' . mktime(15, 0, 0, 8, 2, 2016) //(heure, minute, seconde, mois, jour, année) ?></p>
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
