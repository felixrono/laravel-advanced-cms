@extends('layouts.manage');

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">
				Create New User
			</h1>
		</div>
	</div>
	<hr class="m-t0">
	<div class="columns">
		<div class="column">
			<form action="{{ route('users.update',$user->id) }}" method="POST">
			{{method_field('PUT')}}
			{{csrf_field()}}
			<div class="field">
				<label for="name" class="label">Name</label>
				<p class="control">
					<input type="text" name="name" id="name" class="input" value="{{$user->name}}">
				</p>
			</div>
			 <div class="field">
				<label for="email" class="label">Email</label>
				<p class="control">
					<input type="text" name="email" id="email" class="input" value="{{$user->email}}">
				</p>
			</div>
			 <div class="field">
				<label for="password" class="label">Password</label>
				<b-radio-group v-model="password_options">
					<div class="field">
						<b-radio name="pword" value="keep">Do Not Change Password</b-radio>
						</div>
						<div class="field">
						<b-radio name="pword" value="auto">Auto-Generate Password</b-radio>
						</div>
						<div class="field">
						<b-radio name="pword" value="manual">Manually Set Password</b-radio>
						
						</div>
					</div>
				</b-radio-group>
				<p class="control">
					<input type="password" name="password" class="input" v-if=" password_options=='manual'" placeholder="manually Give Password">
				</p>
			
			<button class="button is-success m-t-15">Edit User</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script >
	var app= new Vue({
		el:'#app',
		data:{
			password_options:'keep'
		}
	});
</script>
















