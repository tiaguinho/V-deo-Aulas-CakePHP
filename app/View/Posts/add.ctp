<h1>Add novo post</h1>

<?	echo $this->Form->create('Post',array('action' => 'add')),
		 $this->Form->input('titulo'),
		 $this->Form->input('texto'),
		 $this->Form->end('Cadastrar');?>
<br />
<?=$this->Html->link('Listar Posts',array('controller' => 'posts','action' => 'index'))?>