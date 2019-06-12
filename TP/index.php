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
      <div class="container-fluid">
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
              <form>
                  <select>
                      <option>Janvier</option>
                      <option>Février</option>
                      <option>Mars</option>
                      <option>Avril</option>
                      <option>Mai</option>
                      <option>Juin</option>
                      <option>Juillet</option>
                      <option>Août</option>
                      <option>Septembre</option>
                      <option>Octobre</option>
                      <option>Novembre</option>
                      <option>Décembre</option>
                  </select>
                  <?php
                    // Variable qui ajoutera l'attribut selected de la liste déroulante
                    $selected = '';

                    // Parcours du tableau
                    echo '<select name="annees">',"\n";
                    for($i=1900; $i<=2019; $i++)
                    {
                      // L'année est-elle l'année courante ?
                      if($i == date('Y'))
                      {
                        $selected = ' selected="selected"';
                      }
                      // Affichage de la ligne
                      echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
                      // Remise à zéro de $selected
                      $selected='';
                    }
                    echo '</select>',"\n";
                  ?>
              </form>
              <table class="table text-center">
                <caption>Septembre 2019</caption>
                <thead class="thead-dark">
                  <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>j1</td>
                    <td>j2</td>
                    <td>j3</td>
                    <td>j4</td>
                    <td>j5</td>
                    <td>j6</td>
                    <td>j7</td>
                  </tr>
                  <tr>
                    <td>j8</td>
                    <td>j9</td>
                    <td>j10</td>
                    <td>j11</td>
                    <td>j12</td>
                    <td>j13</td>
                    <td>j14</td>
                  </tr>
                  <tr>
                    <td>j15</td>
                    <td>j16</td>
                    <td>j17</td>
                    <td>j18</td>
                    <td>j19</td>
                    <td>j20</td>
                    <td>j21</td>
                  </tr>
                  <tr>
                    <td>j22</td>
                    <td>j23</td>
                    <td>j24</td>
                    <td>j25</td>
                    <td>j26</td>
                    <td>j27</td>
                    <td>j28</td>
                  </tr>
                  <tr>
                    <td>j29</td>
                    <td>j30</td>
                    <td>j31</td>
                    <td>j32</td>
                    <td>j33</td>
                    <td>j34</td>
                    <td>j35</td>
                  </tr>
                  <tr>
                    <td>j36</td>
                    <td>j37</td>
                    <td>j38</td>
                    <td>j39</td>
                    <td>j40</td>
                    <td>j41</td>
                    <td>j42</td>
                  </tr>
                </tbody>
              </table>
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
