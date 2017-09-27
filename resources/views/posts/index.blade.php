@extends('layout/template')

@section('content')
 <h1>Posts</h1>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Author</th>
         <th>Photos</th>
         <th>Title</th>
         <th>Body</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($posts as $post)
         <tr>
             <td>{{ $post->id }}</td>
             <td>{{ $post->author }}</td>
             <td>{{ $post->photos }}</td>
             <td>{{ $post->title }}</td>
             <td>{{ $post->body }}</td>
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection
