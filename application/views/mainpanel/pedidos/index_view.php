<div>
   <ul class="breadcrumb">
     <li><a href="mainpanel/pedidos/listado">Listado </a> <span class="divider">/</span></li>
   </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list"></i>Listado de Pedidos</h2>
            <div class="box-icon">
                <a href="javascript:history.back(-1)" class="btn btn-round" title="VOLVER"><i class="icon-arrow-left"></i></a>
            </div>
        </div>

        <div class="box-content">
        <?php
            if($this->session->userdata('success'))
            {
                echo '<div class="alert alert-success">';
                echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                echo $this->session->userdata('success');
                echo '</div>';
                $this->session->unset_userdata('success');
            }
            if($this->session->userdata('error'))
            {
                echo '<div class="alert alert-error">';
                echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                echo $this->session->userdata('error');
                echo '</div>';
                $this->session->unset_userdata('error');
            } 
        ?>               
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th width="5%">Nro</th>
                        <th width="15%">Código Pedido</th>
                        <th width="15%">Cliente</th>
                        <th width="15%">Fecha pedido</th>
                        <th width="15%">Estado</th>
                        <th width="25%">Acción</th>
                    </tr>
                </thead>   
                <tbody>
                <?php
                    $orden = 1;
                    foreach($listado as $lista)
                    {
                        echo '<tr>';
                        echo '<td class="center">'.$orden.'</td>';
                        echo '<td class="center">'.$lista->numero_cotizacion.'</td>';
                        echo '<td class="center">'.$lista->nombres.' '.$lista->apellidos.'</td>';
                        echo '<td class="center">'.$lista->fecha_pedido.'</td>';
                        if($lista->estado=="P")
                        {
                            echo '<td><span class="label label-success">PEDIDO</span></td>';
                        }
                        else
                        {
                            echo '<td><span class="label label-important">PROCESADO</span></td>';
                        }
                        echo '<td>';
                        echo '<a class="btn btn-info espacio" href="mainpanel/pedidos/edit/'.$lista->id.'"><i class="icon-edit icon-white"></i>  Detalles</a> ';
                        echo '</td>';
                        echo '</tr>';
                        $orden++;
                    }
                ?>
                </tbody>
            </table>            
        </div>
     </div>
</div>