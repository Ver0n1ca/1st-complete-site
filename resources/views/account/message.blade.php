@extends('layouts.account')
@section('nav')
<li><a href="/account">Info  </a></li>
<li><a href="/admin/comments">Comment</a></li>
<li class="active"><a href="/admin/messages">Messages</a></li>
<li><a href="/admin/articles">Articles</a></li>
<li><a href="/admin/users">Users  </a></li>
@endsection
@section('content')


<table class="table table-hover">
  <h1 class="font-lara">Messages</h1>
  <h3 class="color-high">Page {{ $messages->currentPage() }} of {{ $messages->lastPage() }}</h5>
	<hr>
  <thead>
    <tr>
      <th>Message Content</th>
      <th>name</th>
      <th>Email</th>
      <th>Created at</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 	@foreach ($messages as $message)
  <tr>
    <td>{{ $message->message }}</td>
  	<td>
  		{{ $message->username }}
  	</td>
  	<td>
  		{{ $message->email }}
  	</td>
  	<td>
  		{{ $message->created_at }}
  	</td>
  	<td>
  		
  	</td>
  </tr>   
	@endforeach
    
  </tbody>
</table>
<hr>
{!! $messages->render() !!}

@endsection