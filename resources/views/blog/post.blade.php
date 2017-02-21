@extends('layouts.blog')
@section('css')
<style type="text/css">
	p{
		line-height: 100%;
		margin: 0px 0px;
		padding: 10px 0px;
	}
</style>
@endsection
@section('content')

<div class="bgw opacity-7" id="article">
	<h1 class="font-lara color-dark">{{ $post->title }}</h1>
	<h5>{{ $post->published_at }}</h5>
	<h5><span class="glyphicon glyphicon-tag color-high"></span><a href="/blog/topic{{ $post->tag1 }}">{{ $post->tag1 }}</a> <a href="/blog/topic{{ $post->tag2 }}">{{ $post->tag2 }}</a><a href="/blog/topic{{ $post->tag3 }}"> {{ $post->tag3 }}</a></h5>
	<hr>
		<div id="editor-container">
	    {!! nl2br($post->content) !!}
	    </div>
	<hr>
	<button class="btn btn-primary" onclick="history.go(-1)">
	    « Back
	</button>
</div>

@endsection



@section('footer')

<script type="text/javascript">
	$(document).ready(function() {
	    
      	$('#main-nav li').removeClass('active');
        
});
</script>
@endsection