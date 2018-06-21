$(document).ready(function() {

	/***********************/
	 var obj = document.createElement("audio");
	  
	  obj.volume = 0.1;
	  obj.autoPlay = false;
	  obj.preLoad = true;
	  obj.controls = false;
	/***********************/

	/***********************/
	var suma = 0;
	var equipo =1;
	var i = 0,j=0,total,preg;
	$(".respuesta").hide();
	$(".boton-aceptar").hide();

	/********* Generar los números de los tablero ********/
	/*
	$(".numero-dos-fn").each(function () {
		var num = RandomNumber();
        $(this).html(num);
    });
	*/
    /********* Generar los números de los tablero ********/

/**********************XML*******************/
	var respuesta_1,respuesta_2,respuesta_3,respuesta;
	total_preguntas = new Array();
	total_respuestas = new Array();
	respuesta_correcta = new Array();

	total_preguntas  = [ "¿Cuál es la capital de Japón?","¿Cuantos países hay en America?","¿Cuál es la religión más practica en India?","¿En que año terminó la segunda guerra mundial?","¿En que año VW llegó a México?"];
	total_respuestas = [ "Perú,Lima,Tokio","35,50,20","Budismo,Islam,Hinduismo","1945,1935,1950","1980,1970,1964"];
	respuesta_correcta = ["Tokio","35","Hinduismo","1945","1964"];
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

		var array = respuesta.split(',');
		respuesta_1 = array[0];
		respuesta_2 = array[1];
		respuesta_3 = array[2];
		if(!$("input[name='preguntas']").is(':checked')){
			alert("Escribe tu valor");
		}else{
			var cliente = $('input[name=preguntas]:checked').val();
			if(cliente === valor){
				obj.src = "audio/aplausos.mp3";
	    		obj.play();
				$("#mensaje_respuesta").html("Correcto");
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
		var array = respuesta.split(',');
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
		var num,num_2,num_3,num_4,num_resultado;
		num = RandomNumber();
		num_2 = RandomNumber();
		num_3 = RandomNumber();
		num_4 = RandomNumber();
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