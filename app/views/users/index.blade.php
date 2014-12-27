<h1>Users</h1>

@if($users)
	<ul>
		@foreach($users as $user)
			<li>{{ $user->real_name }} - {{ $user->email }}</li>
		@endforeach		
	</ul>
@else
	Todavia no hay ningún usuario registrado
@endif

{{ HTML::link("users/create", "Crear Usuario")}}
