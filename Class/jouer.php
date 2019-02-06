<?php
require_once "Validate.php";

 class Play
{

function jouer($col, $player) {
	$user1=new Valider();
	global $board;
	$i = 0;
	$done = false;
	while ($i<HAUT) {
		$rows1=$user1->validate($col);
	    if ($board[$col][$i] == 0) {
		$board[$col][$i] = $player;
		$done=true;

		break;
	    } 
	    else {

		$i++;
	    }
	}
	return $done;
    }

}