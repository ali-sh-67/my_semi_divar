
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>صفحه ایجاد کامنت</title>
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
            <form  method="post"  action="{{route('StoreComment',$id->id)}}" >
                @csrf

               
                <div>
                    <div><label class="yekan" style="margin-right:52px;font-size:19px;">پیام:</label></div>
                    <textarea class="yekan" style="width: 430px;height:260px;margin-right:52px;resize: none;font-size:19px;" name="description" placeholder=" توضیحات" ></textarea>
                    
                </div>  
               
               
                
                <div>
                    <div style="margin-top: 10px;;">                    
                    <input class="yekan" style="background-color:rgba(11,194,240,0.932)  ;border-radius:20%;width:100px;height:32px;margin-right:223px;font-size:19px;" type="submit" value="ارسال">
                </div>
                
            </form>
        </div>

    </div>
<!-- @endsection -->

</body>
</html>