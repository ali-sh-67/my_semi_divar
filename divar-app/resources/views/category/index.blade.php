@extends('layouts.main')
@section('content')
    <div class="">
        <a href="{{route('category.create')}}">ایجاد دسته بندی</a><br>
        <a href="{{route('createAd')}}">ایجاد آگهی</a><br>
        <a href="{{route('indexAd')}}">مشاهده آگهی ها</a>


    </div>
@endsection
