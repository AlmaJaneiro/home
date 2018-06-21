<?php 

	header("Content-Disposition: attachment; filename=\"index.html\"");
	header("Content-Type: application/force-download");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bingo University</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=20">
	
</head>
<body>
	<div class="main">
		<div class="contenedor-btn">
			<div class="bton">
				<img id="click-aqui" class="click-aqui" src="img/enter.png">
			</div>
		</div>
		<div id="bolas" class="bolas"></div>
		<div class="contendor-bingo">
			<img id="tombola" src="img/contenedor-2.png">
		</div>
		<div id="resultado" class="resultado"> </div>
		<div id="counter" class="counter"></div>

		<div class="team">
			<label id="equipo"></label>
		</div>

		<!-- Tablero -->
		<div class="tablero">
			<div class="circulin-dos crl" style="left: 40px;"></div>
			<div class="circulin crl" 	style="left: 80px;"></div>
			<div class="circulin-dos crl" style="left: 120px;"></div>
			<div class="circulin crl" style="left: 160px;"></div>
			<div class="circulin-dos crl" style="left: 200px;"></div>
			<div class="circulin crl" style="left: 240px;"></div>
			<div class="circulin-dos crl" style="left: 280px;"></div>
			<div class="circulin crl" style="left: 320px;"></div>
			<div class="circulin-dos crl" style="left: 360px;"></div>
			<div class="circulin crl" style="left: 400px;"></div>
			<div class="circulin-dos crl" style="left: 440px;"></div>
			<div class="circulin crl" style="left: 480px;"></div>
			<div class="circulin-dos crl" style="left: 520px;"></div>
			<div class="circulin crl" style="left: 560px;"></div>
			<div class="circulin-dos crl" style="left: 600px;"></div>
			<div class="circulin crl" style="left: 640px;"></div>
			<div class="circulin-dos crl" style="left: 680px;"></div>
			<div class="circulin crl" style="left: 720px;"></div>
			<div class="circulin-dos crl" style="left: 760px;"></div>
			<div class="circulin crl" style="left: 800px;"></div>
			<div class="circulin-dos crl" style="left: 840px;"></div>
			<div class="circulin crl" style="left: 880px;"></div>
			<div class="circulin-dos crl" style="left: 920px;"></div>
			<div class="circulin crl" style="left: 960px;"></div>
			<div class="circulin-dos crl" style="left: 1000px;"></div>
			<div class="circulin crl" style="left: 1040px;"></div>
			<div class="circulin-dos crl" style="left: 1080px;"></div>
			<div class="circulin crl" style="left: 1120px;"></div>
			<div class="circulin-dos crl" style="left: 1160px;"></div>
			<div class="circulin" style="position: absolute;left: 1207px;top: -9px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 1198px;top: 33px;"></div>
			<div class="circulin" style="position: absolute;left: 1191px;top: 73px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 1184px;top:113px;"></div>
			<div class="circulin" style="position: absolute;left: 1177px;top: 153px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 1170px;top:193px;"></div>
			<div class="circulin" style="position: absolute;left: 1163px;top:233px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 1154px;top:273px;"></div>
			<div class="circulin" style="position: absolute;left: 1144px;top:313px;"></div>
			<div class="circulin-dos crcl" style="left: 1106px;"></div>
			<div class="circulin crcl" style="left: 1066px;"></div>
			<div class="circulin-dos crcl" style="left: 1026px;"></div>
			<div class="circulin crcl" style="left: 986px;"></div>
			<div class="circulin-dos crcl" style="left: 946px;"></div>
			<div class="circulin crcl" style="left: 906px;"></div>
			<div class="circulin-dos crcl" style="left: 866px;"></div>
			<div class="circulin crcl" style="left: 826px;"></div>
			<div class="circulin-dos crcl" style="left: 786px;"></div>
			<div class="circulin crcl" style="left: 746px;"></div>
			<div class="circulin-dos crcl" style="left: 706px;"></div>
			<div class="circulin crcl" style="left: 666px;"></div>
			<div class="circulin-dos crcl" style="left: 626px;"></div>
			<div class="circulin crcl" style="left: 586px;"></div>
			<div class="circulin-dos crcl" style="left: 546px;"></div>
			<div class="circulin crcl" style="left: 506px;"></div>
			<div class="circulin-dos crcl" style="left: 466px;"></div>
			<div class="circulin crcl" style="left: 426px;"></div>
			<div class="circulin-dos crcl" style="left: 386px;"></div>
			<div class="circulin crcl" style="left: 346px;"></div>
			<div class="circulin-dos crcl" style="left: 306px;"></div>
			<div class="circulin crcl" style="left: 266px;"></div>
			<div class="circulin-dos crcl" style="left: 226px;"></div>
			<div class="circulin crcl" style="left: 186px;"></div>
			<div class="circulin-dos crcl" style="left: 146px;"></div>
			<div class="circulin crcl" style="left: 106px;"></div>
			<div class="circulin-dos crcl" style="left: 66px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 35px;top: 313px;"></div>
			<div class="circulin" style="position: absolute; left:24px;top:273px;"></div>
			<div class="circulin-dos" style="position: absolute; left: 17px;top: 231px;"></div>
			<div class="circulin" style="position: absolute;left: 12px;top:191px;"></div>
			<div class="circulin-dos" style="position: absolute;left: 5px;top: 151px;"></div>
			<div class="circulin" style="position: absolute;left:-1px;top:111px;"></div>
			<div class="circulin-dos" style="position: absolute;left:-9px;top:71px;"></div>
			<div class="circulin" style="position: absolute;left: -16px;top:31px;"></div>
		</div>
		<!-- Tablero -->

		<!-- Área de preguntas -->
		<div class="pregunta">
			<label id="pregunta"></label>
		</div>
		<div class="respuesta">
			<!-- <input type="text" class="form-control" id="respuesta" name="respuesta">-->
			<div class="radio" style="padding-bottom: 25px;">
			  <label><input type="radio" id="radio_1" name="preguntas"><span id="span_1"></span></label>
			</div>
			<div class="radio" style="padding-bottom: 22px;">
			  <label><input type="radio" id="radio_2" name="preguntas"><span id="span_2"></span></label>
			</div>
			<div class="radio disabled">
			  <label><input type="radio" id="radio_3" name="preguntas"><span id="span_3"></span></label>
			</div>
		</div>
		<div class="boton-aceptar">
			<button class="btn btn-primary">Aceptar</button>
		</div>
		<div class="mensaje_correcto">
			<label id="mensaje_respuesta"></label>
		</div>
		<!-- Área de preguntas -->

	</div>


