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
			<form action="{{ route('users.store') }}" method="POST">
			 {{csrf_field()}}
			<div class="field">
				<label for="name" class="label">Name</label>
				<p class="control">
					<input type="text" name="name" id="name" class="input">
				</p>
			</div>
			 <div class="field">
				<label for="email" class="label">Email</label>
				<p class="control">
					<input type="text" name="email" id="email" class="input">
				</p>
			</div>
			 <div class="field">
				<label for="password" class="label">Password</label>
				<p class="control">
					<input type="password" name="password" class="input" v-if="!auto_password" placeholder="manually Give Password">
					<b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password"> Auto Generate Password</b-checkbox>
				</p>
			</div>
			<button class="button is-success m-t-15">Create User</button>
			</form>
		</div>
	</div>
</div>
@endsection

