<h1>Users</h1>

{{ HTML::link('users/create', 'Create a User') }}

@if($users)
	<ul>
		@foreach($users as $user)
			<li>{{ $user->real_name }} - {{ $user->email }} - {{ HTML::link('users/delete/'.$user->id, 'Delete') }} / {{ HTML::link('users/update/'.$user->id, 'Update') }}</li>
		@endforeach
	</ul>
@else
	Looks like we haven't added any users, yet!
@endif