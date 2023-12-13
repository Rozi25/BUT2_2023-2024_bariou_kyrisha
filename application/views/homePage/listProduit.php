<div class="listOfProducts">
    
    <?php  foreach($content as $value): ?>
        <div class="eachProduct">
            <p><?= $value['prix_location']; ?> €</p>
            <img src="<?php echo base_url(); ?>images/produit/<?php echo $value['id'] ?>.jpeg" alt="">
            <h2> <?= $value['type']; ?> </h2>
            <a href="<?= site_url("HomePage/descripProduit/".$value['id']); ?>">Voir plus</a>
        </div>
    <?php endforeach ?>
    
</div>
