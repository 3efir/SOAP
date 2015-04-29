<?php  
  $client = new SoapClient("../server/test.wsdl");  
  try {  
    echo "<pre>\n";  
    print($client->getQuote("ibm"));  
    echo "\n"; 
	print($client->myMethod()); 	
  } catch (SoapFault $exception) {  
    echo $exception;        
  }  
?>