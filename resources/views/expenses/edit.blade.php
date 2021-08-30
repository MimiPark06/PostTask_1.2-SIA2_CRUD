@extends('expenses.layout')

@section('content')

	<dic class="row">
	
	<div class="col-lg-12 margin-tb">
	<div class="pull-left">
	<h2>Edit Item</h2>

</div>
<div class="pull-right">

	<a class="btn btn-primary" href="{{ route('expenses.index') }}">Back</a>

	</div>
	</div>
	</div>

@if ($errors->any())
	<div class="alert alert-danger">
	<strong>Error!</strong>There were some problems with your input. <br><br>

	<ul>

	@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>

	@endforeach
</ul>
</div>
@endif

<form action="{{ route('expenses.update',$expense->id) }}" method="POST">
@csrf

 @method('PUT')
	<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">

	<strong>Item Name:</strong>

	<input type="text" name="itemname" value="{{ $expense->itemname }}"

	class="form-control" placeholder="Item Name">

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Course:</strong>

	<input type="text" name="type" value="{{ $expense->type }}"
class="form-control" placeholder="Type">


</div>
</div>

<div class="col=xs=12 col-sm-12 col-md-12">
	
	<div class="form-group">
	<strong>Fee:</strong>
	<input type="text" name="price" value="{{ $expense->price }}" class="form-control" placeholder="Price">
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text center">

	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>

</form>

@endsection