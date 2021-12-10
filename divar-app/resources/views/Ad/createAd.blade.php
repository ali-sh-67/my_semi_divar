
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>صفحه ایجاد آگهی</title>
<script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body style="background-color: #e4dcdc;">



<!-- @extends('layouts.main')

@section('content') -->

    <div style="width: 711px;height:550px;border:solid 1px black;margin-right:340px;cursor:pointer;background-color:seashell;">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach

        
        <div style="width: 515px;height:550px;margin-right:85px; ">
            <form  method="post"  action="{{route('storeAd')}}" enctype="multipart/form-data">
                @csrf

                <div>
                    <div ><label style="margin-right:52px;">نام آگهی:</label></div>
                    <div ><input style="width: 430px;margin-right:52px;" type="text" name="title" placeholder="نام آگهی را وارد کنید"></div>
                </div>
                <div>
                    <div><label style="margin-right:52px;">توضیحات:</label></div>
                    <textarea style="width: 430px;height:160px;margin-right:52px;resize: none;" name="description" placeholder=" توضیحات" ></textarea>
                    
                </div>
                <div>
                    <div><label style="margin-right:52px;">تصویر:</label></div>
                    <div><input style="margin-right:52px;"  type="file" name="image_url"></div>
                </div>
                <div>
                    <div><label style="margin-right:52px;">قیمت:</label></div>
                    <div><input style="width: 430px;margin-right:52px;" type="text" name="price" placeholder="قیمت"></div>
                </div>
                <div>
                    <div><label style="margin-right:52px;">آدرس:</label></div>
                    <div><input style="width: 430px;margin-right:52px;" type="text" name="address" placeholder="آدرس"></div>
                </div>
                <div>
                    <div><label style="margin-right:52px;">تلفن:</label></div>
                    <div><input style="width: 430px;margin-right:52px;" type="text" name="phone_number_ads" placeholder="تلفن"></div>
                </div>
                <div>
                    <div style="margin-top: 10px;;">
                    
                    <input style="background-color:rgba(11,194,240,0.932)  ;border-radius:20%;width:100px;margin-right:223px;" type="submit" value="ارسال"></div>
                </div>
            </form>
        </div>


    </div>
<!-- @endsection -->

</body>




</html>