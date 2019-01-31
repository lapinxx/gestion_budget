
<nav>
    <?php
    echo Html::ul([
        Html::anchor(Uri::create('appli/dashboard'), 'Accueil'),
        Html::anchor(Uri::create('appli/smensuel'), 'Suivi Mensuel'),
        Html::anchor(Uri::create('appli/sprofessionnel'), 'Suivi Professionel'),
        Html::anchor(Uri::create('appli/statistique'), 'Statistique'),
        Html::anchor(Uri::create('appli/import'), 'Import'),
        Html::anchor(Uri::create('appli/saisi'), 'Saisie manuel'),
        Html::anchor(Uri::create('appli/profil'), 'Profil'),
        Html::anchor(Uri::create('appli/parametre'), 'Paramétre'),
    ]); // code pour l'afficher
    ?>
</nav>