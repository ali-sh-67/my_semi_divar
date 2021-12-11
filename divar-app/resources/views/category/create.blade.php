@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="{{asset('css\category\create.css')}}">
    <div>
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        <form method="post" action="{{route('category.store')}}">
            @csrf

            <div>
                <div><label>'Category name'</label></div>
                <div><input type="text" name="name" placeholder="نام را وارد کنید"></div>
            </div>
            <div>
                <div><label>'Category name_en'</label></div>
                <div><input type="text" name="name_en" placeholder="نام انگلیسی را وارد کنید"></div>
            </div>
            <div>
                <div><label>'font_icon'</label></div>
                <div><input type="text" name="icon" value="fa fa-circle-o-notch" placeholder="فونت آیکون را وارد کنید"></div>
                <div>

                    <select name="parent_id">
                        <option value="0">دسته اصلی</option>
                        @foreach($categories as $category)
                        <option  value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <div><input type="submit" value="ایجاد"></div>
                </div>
        </form>
@endsection
