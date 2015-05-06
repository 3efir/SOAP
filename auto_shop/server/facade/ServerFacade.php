<?php
require_once("../models/DataBase.php");
require_once("../config/config.php");
class ServerFacade
{
	protected $DB;
	public function __construct()
	{
		$this -> DB = DataBase::getInstance();
	}
	public function getAllCars()
	{
		$result = $this -> DB -> SELECT(" a.id, a.model, a.photo, b.brand ") ->
		from(" auto a ") -> inner(" brand b ") -> on(" a.brand_id = b.id ") ->
		selected();
		return $result;
	}
	public function getDetail($id)
	{
		$result = $this -> DB -> SELECT(" a.id, a.model, a.photo, a.year,
		a.capacity, a.color, a.speed, a.price, b.brand ") ->from(" auto a ") ->
		inner(" brand b ") -> on(" a.brand_id = b.id ") -> where(" a.id = $id ") 
		-> selected();
		return $result;
	}
	public function saveOrder($id, $fname, $lname, $payType)
	{
		try
		{
			$arr = array($id, $fname, $lname, $payType);
			$this -> DB -> INSERT(" orders ") -> keys(" idCar, first_name, 
			last_name, pay_type ") -> values(" ?, ?, ?, ? ") -> 
			insertUpdate($arr);
			return true;
		}
		catch(Exception $e)
		{
			return $e->getMessage();
		}
	}
	public function getData()
	{
		$result = array();
		$result['models'] = $this -> DB -> SELECT(" distinct model ") -> from("
		 auto ") -> selected();
		$result['year'] = $this -> DB -> SELECT(" distinct year ") -> from(" 
		auto ") -> selected();
		$result['capacity'] = $this -> DB -> SELECT(" distinct capacity ") -> 
		from(" auto ") -> selected();
		$result['color'] = $this -> DB -> SELECT(" distinct color ") -> from(" 
		auto ") -> selected();
		$result['speed'] = $this -> DB -> SELECT(" distinct speed ") -> from(" 
		auto ") -> selected();
		return $result;
	}
	public function search($arr)
	{
		$result = $this -> DB -> SELECT(" a.id, a.model, a.photo, b.brand ") ->
		from(" auto a ") -> inner(" brand b ") -> on(" a.brand_id = b.id ") ->
		where(" a.year = ".$arr['year']." ");
		if($arr['model'] !== '')
		{
			$result = $result -> whereAnd(" a.model = '".$arr['model']."' ");
		}
		if($arr['capacity'] !== '')
		{
			$result = $result -> whereAnd(" a.capacity = '".$arr['capacity']."' ");
		}
		if($arr['color'] !== '')
		{
			$result = $result -> whereAnd(" a.color = '".$arr['color']."' ");
		}
		if($arr['speed'] !== '')
		{
			$result = $result -> whereAnd(" a.speed = '".$arr['speed']."' ");
		}
		if($arr['price'] !== '')
		{
			$result = $result -> whereAnd(" a.price >= '".$arr['price']."' ");
		}
		$result = $result -> selected();
		return $result;
	}
}
?>