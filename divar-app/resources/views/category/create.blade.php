
@extends('layouts.main')

@section('content')

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
                <div><label>'Category parent_id'</label></div>
                <div><input type="text" name="parent_id" placeholder="وابستگی دسته بندی را مشخص کنید"></div>
            </div>
            <div>
                <div><input type="submit"></div>
            </div>
        </form>


    </div>
@endsection
