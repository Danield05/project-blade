@extends('layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
            </tr>
        </thead> 

        <tbody>
            @foreach($articles as $article) 
                <tr>
                    <td scope="row">{{$article->name}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->price}}</td>
                    <td>{{$article->stock}}</td>
                </tr>
            @endforeach   
    </table>
   <a href="{{url('/articles/create')}}" class="btn btn-success">Add article</a>
@stop