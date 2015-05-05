<?php
class HtmlHelper
{
	public function MainPage($data)
	{
		$result = '';
		$file = file_get_contents('resources/templates/mainDiv.html');
		foreach($data as $v)
		{
			$arr = array('%IMG%' => $v['photo'],
						'%BRAND%' => $v['brand'].' '.$v['model'],
						'%ID%' => $v['id']);
			$result .= FrontController::templateRender($file, $arr);
		}
		return $result;
	}
	public function error($data)
	{
		return "<p>$data</p>";
	}
	public function DetailPage($data)
	{
		$result = '';
		$file = file_get_contents('resources/templates/detail.html');
		foreach($data as $v)
		{
			$arr = array('%IMG%' => $v['photo'],
						'%BRAND%' => $v['brand'],
						'%ID%' => $v['id'],
						'%MODEL%' => $v['model'],
						'%YEAR%' => $v['year'],
						'%CAPACITY%' => $v['capacity'],
						'%COLOR%' => $v['color'],
						'%PRICE%' => $v['price'],
						'%SPEED%' => $v['speed']);
			$result .= FrontController::templateRender($file, $arr);
		}
		return $result;
/* 		$res = array();
		foreach($data-> Map -> item as $k => $v)
		{
			$res[$v->key] = $v->value;
		}
		$file = file_get_contents('resources/templates/detail.html');
		$arr = array('%IMG%' => $res['photo'],
					'%BRAND%' => $res['brand'],
					'%ID%' => $res['id'],
					'%MODEL%' => $res['model'],
					'%YEAR%' => $res['year'],
					'%CAPACITY%' => $res['capacity'],
					'%COLOR%' => $res['color'],
					'%PRICE%' => $res['price'],
					'%SPEED%' => $res['speed']);
		$result = FrontController::templateRender($file, $arr);
		return $result; */
	}
	public function options($data, $name)
	{
		$file = file_get_contents('resources/templates/small/option.html');
		$result = '';
		foreach($data as $v)
		{
			$arr = array('%VALUE%' => $v[$name]);
			$result .= FrontController::templateRender($file, $arr);
		}
		return $result;
	}
}
?>