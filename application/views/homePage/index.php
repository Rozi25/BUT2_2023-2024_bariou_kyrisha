<div class = "bannerHomePage">
    <h2>Découvrez nos nouveaux équipements pour vous détendre </h2>
    <a href="">Voir les équipements</a>
</div>
<div class="marqueHeader">
    <ul>
        <?php  foreach($marque as $key => $value): ?>
            <li> <a href=""><?php echo $value['marque'] ?>
                <img src="<?php echo base_url(); ?>images/marque/<?php echo $value['marque'] ?>.png" alt="">
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
