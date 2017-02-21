@extends('layouts.blog')
@section('content')

<h1 class="font-lara color-high" style="font-size: 7vw;">{{ config('blog.title') }}</h1>
<h3 class="color-high">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
<hr>

@foreach ($posts as $post)
<div class="bgw opacity-9" id="article">
	
        <a href="/blog/{{ $post->slug }}" id="title">{{ $post->title }}</a>
        <em>({{ $post->published_at }})</em> &nbsp; &nbsp; <span class="glyphicon glyphicon-tag color-high"></span><a href="/blog/topic{{ $post->tag1 }}">{{ $post->tag1 }}</a> <a href="/blog/topic{{ $post->tag2 }}">{{ $post->tag2 }}</a><a href="/blog/topic{{ $post->tag3 }}"> {{ $post->tag3 }}</a>
        <p style="font-size:120%;line-height: 100%;" >
            {{ str_limit($post->content) }}
        </p>
    
</div>
    
@endforeach

<hr>
{!! $posts->render() !!}

@endsection




@section('footer')

<script type="text/javascript">
	$(document).ready(function() {
	    
      	$('#main-nav li').removeClass('active');
        $('#nav-about').addClass('active');


});
</script>
@endsection