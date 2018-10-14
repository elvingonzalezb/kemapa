<html>
<head>
	<style>
	.celda { background:#eee; padding:5px; color: #000; font-weight: 700; border:1px solid #ccc; }
	.contenido { background: #f7f7f7; padding: 5px; color: #333; font-weight: 500; border:1px solid #ccc; }
	</style>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="0" style="background:#eee;">
<tr>
	<td width="600" align="center" style="background:#fff;">
		<table width="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td colspan="3" height="80" align="center"><img src="<?php echo base_url(); ?>/assets/frontend/imagenes/logo-top.png"></td>
		</tr>
		<tr>
			<td width="5%" height="5"></td>
			<td width="80%"></td>
			<td width="5%"></td>
		</tr>
		<tr>
			<td height="20"></td>
			<td>
				<p>Se ha producido una consulta en la página de su empresa en <?php echo NOMBRE_SITIO; ?>.</p>
				<p>Le mostramos a continuación los datos de la consulta:</p>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" height="5"></td>
		</tr>
		<tr>
			<td height="20"></td>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td class="celda">Nombres</td>
					<td class="contenido"><?php echo $nombre; ?></td>
				</tr>
				<tr>
					<td class="celda">Apellidos</td>
					<td class="contenido"><?php echo $apellidos; ?></td>
				</tr>
				<tr>
					<td class="celda">Email</td>
					<td class="contenido"><?php echo $email; ?></td>
				</tr>
				<tr>
					<td class="celda">Telefono</td>
					<td class="contenido"><?php echo $telefono; ?></td>
				</tr>
				<tr>
					<td class="celda">Consulta</td>
					<td class="contenido"><?php echo $mensaje; ?></td>
				</tr>
				</table>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" height="5"></td>
		</tr>
		<tr>
			<td height="20"></td>
			<td>
				<p>Recuerde que puede visualizar tambien estas consultas ingresando a su panel de cliente y dirigiendose a la opcion CONSULTAS del menu lateral.</p>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" height="5"></td>
		</tr>
		<tr>
			<td height="20"></td>
			<td>
				<p>Atte.</p>
				<p><strong>El equipo de <?php echo DOMINIO_SITIO; ?></strong></p>
			</td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" height="5"></td>
		</tr>
		</table>
	</td>
</tr>
</table>
</body>