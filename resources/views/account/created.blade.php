@extends('layouts.account')
@section('css')
<link rel="stylesheet" type="text/css" href="/dist/css/wangEditor.min.css">

@endsection
@section('nav')
<li><a class="acc-nav" href="/account">Info  </a></li>
<li><a class="acc-nav" href="/admin/comments">Comment</a></li>
<li><a class="acc-nav" href="/admin/messages">Messages</a></li>
<li><a class="acc-nav" href="/admin/articles">Articles</a></li>
<li><a class="acc-nav" href="/admin/users">Users  </a></li>
@endsection

@section('content')

<div class="alert alert-success" role="alert" style="margin-top: 20px;">Well done, another article published!</div>
<a class="btn btn-large btn btn-success right-2" style="margin-bottom: 20px;color:white;" href="/create" role="button">One more Article</a>
@endsection

@section('js')

@endsection