<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>صفحه اصلی دیوار</title>
<script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body class="body" >

<header class="header" >
    <div id="myheader" >
        <div id="header_right">
            <div id="header_right_top" >
                <span id="lock" ></span>
                  <a class="yekan login" href="">ورود</a>
                <span id="register"></span>
                  <a  class="yekan reg" href=""> ثبت نام کنید   </a>
            </div>


            <div id="header_right_bottom" >                
                <div id="search_top">                    
                  <input class="yekan input" type="text" placeholder="محصول ، دسته یا برند مورد نظر خود را جستجو کنید ... "/>
                  <span id="search_pic"></span>
                </div>


            </div>

        </div>
       
    </div>
  
</header>
<div id="main">
  
@foreach($ads as $ad)
    <div id="create" >
      <div id="advert" >
        <span id="nameAdvert">کد آگهی: {{$ad->id}} </span>
      </div>

      <div id="img" >
        <img id="showImg"  src="{{asset('images/' .$ad->image_url)}}">
      </div>

      <div id="title" >
        <span >عنوان: {{$ad->title}}</span>
      </div>
      <div id="description">
        <span >توضیحات: {{$ad->description}}</span>
      </div>
      <div id="price" >
        <span >قیمت: {{$ad->price}}</span>
      </div>
      <div id="Address" >
        <span >آدرس: {{$ad->address }}</span>
      </div>
      
      <div id="comment" >
        <span >کامنت:</span>
      </div>
      
    </div>
@endforeach
  





</div>

</body>




</html>