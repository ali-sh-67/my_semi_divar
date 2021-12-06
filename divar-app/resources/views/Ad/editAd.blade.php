@extends('layouts.main')

@section('content')

    <div>
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        <form method="post" action="{{route('updateAd',$id->id)}}">
            @csrf
            <div class="form-group">
                <label for="title">عنوان آگهی </label>
                <input type="text" class="form-control" name="title" value="{{$id->title}}">
            </div>

            
            <div class="form-group">
                <label for="description">شرح آگهی </label>
                <textarea  class="form-control" name="description" >{{$id->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="title">قیمت</label>
                <input type="text" class="form-control" name="price" value="{{$id->price}}">
               
            </div>
            <div class="form-group">
                <label for="title">ثبت تغییرات</label>
                <button type="submit" class="btn btn-success" >ذخیره</button>
            </div>
        </form>


    </div>
@endsection