<?php 
class Client
{
    public function getTeam($team)
    {
        $client = new SoapClient("http://footballpool.dataaccess.eu/data/info.wso?WSDL");  
        $arr = array("sTeamName" => $team);
        $team = $client -> FullTeamInfo($arr);
        //$result = $team['FullTeamInfoResult']['sCoach'];
		$result = "<ul>". $team -> FullTeamInfoResult -> sName;
        $result .= "<li> Coach: ". $team -> FullTeamInfoResult -> sCoach ."</li>";
		$result .= "<ol> Goalkeepers";
		foreach($team -> FullTeamInfoResult -> sGoalKeepers -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
		$result .= "<ol> Defenders";
		foreach($team -> FullTeamInfoResult -> sDefenders -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
		$result .= "<ol> MidFields";
		foreach($team -> FullTeamInfoResult -> sMidFields -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
				$result .= "<ol> Forwards";
		foreach($team -> FullTeamInfoResult -> sForwards -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol></ul>";
        return $result;
    }
}
?>