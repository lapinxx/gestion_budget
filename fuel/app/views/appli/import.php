<?php echo View::forge('header'); ?>
<?php echo View::forge('nav'); ?>

<div id="wrapper">


    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <fieldset class="wow fadeIn">
                        <legend>Formulaire d'import</legend>
                        <form method="post" action="do/traitement_import.php" enctype="multipart/form-data">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="libelle">Libellé <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="libelle" name="libelle" required="required" />
                                </div>                                    
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="compte">Compte<span class="required">*</span></label>
                                    <button class="btn btn-default dropdown-toggle" type="button" id="compte" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Budget Mensuel : 
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <?php
                                        // Nom du fichier
                                        //$sqlidname = " SELECT * FROM `num_compte` WHERE actif=1 ";
                                        //  $statement = $connexion->query($sqlidname);
                                        //  while ($d_compte = $statement->fetch(PDO::FETCH_ASSOC))
                                        //  {
                                        //      echo "<li><a href=" . $path . "?compte=" . $d_compte['id_num_compte'] . ">" . $d_compte['libelle'] . "</a></li>";
                                        //   }
                                        //   $statement->closeCursor();
                                        ?>
                                    </ul>      
                                    <input type="text" class="form-control" id="compte" name="compte"  required="required" value="<?php //echo $numcompte;  ?>"/>
                                </div> 
                            </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fichier">Fichier <span class="required">*</span></label>
                                    <input type="file" class="form-control" id="fichier" name="fichier" required="required" />
                                </div>                                    
                            </div>
                            <div class="col-md-12">
                                <?php
//                                        if ($case_actif == 1)
//                                        {
//                                            echo " <button type='submit' class='btn btn-primary'><i class='fa fa-file'></i>Envoyer le fichier</button>";
//                                        }
//                                        else
//                                        {
//                                            echo "<button type='submit' disabled='disabled' class='btn btn-primary'><i class='fa fa-file'></i>Envoyer le fichier</button>";
//                                        };
                                ?>

                            </div>
                        </form>     
                    </fieldset>
                </div>
            </div>
            <div class="clearfix"></div>
            <br />
            <br />
            <div class="row">
                <div class="col-md-12"> 
                    <fieldset class="wow fadeIn">
                        <legend>Listing des imports</legend>
                        <table class="table table-bordered table-striped table-condensed">
                            <thead> <!-- En-tête du tableau -->
                                <tr>
                                    <th class="alignCenter">Nom du fichier</th>
                                    <th class="alignCenter">Numero de compte</th>
                                    <th class="alignCenter">Actif</th>
                                    <th class="alignCenter">Preview</th>
                                </tr>
                            </thead>
                            <tbody> <!-- Corps du tableau -->
                                <?php
//                                        $req_selection_fichier = "
//                                          SELECT 
//                                                  id,
//                                                  emplacement,
//                                                  nom,
//                                                  num_compte,
//                                                  actif
//                                          FROM
//                                                  importcsv
//                                      ";
//
//                                        $statement = $connexion->query($req_selection_fichier);
//                                        while ($listefichiers = $statement->fetch(PDO::FETCH_ASSOC))
//                                        {
                                ?>
                                <tr>
                                    <td class="alignRight"><?php // echo $listefichiers['nom'];  ?></td>
                                    <td class="alignRight"><?php //echo $listefichiers['num_compte'];  ?></td>    
                                    <td class="alignRight"><?php //echo $listefichiers['actif'];  ?></td>                                         
                                    <td class="alignCenter" width="50">
                                        <?php
//                                                    if ($listefichiers['actif'] == 1)
//                                                    {
                                        ?>
                                        <a href="<?php //echo $path  ?>preview.php?id=<?php // echo $listefichiers['id'];  ?>"><i class="fa fa-search"></i></a>
                                            <?php // } ?>
                                    </td>                                          
                                </tr>
                                <?php
//                                        }
//                                        $statement->closeCursor();
                                ?>
                            </tbody>
                        </table>
                    </fieldset>                            
                </div>

            </div>
        </div>
    </div>
</div>

<?php echo View::forge('footer'); ?>