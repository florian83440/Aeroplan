<?php include 'models/infos_personnel.php'; ?>
<div id="account">
    <h1 class="title has-text-centered">Mes informations</h1>
    <div class="columns">
        <!-- Nom -->
        <div class="column is-offset-2 is-4">
            <div class="columns is-multiline">
                <div class="column is-full">
                    <!-- Nom -->
                    <span><b>Nom :</b></span>
                    <span><?php echo $_SESSION['nom']; ?></span>
                </div>
                <div class="column is-full">
                    <!-- Prénom -->
                    <span><b>Prénom :</b></span>
                    <span><?php echo $_SESSION['prenom']; ?></span>
                </div>
                <div class="column is-full">
                    <!-- Telephone -->
                    <span><b>Numéro de telephone :</b></span>
                    <span><?php echo $data_user['TELEPHONE']; ?></span>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <?php if ($data_user_comm){ ?>
            <div class="columns is-multiline">
                <div class="column is-full">
                    <!-- Type de personnel -->
                    <span><b>Type de personnel :</b></span>
                    <span>Commercial</span>
                </div>
                <div class="column is-full">
                    <!-- Langues -->
                    <span><b><?php echo ($nb_langues>1)? 'Langues parlées': 'Langue parlée';?> :</b></span>
                <?php
                $i = 1;
                    foreach($data_user_comm as $row){
                        ?>
                            <span><?php echo $row['LIBELLE']; echo ($i<$nb_langues)? ',': '';?></span>
                        <?php
                        $i++;
                    }
                ?>
                </div>
            </div>
            <?php }else if($data_user_tech){ ?>
            <div class="columns is-multiline">
                <div class="column is-full">
                    <!-- Type de personnel -->
                    <span><b>Type de personnel :</b></span>
                    <span>Technique</span>
                </div>
                <div class="column is-full">
                    <!-- Heures de vol -->
                    <span><b>Nombre d'heures de vol :</b></span>
                    <span><?php echo $data_user_tech['NOMBRE_D_HEURES_DE_VOL']; ?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>