<div class="commande">
    <form method="POST" action="index.php?uc=gererPanier&action=confirmerCommande">
        <div class="flexform">
        <fieldset>
            <legend>Commande</legend>
            <p>
                <label for="nom">Nom Prénom*</label>
                <input id="nom" type="text" name="nom" value="<?php echo $nom ?>" required>
            </p>
            <p>
                <label for="rue">rue*</label>
                <input id="rue" type="text" name="rue" value="<?php echo $rue ?>" required>
            </p>
            <p>
                <label for="cp">code postal* </label>
                <input id="cp" type="text" name="cp" value="<?php echo $cp ?>" required>
            </p>
            <p>
                <label for="ville">ville* </label>
                <input id="ville" type="text" name="ville" value="<?php echo $ville ?>" required>
            </p>
            <p>
                <label for="mail">email* </label>
                <input id="mail" type="email" name="mail" value="<?php echo $mail ?>" required>
            </p>
            <p>
                <input type="submit" value="Valider" name="valider">
                <input type="reset" value="Annuler" name="annuler">
            </p>
        </fieldset>

        <fieldset>
            <legend>Détail de la facture</legend>
            <p>Détail de la facture :</p>
        </fieldset>
        </div>
    </form>
</div>





