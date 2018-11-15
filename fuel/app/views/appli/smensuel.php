<?php echo View::forge('header'); ?>
<?php echo View::forge('nav'); ?>
<?php echo "Hello World!"; ?>
<?php echo View::forge('footer'); ?>

                    
                        <div class="col-lg-4 padou">
                            <h3>Frais Fixe</h3>
                            <table class="table table-bordered table-striped table-condensed">
                                <caption>Frais Fixe (Total prévu:10)</caption>

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
                                            <td class="widthLibelle">test</td>
                                            <td class="alignRight">tset</td>                                         
                                            <td class="alignRight">tes</td>                                          
                                            <td class="alignRight">tes</td>

                                        </tr>
                   
                                </tbody>
                                <tfoot> <!-- Pied de tableau -->
                                    <tr>
                                        <th>Total</th>
                                        <th class="alignRight">tes</th>
                                        <th class="alignRight">tse</th>
                                        <th class="alignRight">tes</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>