<x-app-layout>
<div class="container">
  <div class="row">
	<h1 class="page-header heading-1"> Update Blog </h1>
	<hr>
	<form action="{{ route( 'blog.update', $blog ) }}" method="post">
		@method("PUT")
		@csrf
	  <div class="form-group">
	    <label for="title"><strong>Title</strong></label>
	    <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" placeholder="Write Post Title">

<!-- 	    @error("title")
	    <div class="error"> {{$message}} </div>
	    @enderror -->

	  </div>
	  <div class="form-group">
	    <label for="description"><strong>Description</strong></label>
	    <textarea class="form-control" name="description" id="description" rows="10" column="150" placeholder="Write  Post Content"> {{$blog->description}} </textarea>

	  <!--   @error("description")
	    <div class="error">{{$message}}</div>
	    @enderror -->

	  </div>
	  <button type="submit" class="btn btn-success"> Update Blog </button>
	</form>

	 <a href="{{route('blog.index')}}" class="btn btn-sm btn-info"> < Go Back </a>
</div>
</div>
</x-app-layout>