<table class="table table-bordered table-striped table-condensed">
    <caption><?php echo $titre; ?></caption>
    <thead> <!-- En-tête du tableau -->
        <tr>
            <th class="widthLibelle alignCenter"><?php echo $titre; ?></th>
            <th class="alignCenter">Coût Prévu</th>
            <th class="alignCenter">Coût Réel</th>
            <th class="alignCenter">Ecart</th>
        </tr>
    </thead>
    <tbody> <!-- Corps du tableau -->
        <?php $total_prevu = 0; ?>
        <?php $total_realise = 0; ?>
        <?php $total_total = 0; ?>

        <?php foreach ($typesDepense as $typeDepense): ?>
            <tr>
                <td class="widthLibelle"><?php echo $typeDepense->type; ?></td>
                <td class="alignRight"><?php echo $typePrvu = 0; ?></td>                                         
                <td class="alignRight"><?php echo $typeDepense->somme ?></td>                                          
                <td class="alignRight"><?php echo $ecart = ($typeDepense->somme - $typePrvu); ?></td>
                
                <?php $total_prevu = $total_prevu + $typePrvu; ?>
                <?php $total_realise = $total_realise + $typeDepense->somme; ?>
                <?php $total_total = $total_total + $ecart; ?>

            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot> <!-- Pied de tableau -->
        <tr>
            <th>Total</th>
            <th class="alignRight"><?php echo $total_prevu; ?></th>
            <th class="alignRight"><?php echo $total_realise; ?></th>
            <th class="alignRight"><?php echo $total_total; ?></th>
        </tr>
    </tfoot>
</table>