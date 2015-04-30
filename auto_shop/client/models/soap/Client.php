<?php
class Client
{
    protected $client;
    public function __construct()
    {
        $this -> client = new SoapClient("../server/test.wsdl");                  
    }
    public function getAllCars()
    {
        try
        {  
            echo "<pre>\n";  
            print($this -> client -> getQuote("ibm"));  
            echo "\n"; 
	        print($this -> client -> myMethod()); 	
        }
        catch (SoapFault $exception) 
        {  
            echo $exception;        
        }
    }
}  
?>
