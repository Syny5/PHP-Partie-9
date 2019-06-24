<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>TP Partie 9</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid text-center">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 9 - TP</h1>
                <p class="lead">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                En fonction des choix, afficher un calendrier.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
              <div class="justify-content-center">
                <?php include 'init.php' // On inclut l'initialisation des valeurs (array, variables...) ?>
                <?php include 'form.php'; // On inclut le formulaire (sélection mois + année) ?>
                <p>
                    <?php if(isset($monthChosen) && isset($yearChosen)){
                        echo 'Calendrier du mois de ' . $months[$monthChosen+0] . ' ' . $yearChosen;
                        }else{
                            echo 'Calendrier du mois de ' . $months[date('m') - 0] . ' ' . date('Y');
                        }
                    ?>
                </p>
                <?php include 'calendar.php'; // On inclut le calendrier ?>
              </div>
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
