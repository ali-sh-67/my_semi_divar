@extends('layouts.main')
@section('content')
    <div class="">

        @foreach ($categories as $category)
            <div>
                <div>{{$category->name}}</div>
                <div><a href="{{route('category.edit',['id'=>$category->id])}}">edit</a></div>
{{--                <div><a href="{{roure('category.delete')}}">delete</a></div>--}}
                @foreach ($category->children as $child)
                    <div>
                        <div style="margin-left: 10px">  {{$child->name}}</div>
                        <div><a href="#">edit</a></div>
                        <div><a href="#">delete</a></div>
                        @foreach ($child->children as $subchild)
                            <div>
                                {{$subchild->name}}
                                <div><a href="#">edit</a></div>
                                <div><a href="#">delete</a></div>
                                @foreach ($subchild->children as $sub1child)
                                    <div>
                                        {{$sub1child->name}}
                                        <div><a href="#">edit</a></div>
                                        <div><a href="#">delete</a></div>
                                        @foreach ($sub1child->children as $sub2child)
                                            <div>
                                                {{$sub2child->name}}
                                                <div><a href="#">edit</a></div>
                                                <div><a href="#">delete</a></div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>
@endsection
