@extends('layouts.main')

@section('content')

    <div>
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        <form method="post"  action="{{route('storeAd')}}" enctype="multipart/form-data">
            @csrf

            <div>
                <div><label>نام آگهی:</label></div>
                <div><input type="text" name="title" placeholder="نام آگهی را وارد کنید"></div>
            </div>
            <div>
                <div><label>توضیحات:</label></div>
                <textarea  name="description" placeholder=" توضیحات" ></textarea>
                
            </div>
            <div>
                <div><label>تصویر:</label></div>
                <div><input type="file" name="image_url"></div>
            </div>
            <div>
                <div><label>قیمت:</label></div>
                <div><input type="text" name="price" placeholder="قیمت"></div>
            </div>
            <div>
                <div><label>آدرس:</label></div>
                <div><input type="text" name="address" placeholder="آدرس"></div>
            </div>
            <div>
                <div><label>تلفن:</label></div>
                <div><input type="text" name="phone_number_ads" placeholder="تلفن"></div>
            </div>
            <div>
                <div><input type="submit"></div>
            </div>
        </form>


    </div>
@endsection