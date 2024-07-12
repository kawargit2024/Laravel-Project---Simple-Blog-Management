<x-app-layout>
<div class="container">
  <div class="row">
	<h1 class="page-header"> Blog Details </h1>
	<hr>
	<div class="mt-50"></div>
	<h2> <strong> Title: </strong></h2>
	 <h3> {{ $blog->title }} <h3>
	 	<div class="mt-30"></div>
	 <h2> <strong> Description: </strong></h2>
	 <h3> {{ $blog->description }}<h3>
	 	<div class="mt-30"></div>
	 <h2> <strong> Created At: </strong></h2>
	 <h3> {{ $blog->created_at }}<h3>
	 	<div class="mt-30"></div>
	 	<a href="{{route('blog.edit', $blog)}}"  class="btn btn-sm btn-success-edit"> Edit </a>
	  <a href="{{route('blog.index')}}" class="btn btn-sm btn-info"> < Go Back </a>
</div>
</div>
</x-app-layout>