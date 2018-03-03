@foreach($admins as $admin)
<li> Email: {{$admin['email']}}</li>
<li> Username: {{$admin['username']}}</li>
@endforeach
