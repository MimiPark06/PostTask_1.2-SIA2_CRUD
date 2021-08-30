@extends('expenses.layout')

@section('content')

<div class="pull-left">


	<h2 style="text-align:center;">Expenses CRUD</h2>

	</div>

	<div class="row">

	<div class="col-lg-12 margin-tb">

	<div class="pull-right">
	<a class="btn btn-success" href="{{ route('expenses.create') }}"> Add New Item</a>

	</div>
	</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>

</div>
@endif

<table class="table table-bordered">

<tr>

	<th>No</th>
	<th>Item Name</th>
	<th>Type</th>
	<th>Price</th>
	<th width="280px">Action</th>
</tr>

@foreach ($expenses as $expense)
<tr>

	<td>{{ ++$i }}</td>
	<td>{{ $expense->itemname }}</td>
	<td>{{ $expense->type }}</td>
	<td>{{ $expense->price }}</td>

	<td>
	<form action="{{ route('expenses.destroy',$expense->id) }}" method="POST">
	

	<a class="btn btn-primary" href="{{ route('expenses.edit',$expense->id) }}">Edit</a>

	@csrf
	@method('DELETE')

	<button type="submit" class="btn btn-danger">Paid</button>

	</form>

    </td>
</tr>
@endforeach

</table>