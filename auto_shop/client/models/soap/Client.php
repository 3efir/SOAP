<?php
class Client
{
    protected $client;
    public function __construct()
    {
        $this -> client = new SoapClient(SOAPWSDL);                  
    }
    public function getAllCars()
    {
        try
        {
	        return $this -> client -> getAllCars(); 	
        }
        catch (SoapFault $exception) 
        {  
            return $exception;        
        }
    }
	public function getDetail($id)
	{
		try
        {
	        return $this -> client -> getDetail($id); 	
        }
        catch (SoapFault $exception) 
        {  
            return $exception;        
        }
	}
	public function order($id, $fname, $lname, $payType)
	{
		try
		{
			return $this -> client -> order($id, $fname, $lname, $payType);
		}
		catch (SoapFault $exception) 
        {  
            return $exception;        
        }
	}
	public function getData()
	{
		try
		{
			return $this -> client -> getData();
		}
		catch (SoapFault $exception) 
        {  
            return $exception;        
        }
	}
}  
?>