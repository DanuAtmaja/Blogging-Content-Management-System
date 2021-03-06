@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')


	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new Category
		</div>
	</div>

	<div class="panel-body">
		<form action="{{ route('category.store')}}" method="post" >
			{{ csrf_field() }}
			<div class="form-group">
				<label for="name">Title</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<div class="text-center">
					<button type="submit" class="btn btn-success">Store Category</button>
				</div>
			</div>
		</form>
	</div>
@stop