<?php 
/**
 * 
 */
class Home extends Controllers
{
	
	public function __construct()
	{
	parent::__construct();

	}

	public function home()
	{
		$data['page_id']= 1;
		$data['tag_page']= "Home";
		$data['page_title']= "Pagina principal";
		$data['page_name']= "Home";
		$data['page_content']= "Lorem ipsum qui dolor laborum est veniam amet aliquip veniam qui sunt. Fugiat cillum mollit esse do officia cillum veniam deserunt amet velit nisi commodo veniam exercitation sed enim quis. Pariatur sint qui esse minim ullamco dolore dolore esse eu laboris ex. Id aliqua nulla nisi ea et nulla eiusmod incididunt ad laboris qui dolore minim amet ea in elit non.";

		$this->views->getView($this,"Home",$data);
	}
	public function insertar()
	{
		$data = $this->model->setUser("Johan",20);
		print_r($data);
	}
	public function verUsuario($id)
	{
		$data = $this->model->getUser($id);
		print_r($data);
	}
	public function actualizar()
	{
		$data = $this->model->updateUser(1,"Johan Reyes",22);
		print_r($data);
	}
	public function verUsuarios()
	{
		$data = $this->model->getUsers();
		print_r($data);
	}
	public function eliminar($id)
	{
		$data=$this->model->deleteUser($id);
		print_r($data);
	}
	
}

 ?>