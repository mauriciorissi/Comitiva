<?php
	echo $this->element('editor'); 
?>
<div class="proposals form">
<?php echo $this->Form->create('Proposal');?>
	<fieldset>
 		<legend><?php echo __('Adicionar Proposta'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('label' =>__('Palestrante')));
		echo $this->Form->input('event_id', array('label' => __('Evento Alvo')));
		echo $this->Form->input('mini_curriculum',array('label' => __('Mini Currículo'), 'rows' => 8));
		echo $this->Form->input('area',array('label' => __('Área')));
		echo $this->Form->input('abstract',array('label' => __('Resumo'), 'rows' => 8));
		echo $this->Form->input('detailed',array('label' => __('Detalhes'), 'rows' => 15));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar'));?>
</div>
<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar Propostas'), array('action' => 'index'));?></li>
	</ul>
</div>