@extends("layouts.app")
@section("content")
<div class="container bg bg-info text-center">
		<div class="row">
			<div class="col-11 mt-3 mb-3 ms-5 me-3 bg bg-primary text-white rounded-pill">
				<h1 class="mt-4 p-2">Christopher Kevin Cruz Cruz</h1>
				<h5 class="p-2">Ingeniero en Sistemas Computacionales</h5>
		</div>


</div>

<div class="container bg-primary p-4 d-flex justify-content-center">
    <div class="col-10 mt-3 mb-5 bg-info d-flex flex-column align-items-center p-4 rounded shadow text-white">

        <!-- Imagen con borde blanco delgado y perfectamente circular -->
        <div class="d-flex justify-content-center align-items-center rounded-circle" 
             style="width: 130px; height: 130px; background-color: white; border: 3px solid white;">
            <img src="{{ asset('img/senku.png') }}" class="rounded-circle" style="width: 120px; height: 120px;" alt="">
        </div>

        <!--Quien soy-->
        <h3 class="mt-3 fw-bold text-white">Quién soy</h3>

        <!-- Texto debajo de la imagen -->
        <div class="bg-dark text-white p-3 rounded w-100 text-center rounded-pill">
            <p class="mb-0">
                Mi nombre es Christopher Kevin Cruz Cruz, nací el 19 de noviembre del 2004 en Toluca Estado de México. Mis padres son Florencio Cruz Vera y Yasmin Cruz Méndez. 
                Tres años después de mi nacimiento nos mudamos a un pueblo llamado Los Saucos, perteneciente a Valle de Bravo. 
                Crecí siendo hijo único, lo cual hizo complicada mi interacción con otros niños de mi edad, así como la relación con mis primos nunca fue la mejor. 
                Prácticamente estuve solo toda la etapa de mi niñez.
            </p>
        </div>

        <h3 class="mt-3 fw-bold text-white">Mis Estudios</h3>

        <div class="bg-dark text-white p-3 rounded w-100 text-center mb-3 rounded-pill">
        	<p class="mb-0">
        		Estudié en la escuela primaria Juana de Asbaje donde descubrí el arte de aprender y conocer cosas nuevas, así como conocer amigos y vivir grandes experiencias, después de los 6 años de primaria, llego la etapa de la secundaria la cual fue demasiado rápida y algo distinto a la primaria fue una gran etapa, pero no la mejor, después llego la preparatoria la cual fue muy difícil debido a la pandemia que se vivió en 2019.
        	</p>
        </div>	

        	<h3 class="mt-3 fw-bold text-white">Mis Pasatiempos</h3>

        	<div class="bg-dark text-white p-3 rounded w-100 text-center mb-3 rounded-pill">
        		<p class="mb-0">
        			2 años después de ingresar a la primaria desarrolle una habilidad la cual hoy en día es mi mejor pasatiempo y esa es dibujar, desde temprana edad me enamore del arte del dibujo y no solo eso si que otro de mis pasatiempos favoritos son los videojuegos, lo cual desde niño me adentre a este mundo de los videojuegos. 
        		</p>
        	</div>	

        	<h3 class="mt-3 fw-bold text-white">Mis habilidades</h3>

        	<div class="bg-dark text-white p-2 rounded w-80 text-center mb-3 rounded-pill">
        		<ul class="list-unstyled">
        			<li><i class="bi bi-check-circle"></i>Desarrollo de videojuegos</li>
        			<li><i class="bi bi-check-circle"></i>Desarrollo de aplicaciones web</li>
        			<li><i class="bi bi-check-circle"></i>Desarrollo de software</li>
        		</ul>
        	</div>

    </div>
</div>	

@endsection
