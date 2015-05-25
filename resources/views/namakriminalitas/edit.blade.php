@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Ganti Nama Kriminalitas</div>

				<div class="panel-body">
					{!! Html::ul($errors->all()) !!}

					{!! Form::model($namakriminalitas, array('route' => array('nama-kriminalitas.update', $namakriminalitas->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('nama_kriminalitas', 'Nama Kriminalitas') !!}
					{!! Form::text('nama_kriminalitas', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Ganti Nama Kriminalitas', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection