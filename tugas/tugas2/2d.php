<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php</title>
    <style>
        .board {
			display: grid;
			grid-template-columns: repeat(8, 50px);
			grid-template-rows: repeat(8, 50px);
		}
        
		.board div {
            width: 50px;
			height: 50px;
			font-size: 30px;
			text-align: center;
			line-height: 50px;
            border: 2px solid black;
		}

		.white {
			background-color: white;
			color: black;
		}

		.black {
			background-color: black;
			color: white;
		}
    </style>
</head>
<body>
<div class="board">
		<?php
			for ($i = 1; $i <= 8; $i++) {
				for ($j = 1; $j <= 8; $j++) {
					if (($i + $j) % 2 == 0) {
						echo '<div class="white"></div>';
					} else {
						echo '<div class="black"></div>';
					}
				}
			}
		?>
	</div>
</body>
</html>