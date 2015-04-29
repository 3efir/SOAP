<?php 
class Client
{
    public function getTeam($name)
    {
		$useragent = "Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.10) Gecko/2009042523 Ubuntu/8.10 (intrepid) ";
		$curl = curl_init();  
		curl_setopt($curl, CURLOPT_URL, 'http://footballpool.dataaccess.eu/data/info.wso/FullTeamInfo/?sTeamName='.$name);   
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($curl, CURLOPT_USERAGENT,$useragent);
		$team = curl_exec($curl);   
		curl_close($curl);
		return $team;
	}
	public function parser($team)
	{
		$team = simplexml_load_string($team);
		$result = "<ul>". $team ->sName;
        $result .= "<li> Coach: ". $team -> sCoach ."</li>";
		$result .= "<ol> Goalkeepers";
		foreach($team -> sGoalKeepers -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
		$result .= "<ol> Defenders";
		foreach($team -> sDefenders -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
		$result .= "<ol> MidFields";
		foreach($team -> sMidFields -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol>";
				$result .= "<ol> Forwards";
		foreach($team -> sForwards -> string as $v)
		{
			$result .= "<li type='circle'> $v </li>";
		}
		$result .= "</ol></ul>";
        return $result;
    }
}
?>