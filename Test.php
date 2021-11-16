<?php  
	//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

//  Initialize the library
$api = new LeagueAPI([
	//  Your API key, you can get one at https://developer.riotgames.com/
	LeagueAPI::SET_KEY    => 'RGAPI-f7045a96-4274-4f2a-a041-39303cf4eaa5',
	//  Target region (you can change it during lifetime of the library instance)
	LeagueAPI::SET_REGION => Region::EUROPE_WEST,
]);

//  And now you are ready to rock!
$summoner = $api->getSummonerByName("StorSnefnug");
$matchlist = $api->getMatchIdsByPUUID($summoner->puuid);

print_r($summoner) . '<br>' . '<br>';
print_r($matchlist);

echo "<img src=\"$summoner->profileIconId.png\">";
?>