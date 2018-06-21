<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Generador Game</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.row{
			margin-left:5px;
			margin-right:5px;
		}
		label{
			cursor: pointer;
		}
	</style>
</head>
<body>
	<header>
		<h3>University Financial Services</h3>
	</header>
	<div class="container generador">
		<div class="row">
			<form style="width: 100%;" method="POST" action="game-dinamico.php">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
						    <label for="Preguntas">Selecciona tus preguntas</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="1" id="preguntas_1" name="preguntas[]" value="¿Cuáles son los plazos de Credit ?">1.¿Cuáles son los plazos de Credit ?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						    <label for="Respuestas">Selecciona tus opciones multiples</label>
						</div>
						<div class="checkbox">
						  <label><input type="checkbox" id="respuestas_1" name="respuestas[]" value="a.- 12,24,36,48 y 60/b.- 12,18,24,36, 48 y 60/c.- 12,18,24,30,36, 48, 54 y 60 (Nota: 66 y 72 meses son plazos piloto)">a.- 12,24,36,48 y 60 <br>
							b.- 12,18,24,36, 48 y 60 <br>
							c.- 12,18,24,30,36, 48, 54 y 60 (Nota: 66 y 72 meses son plazos piloto)
						  </label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
						    <label for="Respuestas">Selecciona tu respuesta correcta</label>
						</div>
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_1" name="respuestas_2[]" value="c.- 12,18,24,30,36, 48, 54 y 60 (Nota: 66 y 72 meses son plazos piloto)">c.- 12,18,24,30,36, 48, 54 y 60 (Nota: 66 y 72 meses son plazos piloto)</label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 2  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="2" id="preguntas" name="preguntas[]" value="Dos de las características de Credit son:">2.Dos de las características de Credit son:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_2" name="respuestas[]" value="a.- Son pagos programados y mensualidades/b.- Se pueden hacer aportaciones a capital y terminaciones anticipadas sin penalización/c.- Se pueden pagar anualidades y las mensualidades al mismo tiempo">a.- Son pagos programados y mensualidades <br>
							b.- Se pueden hacer aportaciones a capital y terminaciones anticipadas sin penalización <br>
							c.- Se pueden pagar anualidades y las mensualidades al mismo tiempo
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_2" name="respuestas_2[]" value="b.- Se pueden hacer aportaciones a capital y terminaciones anticipadas sin penalización">b.- Se pueden hacer aportaciones a capital y terminaciones anticipadas sin penalización
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 3  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="3" id="preguntas_3" name="preguntas[]" value="¿Para qué tipo de clientes aplica?">3.	¿Para qué tipo de clientes aplica?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_3" name="respuestas[]" value="a.- PFA, PFNA, PN/b.- PM, PFNA, PFA/c.- Todas excepto Persona Moral">
								a.- PFA, PFNA, PN<br>
								b.- PM, PFNA, PFA <br>
								c.- Todas excepto Persona Moral <br>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_3" name="respuestas_2[]" value="b.- PM, PFNA, PFA">b.- PM, PFNA, PFA
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 3  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="4" id="preguntas_4" name="preguntas[]" value="Los abogados pueden comprar con Credit :">4.	Los abogados pueden comprar con Credit :</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_4" name="respuestas[]" value="a.- No, porque son personas muy conflictivas/b.- No existe ninguna restricción por cuestiones profesión/c.- Sí, sólo si es Abogado de los Civil">
								a.- No, porque son personas muy conflictivas <br>
								b.- No existe ninguna restricción por cuestiones profesión <br>
								c.- Sí, sólo si es Abogado de los Civil
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_4" name="respuestas_2[]" value="b.- No existe ninguna restricción por cuestiones profesión">b.- No existe ninguna restricción por cuestiones profesión
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 3  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="5" id="preguntas_5" name="preguntas[]" value="¿En qué compañía se pueden hacer Abonos a capital durante la vida del contrato?">5.	¿En qué compañía se pueden hacer Abonos a capital durante la vida del contrato?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_5" name="respuestas[]" value="a) Únicamente VWB./b) Únicamente a VWL./c) Ambas compañías.">
								a) Únicamente VWB. <br>
								b) Únicamente a VWL. <br>
								c) Ambas compañías.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_5" name="respuestas_2[]" value="c) Ambas compañías.">c) Ambas compañías.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 3  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="6" id="preguntas_6" name="preguntas[]" value="El cliente puede liquidar Credit anticipadamente, solo y cuando:">6.	El cliente puede liquidar Credit anticipadamente, solo y cuando:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_6" name="respuestas[]" value="a) Pague una penalización./b) Haga el pago total para finalizar el contrato antes de la fecha original./c) No se puede, el cliente debe cumplir con el plazo establecido en el contrato. ">
								a) Pague una penalización. <br>
								b) Haga el pago total para finalizar el contrato antes de la fecha original. <br>
								c) No se puede, el cliente debe cumplir con el plazo establecido en el contrato. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_6" name="respuestas_2[]" value="b) Haga el pago total para finalizar el contrato antes de la fecha original.">b) Haga el pago total para finalizar el contrato antes de la fecha original.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 7  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="7" id="preguntas_7" name="preguntas[]" value="¿Una persona moral puede comprar un vehículo a través de Credit, o solamente es para Personas Físicas Asalariadas?">7.	¿Una persona moral puede comprar un vehículo a través de Credit, o solamente es para Personas Físicas Asalariadas?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_7" name="respuestas[]" value="a) no, solo es para PFA/b) si, sólo vehículos comerciales/c) si, siempre y cuando cumpla con los requisitos para adquirir el crédito. ">
								a) no, solo es para PFA <br>
								b) si, sólo vehículos comerciales <br>
								c) si, siempre y cuando cumpla con los requisitos para adquirir el crédito. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_7" name="respuestas_2[]" value="c) si, siempre y cuando cumpla con los requisitos para adquirir el crédito. ">c) si, siempre y cuando cumpla con los requisitos para adquirir el crédito. 
						  </label>
						</div>
					</div>
				</div>
				<hr>


				<div class="row">
					<!-- Pregunta 8  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="8" id="preguntas_8" name="preguntas[]" value="En el producto de Credit, cuando el cliente va a contratar su seguro, este puede ser:">8.	En el producto de Credit, cuando el cliente va a contratar su seguro, este puede ser:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_8" name="respuestas[]" value="a) de contado, por cuenta cliente./b) de contado, financiado./c) de contado,  financiado o por cuenta cliente.">
								a) de contado, por cuenta cliente. <br>
								b) de contado, financiado. <br>
								c) de contado,  financiado o por cuenta cliente.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_8" name="respuestas_2[]" value="c) de contado,  financiado o por cuenta cliente.">c) de contado,  financiado o por cuenta cliente.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 9  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="9" id="preguntas_9" name="preguntas[]" value="Es obligación del cliente adquirir el servicio de mantenimiento y la garantía extendida:">9.	Es obligación del cliente adquirir el servicio de mantenimiento y la garantía extendida:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_9" name="respuestas[]" value="a) Sí, para mantener en buen estado y condiciones su vehículo y aumentar con esto la garantía original./b) La elección la tiene el cliente, según sus necesidades le podremos ofrecer dichos servicios desde el principio. /c) Sí, porque así lo establece el contrato de Credit.">
								a) Sí, para mantener en buen estado y condiciones su vehículo y aumentar con esto la garantía original. <br>
								b) La elección la tiene el cliente, según sus necesidades le podremos ofrecer dichos servicios desde el principio.  <br>
								c) Sí, porque así lo establece el contrato de Credit.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_9" name="respuestas_2[]" value="b) La elección la tiene el cliente, según sus necesidades le podremos ofrecer dichos servicios desde el principio. ">b) La elección la tiene el cliente, según sus necesidades le podremos ofrecer dichos servicios desde el principio. 
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 10  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="10" id="preguntas_10" name="preguntas[]" value="El cliente otorga un enganche y se le fijan mensualidades con opción de realizar pagos adicionales pactados al inicio del contrato.">10.	El cliente otorga un enganche y se le fijan mensualidades con opción de realizar pagos adicionales pactados al inicio del contrato.</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_10" name="respuestas[]" value="a)¿Cuáles son los beneficios que tiene el cliente?/b)¿Cómo funciona Credit con pagos programados?/c) Ninguna de las anteriores ">
								a)¿Cuáles son los beneficios que tiene el cliente? <br>
								b)¿Cómo funciona Credit con pagos programados? <br>
								c) Ninguna de las anteriores 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_10" name="respuestas_2[]" value="b)¿Cómo funciona Credit con pagos programados?">b)¿Cómo funciona Credit con pagos programados?
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 11  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="11" id="preguntas_11" name="preguntas[]" value="¿En Credit se pueden hacer aportaciones a capital?">11.	¿En Credit se pueden hacer aportaciones a capital?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_11" name="respuestas[]" value="a) Solo que la aportación sea igual al saldo insoluto/b) Si, siempre y cuando sea mayor a una mensualidad./c) No porque el saldo insoluto no se modificar.">
								a) Solo que la aportación sea igual al saldo insoluto <br>
								b) Si, siempre y cuando sea mayor a una mensualidad. <br>
								c) No porque el saldo insoluto no se modificar.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_11" name="respuestas_2[]" value="b) Si, siempre y cuando sea mayor a una mensualidad.">b) Si, siempre y cuando sea mayor a una mensualidad.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 12  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="12" id="preguntas_12" name="preguntas[]" value="Cuando hablamos de realizar uno o más pagos adicionales a la mensualidad, pactándolo desde el inicio del contrato nos referimos a:">12.	Cuando hablamos de realizar uno o más pagos adicionales a la mensualidad, pactándolo desde el inicio del contrato nos referimos a:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_12" name="respuestas[]" value="a) Son pagos programados/b) Abonos a capital./c) Terminación anticipada. ">
								a) Son pagos programados <br>
								b) Abonos a capital. <br>
								c) Terminación anticipada. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_12" name="respuestas_2[]" value="a) Son pagos programados">a) Son pagos programados
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 13  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="13" id="preguntas_13" name="preguntas[]" value="Cuando hablamos de que el cliente tiene la oportunidad de realizar abonos a capital durante la vida del contrato, significa que:">13.	Cuando hablamos de que el cliente tiene la oportunidad de realizar abonos a capital durante la vida del contrato, significa que:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_13" name="respuestas[]" value="a) Reduce la mensualidad y reduce el plazo del contrato./b) No afecta el plazo./c) Se puede dar en cualquier momento, pero solo afecta la mensualidad.">
								a) Reduce la mensualidad y reduce el plazo del contrato. <br>
								b) No afecta el plazo. <br>
								c) Se puede dar en cualquier momento, pero solo afecta la mensualidad.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_13" name="respuestas_2[]" value="c) Se puede dar en cualquier momento, pero solo afecta la mensualidad.">c) Se puede dar en cualquier momento, pero solo afecta la mensualidad.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 14  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="14" id="preguntas_14" name="preguntas[]" value="Los plazos de 6 a 60 meses de Credit sólo se da cuando:">14.	Los plazos de 6 a 60 meses de Credit sólo se da cuando:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_14" name="respuestas[]" value="a) El cliente elige el que mejor se acomode a sus necesidades/b) No existe este plazo de 6 meses/c) Este plazo se habilita si el cliente es condicionado a mayor plazo por Crédito al Retail">
								a) El cliente elige el que mejor se acomode a sus necesidades <br>
								b) No existe este plazo de 6 meses <br>
								c) Este plazo se habilita si el cliente es condicionado a mayor plazo por Crédito al Retail
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_14" name="respuestas_2[]" value="b) No existe este plazo de 6 meses">b) No existe este plazo de 6 meses
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 15  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="15" id="preguntas_15" name="preguntas[]" value="El monto mínimo a financiar en Credit es de:">15.	El monto mínimo a financiar en Credit es de:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_15" name="respuestas[]" value="a) 30%./b) $30,000.00/c) Ninguna de las anteriores.">
								a) 30%. <br>
								b) $30,000.00 <br>
								c) Ninguna de las anteriores.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_15" name="respuestas_2[]" value="b) $30,000.00">b) $30,000.00
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 16  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="16" id="preguntas_16" name="preguntas[]" value="Opción de hacer terminación anticipada cuando:">16.	Opción de hacer terminación anticipada cuando:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_16" name="respuestas[]" value="a) Paga una penalización./b) Corrió la primer mensualidad. /c) No existe la opción de terminaciones anticipadas">
								a) Paga una penalización. <br>
								b) Corrió la primer mensualidad.  <br>
								c) No existe la opción de terminaciones anticipadas
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_16" name="respuestas_2[]" value="b) Corrió la primer mensualidad. ">b) Corrió la primer mensualidad. 
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 17  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="17" id="preguntas_17" name="preguntas[]" value="¿Cuándo se tramita Credit por Volkswagen Bank?:">17.	¿Cuándo se tramita Credit por Volkswagen Bank?:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_17" name="respuestas[]" value="a) Cuando es PFA, PFP, PFNA y PM./b) Solo con PFA, vehículos de alta gama y sin pagos programados./c) Solo con PFA con pagos programados. ">
								a) Cuando es PFA, PFP, PFNA y PM. <br>
								b) Solo con PFA, vehículos de alta gama y sin pagos programados. <br>
								c) Solo con PFA con pagos programados. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_17" name="respuestas_2[]" value="b) Solo con PFA, vehículos de alta gama y sin pagos programados.">b) Solo con PFA, vehículos de alta gama y sin pagos programados.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 18  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="18" id="preguntas_18" name="preguntas[]" value="¿Con Credit se pueden financiar adicionales?:">18.	¿Con Credit se pueden financiar adicionales?:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_18" name="respuestas[]" value="">
								a) No, eso se debe pagar de contado. <br>
								b) Si, solo el seguro financiado. <br>
								c) Si, se puede financiar el Seguro, Accesorios, Mantenimientos prepagados, CPA,  , Garantía extendida, Lo Jack y otros. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_18" name="respuestas_2[]" value="c) Si, se puede financiar el Seguro, Accesorios, Mantenimientos prepagados, CPA,  , Garantía extendida, Lo Jack y otros. ">c) Si, se puede financiar el Seguro, Accesorios, Mantenimientos prepagados, CPA,  , Garantía extendida, Lo Jack y otros. 
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 19  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="19" id="preguntas_19" name="preguntas[]" value="¿A nombre de quien se factura el auto?:">19.	¿A nombre de quien se factura el auto?:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_19" name="respuestas[]" value="a)  A nombre de Volkswagen Leasing./b) A nombre del cliente./c) A nombre de la concesionaria. ">
								a)  A nombre de Volkswagen Leasing. <br>
								b) A nombre del cliente. <br>
								c) A nombre de la concesionaria. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_19" name="respuestas_2[]" value="b) A nombre del cliente.">b) A nombre del cliente.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 20  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="20" id="preguntas_20" name="preguntas[]" value="Los pagos programados para vehículos de alta gama se calculan en:">20.	Los pagos programados para vehículos de alta gama se calculan en:</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_20" name="respuestas[]" value="a) solo para VWB acordando desde el inicio del contrato./b) solo para VWL acordando desde el inicio del contrato./c) ambas compañías acordando desde el inicio del contrato.">
								a) solo para VWB acordando desde el inicio del contrato.
								b) solo para VWL acordando desde el inicio del contrato.
								c) ambas compañías acordando desde el inicio del contrato. 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_20" name="respuestas_2[]" value="b) solo para VWL acordando desde el inicio del contrato.">b) solo para VWL acordando desde el inicio del contrato.
						  </label>
						</div>
					</div>
				</div>
				<hr>


				<div class="row">
					<!-- Pregunta 21  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="21" id="preguntas_21" name="preguntas[]" value="¿Los pagos programados son anualidades?">21.	¿Los pagos programados son anualidades?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_21" name="respuestas[]" value="a.- Sí, porque normalmente se usan los aguinaldos/b.- Sí, porque se calculan de manera anual ya sea en enero o en mayo/c.- Los pagos programados también se conocen como pagos irregulares, porque el cliente decide en que mes realizar el pago. No son anualidades.">
								a.- Sí, porque normalmente se usan los aguinaldos <br>
								b.- Sí, porque se calculan de manera anual ya sea en enero o en mayo <br>
								c.- Los pagos programados también se conocen como pagos irregulares, porque el cliente decide en que mes realizar el pago. No son anualidades.
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_21" name="respuestas_2[]" value="c.- Los pagos programados también se conocen como pagos irregulares, porque el cliente decide en que mes realizar el pago. No son anualidades.">c.- Los pagos programados también se conocen como pagos irregulares, porque el cliente decide en que mes realizar el pago. No son anualidades.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 22  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="22" id="preguntas_22" name="preguntas[]" value="¿En qué plazos aplica pagos programados?">22.	¿En qué plazos aplica pagos programados?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_22" name="respuestas[]" value="a.- Solo en 60 meses/b.- En todos los plazos /c.- Solo en 24 a 48 meses">
								a.- Solo en 60 meses <br>
								b.- En todos los plazos  <br>
								c.- Solo en 24 a 48 meses
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_22" name="respuestas_2[]" value="b.- En todos los plazos ">b.- En todos los plazos 
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 23  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="23" id="preguntas_23" name="preguntas[]" value="¿Cuál es el monto mínimo para generar un pago programado?">23.	¿Cuál es el monto mínimo para generar un pago programado?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_23" name="respuestas[]" value="a.- El costo de la mensualidad/b.- Al menos dos mensualidades/c.- Al menos tres mensualidades">
								a.- El costo de la mensualidad <br>
								b.- Al menos dos mensualidades <br>
								c.- Al menos tres mensualidades
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_23" name="respuestas_2[]" value="a.- El costo de la mensualidad">a.- El costo de la mensualidad
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 24  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="24" id="preguntas_24" name="preguntas[]" value="¿En qué momento del plazo se logra el mejor efecto en pagos programados?">24.	¿En qué momento del plazo se logra el mejor efecto en pagos programados?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_24" name="respuestas[]" value="a.- Antes de la primera mitad del plazo /b.- En la segunda mitad del plazo/c.- En cualquier momento del plazo ">
								a.- Antes de la primera mitad del plazo <br> 
								b.- En la segunda mitad del plazo <br>
								c.- En cualquier momento del plazo 
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_24" name="respuestas_2[]" value="a.- Antes de la primera mitad del plazo ">a.- Antes de la primera mitad del plazo 
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 25  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="25" id="preguntas_25" name="preguntas[]" value="¿Se puede ocupar el 100% del ingreso adicional para el pago programado?">25.	¿Se puede ocupar el 100% del ingreso adicional para el pago programado?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_25" name="respuestas[]" value="a.- Máximo el 50%/b.- Sí siempre que el cliente lo decida, pero no es lo recomendable./c.- Al menos un 30%">
								a.- Máximo el 50% <br>
								b.- Sí siempre que el cliente lo decida, pero no es lo recomendable. <br>
								c.- Al menos un 30%
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_25" name="respuestas_2[]" value="b.- Sí siempre que el cliente lo decida, pero no es lo recomendable.">b.- Sí siempre que el cliente lo decida, pero no es lo recomendable.
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 26  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="26" id="preguntas_26" name="preguntas[]" value="Si un cliente solicita un plan a 48 meses ¿cuántos pagos programados pude incluir?">26.	Si un cliente solicita un plan a 48 meses ¿cuántos pagos programados pude incluir?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_26" name="respuestas[]" value="A.- tres/B.- cuatro/C.- los que requiera">
								A.- tres <br>
								B.- cuatro <br>
								C.- los que requiera
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_26" name="respuestas_2[]" value="C.- los que requiera">C.- los que requiera
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 27  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="27" id="preguntas_27" name="preguntas[]" value="¿Para qué tipo de perfil es el plan pagos programados?">27.	¿Para qué tipo de perfil es el plan pagos programados?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_27" name="respuestas[]" value="A.- Solo personas físicas asalariadas/B.- Solo personas físicas/C.- Personas Físicas y Morales">
								A.- Solo personas físicas asalariadas
								B.- Solo personas físicas
								C.- Personas Físicas y Morales
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_27" name="respuestas_2[]" value="C.- Personas Físicas y Morales">C.- Personas Físicas y Morales
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 28  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="28" id="preguntas_28" name="preguntas[]" value="¿Qué pasa si el cliente no tiene dinero para pagar el pago programado?">28.	¿Qué pasa si el cliente no tiene dinero para pagar el pago programado?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_28" name="respuestas[]" value="A.- Se desprograman los pagos y sube la mensualidad/B.- El pago programado genera intereses moratorios hasta que se liquide/C.- se suma el pago programado al capital">
								A.- Se desprograman los pagos y sube la mensualidad <br>
								B.- El pago programado genera intereses moratorios hasta que se liquide <br>
								C.- se suma el pago programado al capital
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_28" name="respuestas_2[]" value="B.- El pago programado genera intereses moratorios hasta que se liquide">B.- El pago programado genera intereses moratorios hasta que se liquide
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 29  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="29" id="preguntas_29" name="preguntas[]" value="¿Qué pasa con la mensualidad si el cliente hace abonos a capital cuando tiene Pagos programados?">29.	¿Qué pasa con la mensualidad si el cliente hace abonos a capital cuando tiene Pagos programados?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_29" name="respuestas[]" value="A.- Si es menor a la suma del total de los PP entonces la mensualidad sube/B.- Si es igual a la suma del total de los PP entonces la mensualidad queda igual/C.- Si es mayor a la suma del total de los PP entonces la mensualidad baja">
								A.- Si es menor a la suma del total de los PP entonces la mensualidad sube <br>
								B.- Si es igual a la suma del total de los PP entonces la mensualidad queda igual <br>
								C.- Si es mayor a la suma del total de los PP entonces la mensualidad baja
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_29" name="respuestas_2[]" value="A.- Si es menor a la suma del total de los PP entonces la mensualidad sube">A.- Si es menor a la suma del total de los PP entonces la mensualidad sube
						  </label>
						</div>
					</div>
				</div>
				<hr>

				<div class="row">
					<!-- Pregunta 30  -->
					<div class="col-sm-4">
						<div class="checkbox">
						  <label><input type="checkbox" class="principal" data-id="30" id="preguntas_30" name="preguntas[]" value="30.- ¿Se puede realizar pagos programados en Bank?">30.- ¿Se puede realizar pagos programados en Bank?</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label><input type="checkbox" id="respuestas_30" name="respuestas[]" value="A.- Si, solo personas físicas asalariadas y en gama alta/B.- No, solo existe la opción en VWL/C.- Solo si son operaciones de vehículos de gama alta y Personas físicas asalariadas">
								A.- Si, solo personas físicas asalariadas y en gama alta <br>
								B.- No, solo existe la opción en VWL <br>
								C.- Solo si son operaciones de vehículos de gama alta y Personas físicas asalariadas
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
						  <label>
						  	<input type="checkbox" id="respuestas_dos_30" name="respuestas_2[]" value="B.- No, solo existe la opción en VWL">B.- No, solo existe la opción en VWL
						  </label>
						</div>
					</div>
				</div>
				<hr>


				<button style="width: 100%;" class="btn btn-primary " name="download">Aceptar</button>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
		$(".principal").click(function() {
			data = $(this).attr("data-id");
			$( "#respuestas_"+data ).prop( "checked", $(this).prop("checked") );
			$( "#respuestas_dos_"+data ).prop( "checked", $(this).prop("checked") );
		});
    });
	</script>
</body>
</html>