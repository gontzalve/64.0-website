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

include_once('config-greenlight.php');

?><html>
<head>

<title><?PHP echo $my_games_name; ?> Steam Greenlight</title>

</head>
<body style="background-color:#000;color:#FFF;margin: 0;">
<iframe src="<?PHP echo $steamGreenlightURL; ?>" style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; z-index:999999;">
<center>Your browser doesn't support iframes.
Click <a href="<?PHP echo $steamGreenlightURL; ?>">here</a> to go to the <?PHP echo $my_games_name; ?> Steam Greenlight page.</center>
</iframe>
<?PHP if ($isMobile == false) { ?>
<iframe width="1" height="1" src="./redirect-to-greenlight.php" scrolling="no" frameborder="0"></iframe>
<?PHP } ?>
</body>
</html>