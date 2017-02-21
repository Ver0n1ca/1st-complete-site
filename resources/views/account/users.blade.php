@extends('layouts.account')
@section('nav')
<li><a class="acc-nav" href="/account">Info  </a></li>
<li><a class="acc-nav" href="/admin/comments">Comment</a></li>
<li><a class="acc-nav" href="/admin/messages">Messages</a></li>
<li><a class="acc-nav" href="/admin/articles">Articles</a></li>
<li class="active"><a class="acc-nav" href="/admin/users">Users  </a></li>
@endsection
@section('content')


<table class="table table-hover">
  <h1 class="font-lara">Articles</h1>
  <h3 class="color-high">Page {{ $users->currentPage() }} of {{ $users->lastPage() }}</h5>
	<hr>
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>Created at</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 	@foreach ($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
  	<td>
  		{{ $user->name }}
  	</td>
  	<td>
  		{{ $user->email }}
  	</td>
  	<td>
  		{{ $user->created_at }}
  	</td>
  	<td>
  		
  	</td>
  </tr>   
	@endforeach
    
  </tbody>
</table>
<hr>
{!! $users->render() !!}

@endsection