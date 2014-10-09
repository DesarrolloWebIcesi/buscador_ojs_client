<?php
/**
 * Buscador OJS
 *
 * @author damanzano-aorozco
 * @since 2011-06-10
 */
?>
<link type="text/css" rel="stylesheet"  href="<?php echo $GLOBALS["biblio_apps"] ?>/commons/css/commons.css"/>
<script type="text/javascript" src="<?php echo $GLOBALS["biblio_apps"] ?>/commons/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" >
    var biblioappsURL="<?php echo $GLOBALS["biblio_apps"] ?>";
    var coleccionesURL="<?php echo $GLOBALS["app_route"] ?>";
    var URLbuscador="<?php echo $GLOBALS["buscador"] ?>";
	var prueba = "<?php echo $_GET["prueba"] ?>";
	var revista = "<?php echo $_GET["revista"] ?>"; 
    //jQuery.noConflict();
</script>
<script type="text/javascript" src="<?php echo $GLOBALS["biblio_apps"] ?>/commons/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS["app_route"] ?>/js/busqueda.js" ></script>
<div id="biblio_apps">
    <div id="app_form">
    </div>
    <div id="app_results">
    <?php if(!isset($_GET['pkeyword'])){ ?>
      <br/>
      <br/>
      Por favor ingrese un texto, luego seleccione el tipo de b&uacute;squeda y haga clic en "Buscar".
	  
      <br/>
      <br/>
    <?php } ?>
	</div>
	
    <?php if(isset($_GET['pkeyword'])){ ?>
    <script type="text/javascript">
      loadBDResults(1,10, '<?php echo $_GET['tipo']; ?>', '<?php echo utf8_decode($_GET['pkeyword']); ?>');
    </script>
    <?php } ?>
</div>