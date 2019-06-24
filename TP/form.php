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
