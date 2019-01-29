<?php echo View::forge('header'); ?>
<?php echo View::forge('nav'); ?>

<p>Selection du mois en cour:           </p>

<?php echo Form::open(array('action' => Uri::current(), 'method' => 'GET', 'id' => 'mon_formulaire')); ?> 
<?php echo Form::select('mois', (isset($mont) ? $mont: date('m')), Core::getMonths(), array('class' => 'form-control btn btn-default dropdown-toggle', 'id' => 'mois')); ?>

Selection de l'année d'analyse:  
<?php echo Form::select('annee', (isset($annee) ? $annee : date('Y')), Core::getYears(), array('class' => 'form-control', 'id' => 'annee')); ?>
<?php echo Form::close(); ?>


</br>

Interprétation du get: 
<?php // echo $this->month; ?>
</br></br>
mois en cour: <?php echo $mont; ?> </br>
années en cour:<?php echo date("y"); ?>
</br>
</br>


Frais Fixe (Total prévu:<?php echo "calcul fraix fixe"; ?> Total réalisé:<?php echo "total réalisé"; ?> Ecart Total:<?php echo "ecart"; ?> )</p>

<div class="col-lg-4 ">
    <h3>Frais Fixe</h3> 
    <?php foreach ($tableauxFraisFixe as $view): ?>
        <?php echo $view; ?>
    <?php endforeach; ?>
</div>

<div class="col-lg-4">
    <h3>Frais Variable</h3>
    <?php foreach ($tableauxFraisVariable as $view): ?>
        <?php echo $view; ?>
    <?php endforeach; ?>

</div>
<div class="col-lg-4">
    <h3>Revenue</h3>
    <?php foreach ($tableauxRevenue as $view): ?>
        <?php echo $view; ?>
    <?php endforeach; ?>

</div>
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-6">
            <p>Analyse Maison: <br />
                Reste sur le compte : <br />
                Pas encore Tirée :<br />
                Reste à depensé :<br />
                Objectif à mettre de coté :<br />
                Imprévus: <br />
                Essence: <br />
            </p>

        </div>
        <div class="col-lg-6">
            <p>Analyse Professionel:<br />
                Gain:<br />
                Frais Reel:<br />
                Note de frais :</p>

        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        $('#mois, #annee').change(function () {
            $('#mon_formulaire').submit();
        })
    });

</script>

<?php echo View::forge('footer'); ?>