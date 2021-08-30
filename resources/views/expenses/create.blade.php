@extends('expenses.layout')

@section('content')
<div class="row">

	<div class="col-lg-12 margin-tb">
	<div class="pull-left">

	<h2 style="text-align:center;">Add New Item</h2>
	</div>
	<div class="pull-right">
	<a class="btn btn-primary" href="{{ route('expenses.index') }}">Back</a>
        
        </div>
    </div>
</div>

@if ($errors->any())

	<div class="alert alert-danger">
	<strong>Error!</strong> There were some problems with your input.<br><br>
	<ul>
@foreach ($errors->all() as $error)

	<li>{{ $error }}</li>
	@endforeach

</ul>
</div>
@endif

<form action="{{ route('expenses.store') }}" method="POST">
@csrf

	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Item Name:</strong>
	<input type="text" name="itemname" class="form-control" placeholder="Item Name">
	
</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
	<strong>Type</strong>

	<input type="text" name="type" class="form-control" placeholder="Type">

</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12">

	<div class="form-group">
	<strong>Price</strong>
	<input type="text" name="price" class="form-control" placeholder="Price">

</div>
</div>

	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection