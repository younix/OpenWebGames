<?php

$game = simplexml_load_file("../board.xml");

function draw_board()
{
	for($y = 0; $y < $game->board["hight"]; $y++) {
		$line = "<tr>";
		for( $x = 0; $x < $game->board["width"]; $x++) {
			
			$field = "<td class=\"field\" />";
		}
		
		$line .= $field . "</tr>";

		print("\n");
	}
}

?>
