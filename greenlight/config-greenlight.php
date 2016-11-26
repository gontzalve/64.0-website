<?php
/** 
 * BLG Greenlight Tool
 *
 * Free Tool to Get Users to Vote for your Greenlight Game in the Steam Client
 *
 * @link http://blacklodgegames.com/free-tool-greenlight-game-steam-votes/ 
 * @version 1.0.1
 * @author BLACK LODGE GAMES, LLC
 * @copyright 2016 BLACK LODGE GAMES, LLC
 * @license CC0 https://creativecommons.org/publicdomain/zero/1.0/ 
 * @package blg-greenlight-tool
 */

$my_games_name = '64.0';	// Replace this with your game's name
$steam_greenlight_id = '805666830';		// Replace this with the ID of your Greenlight.  Your ID is that end of your Greenlight URL:
										// http://steamcommunity.com/sharedfiles/filedetails/?id=530536300

// Do not modify below this line: ----------------------------------------
if( stristr($_SERVER['HTTP_USER_AGENT'],'ipad') || stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'iphone') || stristr($_SERVER['HTTP_USER_AGENT'],'blackberry') || stristr($_SERVER['HTTP_USER_AGENT'],'android') ) {
	
	$isMobile = true;
} else {
	
	$isMobile = false;
}										

$steamGreenlightURL = 'https://steamcommunity.com/sharedfiles/filedetails/?id='.$steam_greenlight_id;	
$steamClientGreenlightURL = 'steam://url/CommunityFilePage/'.$steam_greenlight_id;