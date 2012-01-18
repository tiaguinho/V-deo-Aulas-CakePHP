<h1>Visualizando Post</h1>

<h2><?=$post['Post']['titulo']?></h2>
<small><?=$post['Post']['created']?></small>
<p><?=$post['Post']['texto']?></p>
<br />
<?=$this->Html->link('Listar Posts',array('controller' => 'posts','action' => 'index'))?>