<?php
/**
 * Formulario de búsqueda para usar el servicio del buscador OJS 
 * Este archivo busca servir de plantilla para los módulos personlaizados que se usan en joomla o
 * para que se use mediante un llamado de jumi, por tal motivo no tiene hojas de estilo asociadas
 *
 * @author damanzano
 * @since 2014-10-09
 */
?>
<?php 
include_once 'Config.php';
?>
<p>Puede consultar los artículos dentro de nuestro archivo. Indique una(s) palabra(s) claves para iniciar la búsqueda.</p>
<form id="buscar" action="<?php echo $GLOBALS["results_article_url"] ?>" method="get">
	<!-- Campo de búsqueda -->
	<input id="pkeyword" class="textField" type="text" name="pkeyword" value="" size="55" maxlength="255" />
	<!-- Selección del tipo de búsqueda -->
	<select id="tipo" class="selectMenu" name="tipo" size="1">
		<option label="Todo" value="query">Todo</option>
		<option label="Autores/as" value="authors">Autores/as</option>
		<option label="Título" value="title">Título</option>
		<option label="Resumen" value="abstract">Resumen</option>
		<option label="Términos de la indexación" value="indexTerms">Términos de la indexación</option>
		<option label="Texto completo" value="galleyFullText">Texto completo</option>
	</select>
	<!-- Id de la revista en la que se desea buscar -->
	<input id="revista_ojs" type="hidden" name="revista" value="<?php echo $GLOBALS["journal_id"] ?>" /> 
	<input id="prueba" type="hidden" name="prueba" value="0" /> 
	<input class="button" type="submit" value="Buscar" />
</form>