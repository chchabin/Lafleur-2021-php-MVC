<div class="panier">
    <h1 class="panier-text">Votre panier</h1>
    <hr>
    <form id="panier" method="post" action="index.php?uc=gererPanier&action=passerCommande">
        <div class="gridpanier">
            <ol class="collection collection-container">

                <?php foreach ($lesProduitsDuPanier as $unProduit):
                    $id = $unProduit['id'];
                    $description = $unProduit['description'];
                    $image = $unProduit['image'];
                    $prix = $unProduit['prix'];
                    ?>
                    <li class="item item-container">
                        <div class="attribute bck-white">
                            <img src="<?php echo $image ?>" alt=image/>
                        </div>
                        <div class="attribute-container bck-white">
                            <div class="attribute textformat">
                                <?php echo $description ?>
                            </div>
                            <div class="attribute textformat" id="prix">
                                <input type="hidden" id="p<?= $id ?>" value="<?php echo $prix ?>">
                                <?php echo $prix ?> €
                            </div>

                        </div>
                        <div class="attribute bck-white center">
                            <input type="number" id="<?= $id ?>" name="<?= $id ?>" value="1" min="1" max="10" required>
                        </div>
                        <div class="attribute bck-white center" id="t<?= $id ?>"><?php echo $prix ?> €</div>
                        <div class="attribute bck-white center"><a
                                    href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit"
                                    onclick="return confirm('Voulez-vous vraiment retirer cet article frais?');">
                                <img src="images/retirerpanier.png" title="Retirer du panier"></a></div>
                    </li>
                <?php endforeach; ?>

            </ol>

            <button type="submit"><img src="images/commander.jpg" title="Passer commande" alt="commander.jpg"></button>
            <a href=index.php?uc=gererPanier&action=passerCommande><img src="images/commander.jpg"
                                                                        title="Passer commande" alt="commander.jpg"></a>
        </div>
    </form>
</div>
