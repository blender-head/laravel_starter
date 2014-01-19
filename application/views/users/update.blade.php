<h1>Update a User</h1>

{{ Form::open() }}
	Real Name: {{ Form::text('real_name', $user->real_name) }}<br />
	Email: {{ Form::text('email', $user->email) }}<br />
	Change Password: {{ Form::password('password') }}<br />
	{{ Form::submit('Update User') }}
{{ Form::close() }}