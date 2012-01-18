<h1>Edit post</h1>

<?	echo $this->Form->create('Post',array('action' => 'edit')),
		 $this->Form->input('id',array('type' => 'hidden')),
		 $this->Form->input('titulo'),
		 $this->Form->input('texto'),
		 $this->Form->end('Atualizar');?>
<br />
<?=$this->Html->link('Listar Posts',array('controller' => 'posts','action' => 'index'))?>