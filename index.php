<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content='Descripción de'>
    <meta name='author' content='Octavio Rossell'>
	<title>RadioÑú</title>
    <link rel='icon' href='/imgs/favicon.png'>
	<link href='/css/bootstrap.min.css' rel='stylesheet'>
	<link href='/css/bootstrap-slider.css' rel='stylesheet'>
	<link href='/css/audio.css' rel='stylesheet'>
	<script src='/js/jquery-3.5.1.js'></script>
</head>
<body class='bg-dark p-4' style=' background-image: url("imgs/fondo.png"); background-size: 100% 100%;'>
	<audio id='reproductor'>
    	<source src='http://stream.radiognu.org/listen.ogg' type='audio/ogg'>
    </audio>

	<div class='container '>
		<div class='row justify-content-md-center align-items-center mt-0 mb-2 p-0'>
            <div class='col-md-auto text-center py-4' style='
                background-color: rgba(255, 255, 255, 0.7); 
                border-radius: 15px; 
                min-width: 50%;
                '>
				<img src='imgs/banner.png' width='100%'>
			</div>
		</div>
    	<div class='row justify-content-md-center align-items-center '>
        	<div class='col-md-auto text-center py-0' style='
				background-color: rgba(0, 0, 0, 0.5); 
				border-radius: 15px; 
				min-width: 50%;
				'>
				<div class='row justify-content-md-center align-items-center'>
					<div class='col pt-2'>
						<div id='titulo' class='text-center text-info font-weight-bold pt-0 mt-0' style='width: '>Sonando:<br />
                            <span id='cancion' class='font-weight-bold pb-0 mb-0' style='width: '> &nbsp; </span>
                        </div>
					</div>
				</div>
				<div class='row justify-content-md-center align-items-center py-4'>
					<div class='col align-self-center text-white'>
						<div id='play-bt' class='pb-2'><img src='imgs/play.svg' width='150px'></div>
						<div id='mute-bt' class='pb-2'><img src='imgs/play.svg' width='150px'></div>
						-<input type="range" class=' mt-4' id="vol" name="vol" min="0" max="1" value='0.7' step='0.1'>+
					</div>
				</div>
        	</div>
	    </div>
	</div>
<script src='/js/custom.js'></script>
</body>
</html>
