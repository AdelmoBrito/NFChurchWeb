<h1>Nova Ata</h1>
<?php
	echo $this->Form->create('Ata');
	echo $this->Form->input('num', array('label' => 'Número: ', 'type' => 'text'));
	echo $this->Form->input('data', array('label' => 'Data: ', 'type' => 'text'));
	echo $this->Form->input($this->Html->link('Voltar', array('plugin' => 'secretaria', 'controller' => 'atas', 'action' => 'index')), array('type' => 'button', 'label' => false));
	echo $this->Form->end('Salvar');
?>