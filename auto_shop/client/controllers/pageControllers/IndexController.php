<?php
class IndexController
{
    protected $facade, $view;
    public function __construct()
    {
        $this -> facade = new MainFacade();
		$this -> view = new IndexView();
    }
    public function indexAction()
    {
		$result = $this -> facade -> getAllCars();
		$this -> view -> index($result);
		return true;
    }
	public function showDetailAction()
	{
		(int) $id = FrontController::getParams();
		$result = $this -> facade -> getDetail($id);
		$this -> view -> showDetail($result);
		return true;
	}
	public function orderAction()
	{
		(int) $id = FrontController::getParams();
		$result = $this -> facade -> order($id, $_POST);
		$this -> view -> order($result);
		return true;
	}
	public function modalSearchAction()
	{
		$data = $this -> facade -> getData();
		$this -> view -> search($data);
	}
	public function searchAction()
	{
		print_r($_POST);
	}
}
?>