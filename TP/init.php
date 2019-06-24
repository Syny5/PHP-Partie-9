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
