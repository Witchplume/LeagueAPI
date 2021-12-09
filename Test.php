<?php  
		//  Include all required files (installation via Composer is required)
	require_once __DIR__  . "/vendor/autoload.php";

	use RiotAPI\LeagueAPI\LeagueAPI;
	use RiotAPI\Base\Definitions\Region;

	//  Initialize the library
	$api = new LeagueAPI([
		//  Your API key, you can get one at https://developer.riotgames.com/
		LeagueAPI::SET_KEY    => 'KEY',
		//  Target region (you can change it during lifetime of the library instance)
		LeagueAPI::SET_REGION => Region::EUROPE_WEST,
	]);

	//  And now you are ready to rock!
	$summoner = $api->getSummonerByName($_GET['search']);
	$matchlist = $api->getMatchIdsByPUUID($summoner->puuid);

	//print_r($summoner) . '\n';

	foreach ($summoner->getData() as $summoner_info) {
		echo $summoner_info . '<br>';
	}

	echo '<br>';

	foreach ($matchlist as $match) {
		echo $match . '<br>';
	}

	$match2 = $api->getMatch((string)'EUW1_5599108990');

	$participants = $match2->participants;

	/*foreach ($participants as $players) {
		echo $players;
	}*/

	print_r($participants);

	/*
	$summonerpuuid = $api->getSummonerByPUUID("YRrea91Rb8DKyHvocGIwl-Fg7DDmiSPHTn2sXA_nrfiQTFo27IT9gwrWPe_IY70wODcqc7NemIr9ug");

	foreach ($summonerpuuid as $MatchSummoner1) {
		echo '<br>' . $MatchSummoner1;
	}
	*/

	/*
	$matchcurrent = $api->GetMatch("EUW1_5566980115");

	foreach ($matchcurrent as $Match1) {
		echo '<br>' . $Match1;
	}
	*/


	//echo $api->getMatch('EUW1_5566980115'); doesnt work

	echo "<img src=\"img\\profileicon\\$summoner->profileIconId.png\">";
?>