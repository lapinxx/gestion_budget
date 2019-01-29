<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2018-12-16 00:00:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:00:18 --> Runtime Notice - Declaration of Presenter_Appli_Smensuel::view() should be compatible with Fuel\Core\Presenter::view() in D:\www\gestion_budget\fuel\app\classes\presenter\appli\smensuel.php on line 50
WARNING - 2018-12-16 00:00:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:00:38 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:03:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:03:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:03:56 --> 42S22 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.tableau' in 'field list' with query: "SELECT `t0`.`type` AS `t0_c0`, `t0`.`ordre` AS `t0_c1`, `t0`.`tableau` AS `t0_c2`, `t0`.`actif` AS `t0_c3`, `t0`.`Professionel` AS `t0_c4`, `t0`.`idTableau` AS `t0_c5`, `t0`.`created_at` AS `t0_c6`, `t0`.`updated_at` AS `t0_c7`, `t0`.`id` AS `t0_c8` FROM `tdepenses` AS `t0`" in D:\www\gestion_budget\fuel\core\classes\database\pdo\connection.php on line 223
WARNING - 2018-12-16 00:04:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:04:39 --> 42S22 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 't0.tableau' in 'where clause' with query: "SELECT `t0`.`type` AS `t0_c0`, `t0`.`ordre` AS `t0_c1`, `t0`.`actif` AS `t0_c2`, `t0`.`Professionel` AS `t0_c3`, `t0`.`idTableau` AS `t0_c4`, `t0`.`created_at` AS `t0_c5`, `t0`.`updated_at` AS `t0_c6`, `t0`.`id` AS `t0_c7`, `t1`.`date_retrait` AS `t1_c0`, `t1`.`libelle` AS `t1_c1`, `t1`.`numero_opration` AS `t1_c2`, `t1`.`debit` AS `t1_c3`, `t1`.`credit` AS `t1_c4`, `t1`.`detail` AS `t1_c5`, `t1`.`professionel` AS `t1_c6`, `t1`.`id_type_de_depense` AS `t1_c7`, `t1`.`date_facturation` AS `t1_c8`, `t1`.`num_compte` AS `t1_c9`, `t1`.`actif` AS `t1_c10`, `t1`.`id` AS `t1_c11`, `t2`.`tableau` AS `t2_c0`, `t2`.`typeTableau` AS `t2_c1`, `t2`.`ordre` AS `t2_c2`, `t2`.`actif` AS `t2_c3`, `t2`.`created_at` AS `t2_c4`, `t2`.`updated_at` AS `t2_c5`, `t2`.`id` AS `t2_c6` FROM `tdepenses` AS `t0` LEFT JOIN `comptas` AS `t1` ON (`t0`.`id` = `t1`.`id_type_de_depense`) LEFT JOIN `tableaus` AS `t2` ON (`t0`.`idTableau` = `t2`.`id`) WHERE `t0`.`tableau` = '0' AND `t2`.`typeTableau` = 1" in D:\www\gestion_budget\fuel\core\classes\database\pdo\connection.php on line 223
WARNING - 2018-12-16 00:06:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:08:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:08:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:09:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:10:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:10:39 --> 42S22 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'tableaus.typeTableau' in 'where clause' with query: "SELECT `t0`.`tableau` AS `t0_c0`, `t0`.`typeTableau` AS `t0_c1`, `t0`.`ordre` AS `t0_c2`, `t0`.`actif` AS `t0_c3`, `t0`.`created_at` AS `t0_c4`, `t0`.`updated_at` AS `t0_c5`, `t0`.`id` AS `t0_c6` FROM `tableaus` AS `t0` WHERE `tableaus`.`typeTableau` = 1" in D:\www\gestion_budget\fuel\core\classes\database\pdo\connection.php on line 223
WARNING - 2018-12-16 00:11:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:13:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:13:14 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:13:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:15:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:15:08 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:15:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:16:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:16:10 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:16:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:16:26 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:16:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:16:40 --> Notice - Undefined variable: tableauxDepense in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 16
WARNING - 2018-12-16 00:17:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:19:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:19:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:19:48 --> Fatal Error - Call to undefined function generateTable() in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 15
WARNING - 2018-12-16 00:20:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:20:10 --> Fatal Error - Call to undefined function generateTable() in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 15
WARNING - 2018-12-16 00:22:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:22:46 --> Fatal Error - Call to undefined function generateTable() in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 15
WARNING - 2018-12-16 00:23:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:25:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:26:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:28:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:28:03 --> Notice - Object of class stdClass could not be converted to int in D:\www\gestion_budget\fuel\app\views\partials\tableau_depense.php on line 17
WARNING - 2018-12-16 00:28:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:28:31 --> Notice - Object of class stdClass could not be converted to int in D:\www\gestion_budget\fuel\app\views\partials\tableau_depense.php on line 17
WARNING - 2018-12-16 00:28:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:30:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:30:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:30:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:31:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:31:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:34:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:34:58 --> Fatal Error - Function name must be a string in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 10
WARNING - 2018-12-16 00:36:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:38:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 00:38:37 --> Error - View variable is not set: tableauxFraisFixe in D:\www\gestion_budget\fuel\core\classes\view.php on line 541
WARNING - 2018-12-16 00:39:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:39:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:42:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:42:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:43:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:45:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:46:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:47:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:50:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:51:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 00:53:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 11:54:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:05:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:05:53 --> Notice - Object of class stdClass could not be converted to int in D:\www\gestion_budget\fuel\app\views\partials\tableau_depense.php on line 21
WARNING - 2018-12-16 12:06:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:06:41 --> Notice - Object of class stdClass could not be converted to int in D:\www\gestion_budget\fuel\app\views\partials\tableau_depense.php on line 21
WARNING - 2018-12-16 12:07:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:09:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:10:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:11:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:11:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:13:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:15:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:16:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:16:08 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:17:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:17:11 --> Parsing Error - syntax error, unexpected '?>' in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 5
WARNING - 2018-12-16 12:17:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:17:28 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:17:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:17:31 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:17:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:17:48 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:17:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:17:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:17:52 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
ERROR - 2018-12-16 12:17:53 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:18:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:20:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:20:13 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:21:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:21:27 --> Notice - Object of class Fuel\Core\Response could not be converted to int in D:\www\gestion_budget\fuel\app\classes\controller\appli.php on line 9
WARNING - 2018-12-16 12:21:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:21:28 --> Notice - Object of class Fuel\Core\Response could not be converted to int in D:\www\gestion_budget\fuel\app\classes\controller\appli.php on line 9
WARNING - 2018-12-16 12:21:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:21:29 --> Notice - Object of class Fuel\Core\Response could not be converted to int in D:\www\gestion_budget\fuel\app\classes\controller\appli.php on line 9
WARNING - 2018-12-16 12:22:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:22:35 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:24:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:24:18 --> Notice - Undefined variable: month in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 4
WARNING - 2018-12-16 12:24:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:25:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:26:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:27:00 --> Fatal Error - Call to undefined function Affiche_Mois() in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 7
WARNING - 2018-12-16 12:27:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2018-12-16 12:27:52 --> Notice - Undefined variable: path in D:\www\gestion_budget\fuel\app\views\appli\smensuel.php on line 11
WARNING - 2018-12-16 12:29:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:32:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:37:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:37:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:37:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:38:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:39:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 12:39:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 14:58:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:07:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:08:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:08:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:09:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:29:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:29:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:29:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:30:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:31:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:35:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:36:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:37:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:38:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:38:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:38:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:49:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:58:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:58:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:58:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 15:58:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 16:04:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 16:04:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2018-12-16 16:04:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
