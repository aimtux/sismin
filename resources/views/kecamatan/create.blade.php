@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Masukan Data Kecamatan</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'kecamatan')) !!}

					<div class="form-group">
					{!! Form::label('nama_kecamatan', 'Kecamatan') !!}
					{!! Form::text('nama_kecamatan', Input::old('nama_kecamatan'), array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Input Data!', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection