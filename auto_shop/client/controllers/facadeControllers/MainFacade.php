<?php
class MainFacade
{
    protected $client;
	protected $valid;
    public function __construct()
    {
        $this -> client = new Client();
		$this -> valid = new ValidatorsModel();
    }
    public function getAllCars()
    {
        return $this -> client -> getAllCars(); 
    }
	public function getDetail($id)
	{
		$id = $this -> valid -> FilterFormValues($id);
		if($id !== '')
		{
			return $this -> client -> getDetail($id);
		}
		else
		{
			return "not correct ID";
		}
	}
	public function order($id, $arr)
	{
		$id = $this -> valid -> FilterFormValues($id);
		$fname = $this -> valid -> FilterFormValues($arr['fname']);
		$lname = $this -> valid -> FilterFormValues($arr['lname']);
		$payType = $this -> valid -> FilterFormValues($arr['payType']);
		if('' !== $lname && '' !== $fname && '' !== $payType)
		{
			return $this -> client -> order($id, $fname, $lname, $payType);
		}
		else
		{
			return "fields cant be empty";
		}
	}
	public function getData()
	{
		return $this -> client -> getData(); 
	}
}
?>