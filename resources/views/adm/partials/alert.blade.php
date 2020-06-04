@if ($errors->any())
	<div class="card-panel alert-error" style="background-color: red; color: white">
		<ul><li>ALERTA:
				@foreach ($errors->all() as $error)
					{{ $error }}
				@endforeach
			</li>
		</ul>
	</div>
@endif

@if (session('alert'))
	<div class="card-panel alert-success">
		<ul><li>ALERTA:
				{{ session('alert') }}
			</li>
		</ul>
	</div>
@endif