</body>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {

			/***********************/
			 var obj = document.createElement("audio");
			  
			  obj.volume = 0.1;
			  obj.autoPlay = false;
			  obj.preLoad = true;
			  obj.controls = false;
			/***********************/

			var suma = 0;
			var equipo =1;
			var i = 0,j=0,total,preg;
			$(".respuesta").hide();
			$(".boton-aceptar").hide();

			/*
				$(".numero-dos-fn").each(function () {
					var num = RandomNumber();
			        $(this).html(num);
			    });
			*/

		/**********************XML*******************/
			var respuesta_1,respuesta_2,respuesta_3,respuesta;
			total_preguntas = new Array();
			total_respuestas = new Array();
			respuesta_correcta = new Array();

			total_preguntas  = 		[ <?php foreach($_POST['preguntas'] as $selected) {echo '"'.$selected.'"'.",";}?>];
			total_respuestas = 		[ <?php foreach($_POST['respuestas'] as $selected) {echo '"'.$selected.'"'.",";}?>];
			respuesta_correcta = 	[ <?php foreach($_POST['respuestas_2'] as $selected) {echo '"'.$selected.'"'.",";}?>];
			/**********************XML*******************/

			$("#click-aqui").click(function() {
				$('input[type="radio"]').prop('checked', false);
				$("#click-aqui").hide();
				$("#mensaje_respuesta").html("");
				Preguntas();
			});

			$(".btn-primary").click(function(){
				var current_id = $("#pregunta").attr("data-id");
				var valor = respuesta_correcta[current_id];
		    	respuesta = total_respuestas[current_id];

				var array = respuesta.split('/');
				respuesta_1 = array[0];
				respuesta_2 = array[1];
				respuesta_3 = array[2];
				if(!$("input[name='preguntas']").is(':checked')){
					alert("Escribe tu valor");
				}else{
					var cliente = $('input[name=preguntas]:checked').val();
					if(cliente === valor){
						$("#mensaje_respuesta").html("Correcto");
						obj.src = "audio/aplausos.mp3";
	    				obj.play();
						Animacion();
					}else{
						obj.src = "audio/boo.mp3";
	    				obj.play();
						$("#mensaje_respuesta").html("Incorrecto, la respuesta es : <br>"+valor);
						Animacion();
					}
				}
			});
			
			function Preguntas(){
				turno();
			    total = total_respuestas.length;
			    if(suma<=(total-1)){
				respuesta = total_respuestas[suma];
				var array = respuesta.split('/');
				respuesta_1 = array[0];
				respuesta_2 = array[1];
				respuesta_3 = array[2];
			    console.log("Suma : "+suma+ " Lenght"+(total-1));
			    	preg = total_preguntas[suma];
			    	$("#pregunta").html(preg);
			    	$("#pregunta").attr("data-id",suma);;
			    	$("#radio_1").attr("value",respuesta_1);
					$("#radio_2").attr("value",respuesta_2);
					$("#radio_3").attr("value",respuesta_3);
			    	$("#span_1").html(respuesta_1);
					$("#span_2").html(respuesta_2);
					$("#span_3").html(respuesta_3);
			    	$(".respuesta").show()
			    	countdown(1);
			    	obj.src = "audio/cuenta-regresiva.mp3";
	    			obj.play();
			    	suma ++;
			    }
			    else{
			    	$("#mensaje_respuesta").html("El juego ha finalizado");
			    }
			}


			function Animacion(){
				var num,num_2,num_3,num_4,num_5,num_6,num_resultado;
				num = RandomNumber();
				num_2 = RandomNumber();
				num_3 = RandomNumber();
				num_4 = RandomNumber();
				num_5 = RandomNumber();
				num_6 = RandomNumber();
					$("#pregunta").html("");
					$(".boton-aceptar").hide();
			    	$("#respuesta").val("");
			    	$(".respuesta").hide();

				$("#resultado").html("");
				num_resultado = RandomNumber();
				var html = '<div id="ballWrapper">'+
				'    <div id="ball">'+
				'    	<div class="border-circle">'+
				'	    	<div class="circulo">'+
				'	    		<p class="numero-fixed">'+num+'</p>'+
				'	    	</div>'+
				'    	</div>'+
				'    </div>	'+
				'  </div>'+
				' <div id="bingo-2">'+
				'    <div id="bola-2">'+
				'    	<div class="border-circle">'+
				'	    	<div class="circulo">'+
				'	    		<p class="numero-fixed">'+num_2+'</p>'+
				'	    	</div>'+
				'    	</div>'+
				'    </div>		'+
				'  </div>'+
				' <div id="bingo-3">'+
				'    <div id="bola-3">'+
				'    	<div class="border-circle">'+
				'	    	<div class="circulo">'+
				'	    		<p class="numero-fixed">'+num_3+'</p>'+
				'	    	</div>'+
				'    	</div>'+
				'    </div>		'+
				'  </div>'+
				' <div id="bingo-4">'+
				'    <div id="bola-4">'+
				'    	<div class="border-circle">'+
				'		  	<div class="circulo">'+
				'		  		<p class="numero-fixed">'+num_4+'</p>'+
				'		  	</div>'+
				'  		</div>'+
				'    </div>		'+
				'  </div>';

				var resultado = '<div id="bingo-7">'+
								'    <div id="bola-7">'+
								'    	<div class="border-circulo">'+
								'		  	<div class="circulo-dos">'+
								'		  		<p class="numero-dos">'+num_resultado+'</p>'+
								'		  	</div>'+
								'  		</div>'+
								'    </div>'+
								'</div>';	

				$("#tombola").attr("src","img/contenedor.png");
				$("#bolas").html(html);
				setTimeout(function() {
					$("#bolas").html("");
					$("#tombola").attr("src","img/contenedor-2.png");
					$("#resultado").html(resultado);
					$("#click-aqui").show();
		   		}, 6500);

			}

			function RandomNumber(){
				var numero;
				numero = Math.floor(Math.random() * 31) + 1;
				return numero;
			}
			/****/
			function countdown(minutes) {
			    var seconds = 11;
			    var mins = minutes
			    function tick() { 
			        var counter = document.getElementById("counter");
			        var current_minutes = mins-1
			        seconds--;
			        counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
			        if( seconds > 0 ) {
			            setTimeout(tick, 1000);
			        } else {
			            if(mins > 1){
			                countdown(mins-1);           
			            }
			        }
			        if(seconds == 0){
			        	$(".boton-aceptar").show();
			        }
			    }
			    tick();
			}
			/****/

			function turno(){
				if(equipo >4){
					equipo = 1;
					$("#equipo").html("Equipo "+equipo);
				}
				else{
					$("#equipo").html("Equipo "+equipo);
				}
				equipo++;
			}
		});
	</script>
</html>


