@extends('layouts.main')
@section('content')

@foreach($errors->all() as $error)
            {{$error}}
        @endforeach

    <div class="">
{{$category->name}} ({{$category->parent_id}}) {{'id:' . $category->id}}
        <form method="post" action="{{route('category.update', ['id'=>$category->id])}}">
            @csrf
            <div>
                name
                <input name="name" placeholder="Enter title"  value="{{$category->name}}"></input>
            </div>
            <div>
                parent_id
                <input name="parent_id" value="{{ $category->parent_id }}"></input>
            </div>
    <input type="submit" value="update">
    </div>
@endsection
