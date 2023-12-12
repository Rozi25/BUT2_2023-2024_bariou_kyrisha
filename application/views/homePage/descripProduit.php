<div class="listOfProducts">
    
    <?php  foreach($content as $value): ?>
        <div class="eachProduct">
            
            <img src="<?php echo base_url(); ?>images/produit/<?php echo $value['id'] ?>.jpeg" alt="">
            <h2> <?= $value['type']; ?> </h2>
            
        </div>
    <?php endforeach ?>
    
</div>