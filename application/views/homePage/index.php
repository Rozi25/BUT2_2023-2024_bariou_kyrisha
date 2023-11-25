<div class = "bannerHomePage">
    <h2>Découvrez nos nouveaux équipements pour vous détendre </h2>
    <a href="">Voir les équipements</a>
</div>

<div class="marqueHeader">
    <h2>nos marques</h2>
    <ul>
        <?php  foreach($marque as $key => $value): ?>
            <li> <a href="">
                <img src="<?php echo base_url(); ?>images/marque/<?php echo $value['marque'] ?>.png" alt="">
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<div class = "prixHomePage">
    <h2>Location de matériel </h2>
    <p>3j à 7j : 4% <br />
        7j à 14j : 2% <br />
        14j à 30j : 1%</p>
    <a href="">En voir plus</a>
</div>

<div class = "serviceHomePage">
    <div class = "service">
        <img src="<?php echo base_url(); ?>images/service1.png" alt="">
        <p>Louer pour 30 jours maximum </p>
    </div>
    <div class = "service">
        <img src="<?php echo base_url(); ?>images/service2.png" alt="">
        <p>Paiement en magasin </p>
    </div>
    <div class = "service">
        <img src="<?php echo base_url(); ?>images/service3.png" alt="">
        <p>Retrait et retour en magasin </p>
    </div>
    <div class = "service">
        <img src="<?php echo base_url(); ?>images/service4.png" alt="">
        <p>Aide et contact </p>
    </div>
</div>