@extends('layouts.account')
@section('css')
<link rel="stylesheet" type="text/css" href="/dist/css/wangEditor.min.css">

@endsection
@section('nav')
<li><a class="acc-nav" href="/account">Info  </a></li>
<li><a class="acc-nav" href="/admin/comments">Comment</a></li>
<li><a class="acc-nav" href="/admin/messages">Messages</a></li>
<li class="active"><a class="acc-nav" href="/admin/articles">Articles</a></li>
<li><a class="acc-nav" href="/admin/users">Users  </a></li>
@endsection

@section('content')
<h1 class="font-lara color-high">Create a New Article</h1>
<form method="post" action="/admin/create" role="form">
	<div style="border-top-color: #000;border-top-width: 5px;" class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input class="form-control" type="text" name="slug" placeholder="route eg.my-awesome-title"><br>
		<input class="form-control" type="text" name="title" placeholder="Your blog title"><br>
	</div>
	<div id="editor-container">
		<textarea id="textarea1" name="content" style="height:400px;">
    		<p >An awesome content...</p>
		</textarea>
	</div>
	<br>
	<span style="width: 20%;display: inline-block;">
		<input class="form-control" type="text" name="tag1" placeholder="tag1 (optional)" value="">
	</span>
	<span style="width: 20%;display: inline-block;">
		<input class="form-control" type="text" name="tag2" placeholder="tag2 (optional)" value="">
	</span>
	<span style="width: 20%;display: inline-block;">
		<input class="form-control" type="text" name="tag3" placeholder="tag3 (optional)" value="">
	</span>
	<button id="submit" name="submit" type="submit" class="btn btn-large btn btn-success right-2">Publish</button>
	<button class="btn btn-primary right-2" onclick="history.go(-1)">  « Cancel</button>
</form><br>


@endsection

@section('js')
<script type="text/javascript" src="/dist/js/lib/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/dist/js/wangEditor.min.js"></script>
<!--这里生成editer-->
<script type="text/javascript">
    var editor = new wangEditor('textarea1');
     editor.config.menus = [
        'source',
        '|',     // '|' 是菜单组的分割线
        'bold',
        'underline',
        'italic',
        'strikethrough',
        'eraser',
        'forecolor',
        '|',
        'quote',
        'fontfamily',
        'fontsize',
        'head',
        'unorderlist',
        'orderlist',
        'alignleft',
        'aligncenter',
        'alignright',
        '|',
        'link',
        'unlink',
        'table',
        '|',
        'insertcode',
        '|',
        'undo',
        'redo'
     ];
    editor.create();
</script>
@endsection