@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
		<h4 class="subtitle">View User Details</h4>
		</div>
		</div>
	
		<hr class="m-t-10">

		<div class="card">
		<div class="card-content">
		<div class="field">
		<a href="{{ route('users.edit',$user->id) }}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit</a> 
		</div>
		<div class="field">
			<label for="name" class="label">Name</label>
			<pre>{{$user->name}}</pre>
		</div>
		 <div class="field">
		 	<label for="name" class="label">Email</label>
			<pre>{{$user->email}}</pre>
		 </div>
	
		</div>
		</div>
		
</div>
@endsection