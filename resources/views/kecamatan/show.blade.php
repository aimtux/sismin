@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Tampilan Data Kecamatan</div>

				<div class="panel-body">
				<h2>{{ $kecamatan->nama_kecamatan }}</h2>
				<p>
					<ul>
						@foreach ($kecamatan->kelurahan as $value)
							<li>{{ $value->nama_kelurahan }}</li>
						@endforeach    
        			</ul>
    			</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection