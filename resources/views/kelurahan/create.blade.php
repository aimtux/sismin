@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Masukan Data Kelurahan</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'kelurahan')) !!}
					<div class="form-group">
					{!! Form::label('kecamatan_id', 'Kecamatan') !!}
					{!! Form::select('kecamatan_id', $kecamatan, Input::old('kecamatan_id'), array('class' => 'form-control')) !!}
					</div>

					<div class="form-group">
					{!! Form::label('nama_kelurahan', 'Kelurahan') !!}
					{!! Form::text('nama_kelurahan', Input::old('nama_kelurahan'), array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Input Data!', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection