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
                <?php
                    // Tableaux représentant les valeurs des mois et des jours de la semaine
                    $months = array('','Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
                    $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
                    // $dayOfWeek vaudra entre 1 (Lundi) et 7 (Dimanche), on l'utilisera comme index pour $days
                    $dayOfWeek = date("N", mktime(0, 0, 0, $_POST['month'], 1, $_POST['years'])); //(heure, minute, seconde, mois, jour, année)
                    // Mois et année choisi dans le formulaire
                    $monthChosen = $_POST['month'];
                    $yearChosen = $_POST['years'];
                    $day = 0;
                    // Nombre de jour pour le mois et l'année choisi (dans un if afin d'éviter une erreur)
                    if(isset($monthChosen) && isset($yearChosen)) {
                        $numberOfDay = cal_days_in_month(CAL_GREGORIAN, $monthChosen, $yearChosen);
                    }else{
                        $numberOfDay = cal_days_in_month(CAL_GREGORIAN, date('m',time()), date('Y',time()));
                    }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="mb-3">
                    <!-- Label pour les différents mois -->
                    <label for="month"></label>
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-5 col-md-4 col-lg-3">
                            <select name="month" id="month" class="custom-select">
                                <?php
                                // On parcourt le tableau contenant les mois afin de remplir les options
                                foreach($months as $key => $value){ ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- Label pour les années -->
                        <label for="years"></label>
                        <div class="col-sm-5 col-md-4 col-lg-3">
                            <select name="years" id="years" class="custom-select">
                                <?php
                                // On boucle pour créer les <option> avec les différentes années
                                for($year = 1900; $year <= 2019; $year++){
                                ?>
                                    <option value="<?= $year ?>"
                                        <?php if ($year == date('Y')) { ?>
                                                selected
                                        <?php } ?>
                                    >
                                        <?= $year ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <p><button type="submit" class="btn btn-success mt-4">Valider</button></p>
                </form>
                <p>
                    <?php if(isset($monthChosen) && isset($yearChosen)){
                        echo 'Calendrier du mois de ' . $months[$monthChosen+0] . ' ' . $yearChosen;
                        }else{
                            echo 'Calendrier du mois de ' . $months[date('m') - 0] . ' ' . date('Y');
                        }
                    ?>
                </p>
                <table class="table table-bordered">
                    <thead class="thead bg-info">
                        <tr>
                            <?php
                            // Boucle pour afficher tous les jours au haut du tableau
                            foreach($days as $value){ ?>
                            <td class="text-white font-weight-bold"><?= $value ?></td>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $test sert à savoir si on a rencontré le jour de la semaine correspondant au jour 1
                        $test = false;
                        // Boucle pour 6 ligne de calendrier
                        for($j = 1; $j <= 6; $j++){
                            // Si le nombre de jour que l'on a renseigné est inférieur au nombre de jour du mois
                            if($day < $numberOfDay){
                            ?>
                                <tr>
                                <?php
                                // Boucle pour les 7 colonnes du calendrier (de lundi à dimanche)
                                for ($i = 1; $i <= 7; $i++) {
                                    /* Si nous sommes dans la colonne correspondant au premier jour du mois
                                      ou que le test est vrai (que le premier jour a été rencontré)
                                      et que nous n'avons pas dépassé le nombre de jour du mois */
                                    if(($i == $dayOfWeek || $test == true) && $day < $numberOfDay){
                                        // On passe le test à true : on a rencontré le premier jour
                                        $test = true;
                                        // On incrémente $day pour afficher (1, 2, 3, 4, 5, ...)
                                        $day++;
                                        ?>
                                        <!-- Puis on l'affiche -->
                                        <td><?= $day ?></td>
                                <?php
                                    // Sinon nous sommes soit avant le premier jour, soit après le dernier jour du mois
                                    } else {
                                        // Et on affiche une case grisée
                                        ?>
                                        <td class="bg-secondary"></td>
                                        <?php }} ?>
                                </tr>
                        <?php }} ?>
                    </tbody>
                </table>
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
