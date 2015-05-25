@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Masukan Nama Kriminalitas</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::open(array('url' => 'nama-kriminalitas')) !!}

					<div class="form-group">
					{!! Form::label('nama_kriminalitas', 'Nama Kriminalitas') !!}
					{!! Form::text('nama_kriminalitas', Input::old('nama_kriminalitas'), array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Input Data!', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection