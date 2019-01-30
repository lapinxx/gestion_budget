
<?php
//code pour préparer les ul li nav :) 
$items = array(
    Html::anchor(Uri::create('appli/smensuel'), 'Accueil'),
    Html::anchor(Uri::create('appli/smensuel'), 'Suivi Mensuel'),
    Html::anchor(Uri::create('appli/smensuel'), 'Suivi Professionel'),
    Html::anchor(Uri::create('appli/smensuel'), 'Statistique'),
    Html::anchor(Uri::create('appli/smensuel'), 'Import'),
    Html::anchor(Uri::create('appli/smensuel'), 'Saisie manuel'),
    Html::anchor(Uri::create('appli/smensuel'), 'Profil'),
    Html::anchor(Uri::create('appli/smensuel'), 'Paramétre')
);
?>

<nav>
    <?php
    echo Html::ul($items); // code pour l'afficher
    ?>
</nav>