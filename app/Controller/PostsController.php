<?
class PostsController extends AppController{
	
	public $name = 'Posts';
	
	public function index(){
		$this->paginate = array('limit' => 2);
		$posts = $this->paginate('Post');
		$this->set(compact('posts'));
	}
	
	public function add(){
		if($this->data){
			if($this->Post->save($this->data))
				$this->Session->setFlash('Post adicionado com sucesso!');
			$this->data = array();
		}
	}
	
	public function edit($id = null){
		if($this->data){
			if($this->Post->save($this->data))
				$this->Session->setFlash('Post editado com sucesso!');
			$this->redirect(array('controller' => 'posts','action' => 'index'));
		}else{
			$this->data = $this->Post->read(null,$id);	
		}		
	}
	
	public function delete($id = null){
		if($id){
			if($this->Post->delete($id))
				$this->Session->setFlash('Post excluído com sucesso!');
			$this->redirect(array('controller' => 'posts','action' => 'index'));
		}
	}
	
	public function view($id = null){
		if($id){
			$post = $this->Post->read(null,$id);
			$this->set(compact('post'));
		}
	}
	
}
?>