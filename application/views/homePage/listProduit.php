<div class="listOfProducts">
    
    <?php  foreach($content as $value): ?>
        <div class="eachProduct">
            <a href="">
                <img src="<?php echo base_url(); ?>images/produit/<?php echo $value['id'] ?>.jpeg" alt="">
                <h2> <?= $value['type']; ?> </h2>
            </a>
        </div>
    <?php endforeach ?>
    
</div>
<p>
<?php

foreach ($content as $value){
    echo $value['description'];
}

?>

</p>