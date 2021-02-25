var intervalo;
var audioplayer = document.getElementById("reproductor");

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


