<?php
/* class Search
{
    protected $search;
    public function __construct()
    {
    }
    public function search()
    {
		$useragent = "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) ";
		$curl = curl_init();  
		curl_setopt($curl, CURLOPT_URL, 'http://footballpool.dataaccess.eu/data/info.wso?WSDL');   
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($curl, CURLOPT_USERAGENT,$useragent);
		$str = curl_exec($curl);   
		curl_close($curl);   
		return $str; 
    } 
    public function dom($html)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
		$test = $dom->getElementById("ires");
		return $dom->saveHtml($test);
    }
}


$obj = new Search();
echo "<pre>";
print_r($obj -> search()); */
/* $credentials = "username:pass"; 
$url = "http://footballpool.dataaccess.eu/data/info.wso?WSDL";
$body = ''; /// Your SOAP XML needs to be in this variable
$useragent = "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) ";

$headers = array( 
    'Content-Type: text/xml; charset="utf-8"', 
    'Content-Length: '.strlen($body), 
    'Accept: text/xml', 
    'Cache-Control: no-cache', 
    'Pragma: no-cache', 
    'SOAPAction: "http://footballpool.dataaccess.eu/data/info.wso?WSDL"'
); 

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);

// Stuff I have added
curl_setopt($ch, CURLOPT_POST, true); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $body); 
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $credentials);

$data = curl_exec($ch); 
print_r($data);
 */
/* 		$arr = array("sTeamName" => "Spain");
 		$useragent = "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) ";
		$curl = curl_init();  
		curl_setopt($curl, CURLOPT_URL, 'http://footballpool.dataaccess.eu/data/info.wso/FullTeamInfo');   
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($curl, CURLOPT_USERAGENT,$useragent);
		$str = curl_exec($curl);   
		curl_close($curl); 
		echo "<pre>";
		var_dump($str); */
		
$post_string = array("sTeamName" => "Spain");		
		$soap_do = curl_init(); 
curl_setopt($soap_do, CURLOPT_URL, "http://footballpool.dataaccess.eu/data/info.wso?WSDL" );   
curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 10); 
curl_setopt($soap_do, CURLOPT_TIMEOUT,        10); 
curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($soap_do, CURLOPT_POST,           true ); 
curl_setopt($soap_do, CURLOPT_POSTFIELDS,    $post_string); 
curl_setopt($soap_do, CURLOPT_HTTPHEADER,     array('Content-Type: text/xml; charset=utf-8', 'Content-Length: ' )); 


$result = curl_exec($soap_do);
$err = curl_error($soap_do);  
?>