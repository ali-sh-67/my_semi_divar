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
                  <a class="yekan login" href="">  ورود   </a>
                <span id="register"></span>
                  <a  class="reg" href=""> ثبت نام کنید   </a>
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
    <div style="width:100%;height:380px;border: 1px solid black; ">
      <div style="width: 100%; height:29px; border-bottom:1px solid black">
        <span style="margin-top: 11px;margin-right:10px; display:block;">آگهی:  </span>
      </div>
      <div style="width: 45%; height:42px; border-left: 1px solid black;border-bottom:1px solid black">
        <span style="padding-top: 11px;margin-right:10px; display:block;">عنوان:</span>
      </div>
      <div style="width: 45%; height:115px; border-left: 1px solid black;border-bottom:1px solid black">
        <span style="padding-top: 11px;margin-right:10px; display:block;">توضیحات:</span>
      </div>
      <div style="width: 45%; height:35px; border-left: 1px solid black;border-bottom:1px solid black">
        <span style="padding-top: 10px;margin-right:10px; display:block;">قیمت:</span>
      </div>
      <div style="width: 45%; height:82px; border-left: 1px solid black;">
        <span style="padding-top: 10px;margin-right:10px; display:block;">آدرس:</span>
      </div>
      <div style="width: 100%; height:40px; border-top: 1px solid black;">
        <span style="padding-top: 10px;margin-right:10px; display:block;">کامنت:</span>
      </div>
      
    </div>
@endforeach
  





</div>

</body>




</html>