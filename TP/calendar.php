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
