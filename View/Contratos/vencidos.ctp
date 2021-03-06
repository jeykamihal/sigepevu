
<div class="contratos vencidos">

    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo __('Contratos a vencer'); ?></h1>
            </div>

        </div><!-- end col md 12 -->
    </div><!-- end row -->



    <div class="row">
  <?php if (!empty($contratosVencidos)): ?>
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Acciones</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <!--                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Contrato'), array('action' => 'add'), array('escape' => false)); ?></li>-->
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Lista Personal'), array('controller' => 'personals', 'action' => 'index'), array('escape' => false)); ?> </li><!--
                            <li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Nuevo Personal'), array('controller' => 'personals', 'action' => 'add'), array('escape' => false)); ?> </li>-->
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

             <div class="col-md-9">
            <table cellpadding="0" cellspacing="0" class="table table-striped">
                <thead>
                    <tr>
                        <th> <center>Tipo</center></th>
                        <th> <center>Fecha Fin</center> </th>
                        <th> <center>Agente</center> </th>

                        <th class="actions"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contratosVencidos as $contrato): ?>
                    <tr>
                        <!--	<td><?php echo h($contrato['Contrato']['id']); ?>&nbsp;</td> -->
                        <td><?php echo h($contrato['Contrato']['conTipo']); ?>&nbsp;</td>
<!--                        <td><?php echo h($contrato['Contrato']['conPlazo']); ?>&nbsp;</td>
                        <td><?php echo h($contrato['Contrato']['conFecIni']); ?>&nbsp;</td>-->
                        <td><?php echo h($contrato['Contrato']['conFecFin']); ?>&nbsp;</td>
                        <td>
                            <?php echo $this->Html->link($contrato['Personal']['Apellido_Nombre'], array('controller' => 'personals', 'action' => 'view', $contrato['Personal']['id'])); ?>
                        </td>
                        <td class="actions">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $contrato['Contrato']['id']), array('escape' => false)); ?>
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-print"></span>', array('action' => 'imprimirconstancia', $contrato['Contrato']['personal_id'],$contrato['Contrato']['id']), array('escape' => false, target=>"_blank")); ?>


                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p>
                <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
            </p>

            <?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
            <ul class="pagination pagination-sm">
                <?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
            </ul>
            <?php } ?>

        </div> <!-- end col md 9 -->

        <h2> <center> <?php else: echo __('No tiene contratos a vencer este mes'); endif; ?> </center> </h2>
    </div><!-- end row -->


</div><!-- end containing of content -->