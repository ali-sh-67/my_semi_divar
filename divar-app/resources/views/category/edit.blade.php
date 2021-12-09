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

            <div>
                font_icon
                <input name="icon" value="{{ $category->icon }}"></input>
            </div>
            <div>
                <select name="parent_id">
                    <option value="0">دسته اصلی</option>
                    @foreach($categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
    <input type="submit" value="update">
            <div><a href="{{route('category.index')}}">back</a></div>
    </div>
@endsection
