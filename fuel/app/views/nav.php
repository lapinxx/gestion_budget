
<nav>
    <?php
    echo Html::ul([
        Html::anchor(Uri::create('appli/smensuel'), 'Accueil'),
        Html::anchor(Uri::create('appli/smensuel'), 'Suivi Mensuel'),
        Html::anchor(Uri::create('appli/smensuel'), 'Suivi Professionel'),
        Html::anchor(Uri::create('appli/smensuel'), 'Statistique'),
        Html::anchor(Uri::create('appli/smensuel'), 'Import'),
        Html::anchor(Uri::create('appli/smensuel'), 'Saisie manuel'),
        Html::anchor(Uri::create('appli/smensuel'), 'Profil'),
        Html::anchor(Uri::create('appli/smensuel'), 'Paramétre'),
    ]); // code pour l'afficher
    ?>
</nav>