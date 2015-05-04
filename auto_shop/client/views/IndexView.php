<?php
class IndexView{
	protected $helper;
	public function __construct()
	{
		$this -> helper = new HtmlHelper();
	}
	public function index($data)
	{
		if(is_array($data))
		{
			$result = $this -> helper -> MainPage($data);
		}
		else
		{
			$result = $this -> helper -> error($data);
		}
		$file = '../resources/templates/index.html';
		$view = FrontController::render($file, $result);
		FrontController::setBody($view);
		return true;
	}
	public function showDetail($data)
	{
		if(is_array($data))
		{
			$result = $this -> helper -> DetailPage($data);
		}
		else
		{
			$result = $this -> helper -> error($data);
		}
		$file = '../resources/templates/index.html';
		$view = FrontController::render($file, $result);
		FrontController::setBody($view);
		return true;
	}
	public function order($data)
	{
		if($data == true)
		{
			$result = "Thank you for your order in the near 
			future that there tra ta ta!";
			$file = '../resources/templates/index.html';
			$view = FrontController::render($file, $result);
			FrontController::setBody($view);
			header('Refresh: 5; url=/~user8/auto_shop/client/', true, 301);
		}
	}
	public function search($data)
	{
		$models = $this -> helper -> options($data['models'], "model");
		$years = $this -> helper -> options($data['year'], "year");
		$capacityes = $this -> helper -> options($data['capacity'], "capacity");
		$colors = $this -> helper -> options($data['color'], "color");
		$speeds = $this -> helper -> options($data['speed'], "speed");
		$file = file_get_contents('resources/templates/search.html');
		$arr = array('%MODEL%' => $models,
					'%YEAR%' => $years,
					'%CAPACITY%' => $capacityes,
					'%COLOR%' => $colors,
					'%SPEED%' => $speeds);
		$view = FrontController::templateRender($file, $arr);
		FrontController::setBody($view);
		return true;
	}
}
?>