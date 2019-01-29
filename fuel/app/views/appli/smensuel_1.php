<?php echo View::forge('header'); ?>
<?php echo View::forge('nav'); ?>
<?php echo "Hello World!"; ?>
<?php echo View::forge('footer'); ?>
<?php //echo Model_Test::query()->where('id', 1)->get_one();   ?> 
<?php // echo Model_compta::find(1);   ?>
<?php //echo Model_compta::query()->where('id_type_de_depense', 1);   ?>
<?php //echo $compta->date_retrait ;   ?>
<?php //echo Model_Compta::find(1)->date_retrait ;   ?>
<?php //echo $toto  ;   ?>
<p> ceci est un test:
    </br>date de retrait = <?php echo $date_retrait; ?>
    </br>libelle = <?php echo $libelle; ?>
    </br>numero_opration = <?php echo $numero_opration; ?>
    </br>
    <?php
//    foreach ($tableaux2 as $a) {
//
//     //  echo $a["type"]."-".$a["somme"]."</br>";
//    }
//    var_dump($tableau_habilitation)."</br>"."</br>";
    var_dump($tableau2);
    $i = 1;
    ?>
</p>
<div class="col-lg-4 ">
    <h3>Frais Fixe</h3>
    <table class="table table-bordered table-striped table-condensed">
        <caption>Frais Fixe (Total prévu:<?php echo "calcul fraix fixe"; ?> Total réalisé:<?php echo "total réalisé"; ?> Ecart Total:<?php echo "ecart"; ?> )</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Habitation</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->
            <?php foreach ($tableau2 as $a): ?>
                <tr>
                    <td class="widthLibelle"><?php echo $a->type; ?></td>
                    <td class="alignRight"><?php echo $a->somme; ?></td>                                         
                    <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                    <td class="alignRight"><?php echo 'ecart'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Assurance</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Assurance</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>

        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Impôt</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>
    </table>
</div>
<div class="col-lg-4">
    <h3>Frais Variable</h3>
    <table class="table table-bordered table-striped table-condensed">
        <caption>Divertissement</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Divertissement</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>                           
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>     
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Soin</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Soin</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Animaux</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Animaux</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Alimentation</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Alimentation</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Transport</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Transport</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   


            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>
    <table class="table table-bordered table-striped table-condensed">
        <caption>Habitation</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Habitation</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   


            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>
</div>
<div class="col-lg-4">
    <h3>Revenue</h3>
    <table class="table table-bordered table-striped table-condensed">
        <caption>Revenue</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Salaire</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Remise</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Remise</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed">
        <caption>Suivit Epargne</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Epargne</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

    <table class="table table-bordered table-striped table-condensed active">
        <caption>Deplacement professionel</caption>

        <thead> <!-- En-tête du tableau -->
            <tr>
                <th class="widthLibelle alignCenter">Deplacement</th>
                <th class="alignCenter">Coût Prévu</th>
                <th class="alignCenter">Coût Réel</th>
                <th class="alignCenter">Ecart</th>
            </tr>
        </thead>
        <tbody> <!-- Corps du tableau -->   

            <tr>
                <td class="widthLibelle"><?php echo "type"; ?></td>
                <td class="alignRight"><?php echo 'depense_prevu'; ?></td>                                         
                <td class="alignRight"><?php echo 'debit_reel'; ?></td>                                          
                <td class="alignRight"><?php echo 'ecart'; ?></td>

            </tr>

        </tbody>
        <tfoot> <!-- Pied de tableau -->
            <tr>
                <th>Total</th>
                <th class="alignRight"><?php echo "total_prevu"; ?></th>
                <th class="alignRight"><?php echo "total_realise"; ?></th>
                <th class="alignRight"><?php echo "total_total"; ?></th>
            </tr>
        </tfoot>        
    </table>

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
