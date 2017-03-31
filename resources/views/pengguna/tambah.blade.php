@extends('master')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('pengguna')}}">
		<i style="color: white;" class="fa text-default fa-chevron-left"></i>
		</a>Tambah data pengguna</strong>
	</div>

	{!! Form::open(['class' => 'form-horizontal','url' => 'pengguna/simpan']) !!}
		@include('pengguna.form')
		
		<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary">
				<i class="fa fa-save">Simpan</i>
			</button>
			<button class="btn btn-danger">
				<i class="fa fa-undo">Ulangi</i>
			</button>
		</div>
		{!! form::close() !!}
		</div>
@stop