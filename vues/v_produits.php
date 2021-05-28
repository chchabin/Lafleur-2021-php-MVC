<div class="produits">
    <section class="products">
<?php
	
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
	?>
    <div class="product-card">
        <div class="product-info">
            <h5><?php echo $description ?></h5>
        </div>
        <div class="product-image">
            <img src="<?php echo $image ?>" alt="<?php echo $image ?>" />
        </div>
        <div class="product-info">
            <h6>prix : <?php echo $prix ?> Euros
                <a href=index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier>
                    <img src="images/mettrepanier.png" TITLE="Ajouter au panier"/> </a></h6>
        </div>
    </div>
<?php
}
?>
    </section>
</div>
