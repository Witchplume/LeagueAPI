<?php  
	//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

//  Initialize the library
$api = new LeagueAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	LeagueAPI::SET_KEY    => 'API Key here',
	//  Target region (you can change it during lifetime of the library instance)
	LeagueAPI::SET_REGION => Region::EUROPE_WEST,
]);

//  And now you are ready to rock!
$summoner = $api->getSummonerByName("Witchplume");
$matchlist = $api->getMatchIdsByPUUID($summoner->puuid);

print_r($summoner) . '<br>' . '<br>';
print_r($matchlist);

echo "<img src=\"img\\profileicon\\$summoner->profileIconId.png\">";
?>