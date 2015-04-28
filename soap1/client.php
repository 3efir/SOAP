<?php 
class MyClass
{
    public function getSpain()
    {
        $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?WSDL");  
        $arr = array("sTeamName" => "Spain");
        $team = $client -> FullTeamInfo($arr);
        //$result = $team['FullTeamInfoResult']['sCoach'];
        $result = $team -> FullTeamInfoResult -> sCoach;
        return $result;
    }
}
?>
