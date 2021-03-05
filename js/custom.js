var intervalo;
var audioplayer = document.getElementById("reproductor");

var vol;

audioplayer.volume = 0.7;

function actualizaNombre() {
    intervalo = setInterval(leeNombre, 5000);
    }

function leeNombre() {
    $("#cancion").load("/streamtitle.php");
    }

leeNombre();
actualizaNombre();

$("#mute-bt").hide();

$("#play-bt").click(function(){
    if (audioplayer.paused) {
        audioplayer.play();
        $(this).hide();
        $("#mute-bt").show();
        $('#titulo').removeClass("text-info");
        $('#titulo').addClass("text-white");
        }   
    })

$("#mute-bt").click(function(){
    if (audioplayer.muted==true) {
        audioplayer.muted = false;
        $('#titulo').removeClass("text-info");
        $('#titulo').addClass("text-white");
        }   
    else {
        audioplayer.muted= true;
        $('#titulo').removeClass("text-white");
        $('#titulo').addClass("text-info");
        }
    })

$('input[type=range]').on('input', function () {
	audioplayer.volume = $(this).val();
	});


$('#idvol').on('wheel', function(event) {
  	if(event.originalEvent.deltaY < 0) {
		if (audioplayer.volume < 1) {
			vol = audioplayer.volume + 0.1;
			audioplayer.volume = vol;
			document.getElementById("rango").value = vol;
			}
  		}
  	else {
		if (audioplayer.volume > 0) {
			vol = audioplayer.volume - 0.1;
	        audioplayer.volume = vol;
			document.getElementById("rango").value = vol;
			}
  		}
	});

$("#menos").click(function(){
	if (audioplayer.volume > 0) {
		vol = audioplayer.volume - 0.1;
		audioplayer.volume = vol;
		document.getElementById("rango").value = vol;
		}
	})

$("#mas").click(function(){
    if (audioplayer.volume < 1) {
        vol = audioplayer.volume + 0.1;
        audioplayer.volume = vol;
        document.getElementById("rango").value = vol;
        }
    })
