<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author 1130619373
 */
global $biblio_apps;
global $app_route;
global $buscador;
global $results_article_url;
global $journal_id;
// Example values for production environment
//$biblio_apps="http://www.icesi.edu.co/sistemas_telematica/buscador";
//$app_route="http://www.icesi.edu.co/sistemas_telematica/buscador";
//$buscador = "http://www.icesi.edu.co/revistas/buscar.php";
//$results_article_url = "http://www.icesi.edu.co/sistemas_telematica/buscador_ojs.php";
//se debe consultar en la base de datos de OJS
//$journal_id = 4

// Values for development environment
$biblio_apps="http://192.168.220.28/<journal_website>/buscador";
$app_route="http://192.168.220.28/<journal_website>/buscador";
$buscador = "http://192.168.220.28/<ojs_installation_name>/buscar.php";
$results_article_url = "http://192.168.220.28/<journal_website>/<results_article>";
//se debe consultar en la base de datos de OJS
$journal_id = 4;
?>
