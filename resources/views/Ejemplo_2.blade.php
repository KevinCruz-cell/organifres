@extends("layouts.app")
@section("content")
	<div class="container bg bg-white">
		<div class="row">
			<div class="col-7 mt-4 mb-0 bg bg-secondary text-white">
				<h1 class="mt-4 p-4">César Primero Huerta</h1>
				<h4 class="p-4">Ingeniero en Sistemas Computacionales</h4>
				<div class="row p-4">
					<div class="col">isprimerocesar@gmail.com</div>
					<div class="col">777777777</div>
				</div>
				
			</div>
			<div class="col-5 mt-4 mb-0 bg bg-success">
				<img src="{{asset('img/boy.png')}}" class=" rounded-circle mx-auto d-block w-50" alt="...">
				
			</div>
		</div>
		<div class="row">
			<div class="col-7 mt-4 pt-4">
				<div class="row justify-content-center">
					<div class="col-7">
						<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Perfil</h2>
						<p class="pt-2">
						Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Sequi, corporis quibusdam esse quisquam ipsum, magnam officia vel, doloribus dolore fugit assumenda voluptatibus, consequuntur! Atque dolor in facere ipsam perspiciatis quibusdam.	
						</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-7">
						<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Eduación</h2>
						<div class="row pt-4 border-bottom border-black">
							<div class="col">
								<h4>Ingeniero en sistemas computacionales</h4>
								<p>
									Tecnológico de Estudios Superiores de Valle de Bravo, carretera federal Monumento Valle de Bravo, Valle de Bravo, México. CP 51200
								</p>
							</div>
						</div>
						<div class="row pt-4">
							<div class="col">
								<h4>Mestro en Ingeniería en Sistemas Computacionales</h4>
								<p>Tecnológico de Estudios Superiores de Ecatepec, Ecaptec de Morelos México</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-7">
						<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Empleos anteriores</h2>
						<ul class="p-4 ms-4">
							<li>Docente en el TESVB</li>
							<li> Desarrollador web en wootbit.io</li>
							<li>Analista de datos en bitbr.io</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-5 bg bg-success">
			<div class="row">
				<div class="col mt-4 pt-4">
					<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Habilidades</h2>
					<ul class="list-group mt-4 mb-4">
						<li class="list-group-item justify-content-between align-items-start border-0 bg-success text-white">
							<div class="ms-2 me-auto">
								<div class="fw-bold">Ingles</div>
								<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar w-50"></div>
								</div>
							</div>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-start border-0 bg-success text-white w-100">
							<div class="ms-2 me-auto">
								<div class="fw-bold">Computación</div>
								<div class="progress w-100" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar" style="width: 50%;"></div>
							</div>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-start border-0 bg-success text-white">
							<div class="ms-2 me-auto">
								<div class="fw-bold">Actitud</div>
								<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar w-20"></div>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Certificaciones</h2>
					<div class="col-0 mt-0 mb-0  text-white">
					<p>
						Certificacion en Programacion web
					</p>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="text-white-emphasis bg bg-success-subtle border border-success-subtle text-secondaryu text-center pt-1 pb-1">Lenguajes</h2>
					<div class="col-0 mt-0 mb-0  text-white">
					<div class="ms-2 me-auto">
							<div class="fw-bold">Ingles</div>
							<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-bar w-50"></div>
							</div>
							<div class="ms-2 me-auto">
								<div class="fw-bold">Frances</div>
								<div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
									<div class="progress-bar w-25"></div>
								</div>
							</div>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
@endsection
