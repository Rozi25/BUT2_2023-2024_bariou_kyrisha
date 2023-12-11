<div class="listOfProducts">
    
    <?php  foreach($marque as $key => $value): ?>
        <div class="eachProduct">
            <a href="">
                <img src="<?php echo base_url(); ?>images/marque/<?php echo $value['marque'] ?>.png" alt="">
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