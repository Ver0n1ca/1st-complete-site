@extends('layouts.account')
@section('nav')
<li class="active"><a class="acc-nav" href="/account">Info  </a></li>
<li><a class="acc-nav" href="/mem/comments">Comment</a></li>
@endsection
@section('content')
<h1 class="color-high font-lara bold">Account Infomation</h1>
<table class="table table-striped">
<tr>
	<td>
		UserName:
	</td>
	<td>
		{{ Auth::user()->name }}
	</td>
</tr>
<tr>
	<td>UserEmail</td>
	<td>
		{{ Auth::user()->email }}
	</td>
</tr>
<tr>
	<td>Created at</td>
	<td>
		{{ Auth::user()->created_at }}
	</td>
</tr>
<tr>
	<td>Updated at</td>
	<td>
		{{ Auth::user()->updated_at }}
	</td>
</tr>
</table>
<h3>

</h3>
@endsection