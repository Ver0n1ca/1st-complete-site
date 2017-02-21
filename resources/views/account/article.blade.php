@extends('layouts.account')
@section('motai')
<?php
      if (isset($_POST['iddd'] )) {
        $idd=$_POST['iddd'];
        echo <<<EOT
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Config</h4>
      </div>
      <div class="modal-body">
        Are you sure you wanna delete the article?
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a role="button" type="button" class="btn btn-danger" href="/admin/delete/$idd">Delete</a>
     
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" language="javascript">
window.onload=function(){
  $('#myModal').modal();
}
</script>
EOT;
      }

?>         
   
@endsection
@section('nav')
<li><a class="acc-nav" href="/account">Info  </a></li>
<li><a class="acc-nav" href="/admin/comments">Comment</a></li>
<li><a class="acc-nav" href="/admin/messages">Messages</a></li>
<li class="active"><a class="acc-nav" href="/admin/articles">Articles</a></li>
<li><a class="acc-nav" href="/admin/users">Users  </a></li>
@endsection
@section('content')


<table class="table table-hover">
  <h1 class="font-lara">Articles</h1>
  <h3 class="color-high">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
	<hr>
  <a class="btn btn-success" href="/create" role="button">Create New</a>
  <thead>
    <tr>
      <th>Title</th>
      <th>Edit Date</th>
      <th><span class="glyphicon glyphicon-tag"></span></th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
 	@foreach ($posts as $post)
  <tr>
  	<td>
  		<a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
  	</td>
  	<td>
  		<em>({{ $post->published_at }})</em>
  	</td>
  	<td>
  		{{ $post->tag1}},{{ $post->tag2}},{{ $post->tag3}}
  	</td>
    <td>
    <form action="#" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="iddd" value="{{  $post->id  }}">
      <a role="button" class="btn btn-large btn btn-primary" href="/admin/edit/{{ $post->id }}" style="color:white;" role="button">Edit</a>
      <button type="submit" class="btn btn-danger">
      Delete
      </button>
    </form>
      
    </td>
  </tr>   
	@endforeach
    
  </tbody>
</table>
<hr>
{!! $posts->render() !!}

@endsection
@section('js')

@endsection