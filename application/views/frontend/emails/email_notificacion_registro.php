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
			<td><h1>Felicitaciones!</h1></td>
			<td></td>
		</tr>
		<tr>
			<td colspan="3" height="5"></td>
		</tr>
		<tr>
			<td height="20"></td>
			<td>
				<p>Se ha producido un nuevo registro en Logrosperu.</p>
				<p>Le mostramos a continuación los datos del registro:</p>
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
					<td class="celda">Plan</td>
					<td class="contenido"><?php echo $nombre_plan; ?></td>
				</tr>
				<tr>
					<td class="celda">Institución Educativa</td>
					<td class="contenido"><?php echo $nombre_institucion; ?></td>
				</tr>
				<tr>
					<td class="celda">Razon Social</td>
					<td class="contenido"><?php echo $razon_social; ?></td>
				</tr>
				<tr>
					<td class="celda">RUC</td>
					<td class="contenido"><?php echo $ruc; ?></td>
				</tr>
				<tr>
					<td class="celda">Email</td>
					<td class="contenido"><?php echo $email_institucion; ?></td>
				</tr>
				<tr>
					<td class="celda">Web</td>
					<td class="contenido"><?php echo $web; ?></td>
				</tr>
				<tr>
					<td class="celda">Nombres Persona de contacto</td>
					<td class="contenido"><?php echo $nombres_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Apellidos Persona de contacto</td>
					<td class="contenido"><?php echo $apellidos_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Cargo Persona de contacto</td>
					<td class="contenido"><?php echo $cargo_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Area Persona de contacto</td>
					<td class="contenido"><?php echo $area_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Email Persona de contacto</td>
					<td class="contenido"><?php echo $email_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Celular Persona de contacto</td>
					<td class="contenido"><?php echo $celular_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Telefono Persona de contacto</td>
					<td class="contenido"><?php echo $telefono_contacto; ?></td>
				</tr>
				<tr>
					<td class="celda">Anexo Persona de contacto</td>
					<td class="contenido"><?php echo $anexo_contacto; ?></td>
				</tr>
				<?php
					if($id_plan==4)
					{
				?>
				<tr>
					<td class="celda">Consulta</td>
					<td class="contenido"><?php echo $consulta; ?></td>
				</tr>
				<?php
					}
				?>
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
				<p>Atte.</p>
				<p><strong>El equipo de LogrosPeru.com</strong></p>
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