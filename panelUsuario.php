<?php
// import file with all clases
require 'funcionesModelo.php';
$idUsuario=1000;
$arrayIncidenciasUsuario=getIncidenciasUsuario($idUsuario);
//$arrayEstadosIncidencias=getEstadosIncidencia();
?>
<input type="text" readonly><?=$idUsuario;?></input>
<table>
    <tbody>
	    <tr>
        	<th>Id Incidencia</th><th>Prioridad</th><th>Fecha Creación</th><th>Descripción</th><th>Servidor</th><th>Estados</th>
		<tr>
        <?php foreach($arrayIncidenciasUsuario as $incidencia){ ?>
        <tr>
            <td><?=$incidencia->getId();?></td><td><?=$incidencia->getPrioridad();?></td><td><?=$incidencia->getTimestampCreacion();?></td><td><?=$incidencia->getDescripcion();?></td><td><?=$incidencia->getServer();?></td>
			<td>
			    <table>			
                    <tr>
                        <th>Estado</th><th>Fecha</th>
                    </tr>		
					<?php foreach(getEstadosIncidencia($incidencia->getId()) as $estado){ ?>
					<tr>
						<td><?=$estado->getEstado();?></td><td><?=$estado->getTimestampEstado();?></td>
					</tr>
					<?php } ?>
				</table>
            </td>
	    </tr>
		<?php } ?>
    </tbody>
</table>
?>