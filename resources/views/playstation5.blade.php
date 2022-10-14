<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap');
*{
   font-family: 'Nunito', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: all .2s linear;
   text-transform: capitalize;
}
html{
   font-size: 62.5%;
   overflow-x: hidden;
}
body{
   background: blue;
}
.container{
   max-width: 1200px;
   margin:0 auto;
   padding:3rem 2rem;
}
.container .title{
   font-size: 3.5rem;
   color:#444;
   margin-bottom: 3rem;
   text-transform: uppercase;
   text-align: center;
}
.container .products-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}
.container .products-container .product{
   text-align: center;
   padding:3rem 2rem;
   background: #fff;
   box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
   outline: .1rem solid #ccc;
   outline-offset: -1.5rem;
   cursor: pointer;
}
.container .products-container .product:hover{
   outline: .2rem solid #222;
   outline-offset: 0;
}
.container .products-container .product img{
   height: 25rem;
}
.container .products-container .product:hover img{
   transform: scale(.9);
}
.container .products-container .product h3{
   padding:.5rem 0;
   font-size: 2rem;
   color:#444;
}
.container .products-container .product:hover h3{
   color:#27ae60;
}
.container .products-container .product .price{
   font-size: 2rem;
   color:#444;
}
@media (max-width:991px){
   html{
      font-size: 55%;
   }
}
@media (max-width:450px){
   html{
      font-size: 50%;
   }
}
    </style>
   
<div class="container">


   <h3 class="title">VIDEOJUEGOS</h3>

   <div class="products-container">

      <div class="product" data-name="p-1">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/call.jpg')}}">
         <h3>Call Of Duty Black Ops: Cold War</h3>
         <div class="price">$ 1,399.00</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/far.jpg')}}">
         <h3>Far Cry 6 Standard Edition</h3>
         <div class="price">$ 580.00</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/fifa22.jpg')}}">
         <h3>FIFA 22</h3>
         <div class="price">$ 660.00</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/fifa23.jpg')}}">
         <h3>FIFA 23</h3>
         <div class="price">$ 1,299.00</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/GTA5.jpg')}}">
         <h3>Grand Theft Auto V</h3>
         <div class="price">$ 799.00</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/red.jpg')}}">
         <h3>Red Dead Redemption 2</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-7">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/rayman.jpg')}}">
         <h3>Rayman Legends</h3>
         <div class="price">$ 439.00</div>
      </div>

      <div class="product" data-name="p-8">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/RE8.jpg')}}">
         <h3>Resident Evil 8 Village</h3>
         <div class="price">$ 799.00</div>
      </div>

      <div class="product" data-name="p-9">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/spiderman.jpg')}}">
         <h3>Spider-Man: Miles Morales Ultimate</h3>
         <div class="price">$ 1,749.00</div>
      </div>

      <div class="product" data-name="p-10">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/watch.jpg')}}">
         <h3>Watch Dogs Legion</h3>
         <div class="price">$ 439.00</div>
      </div>

      <div class="product" data-name="p-11">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/god.jpg')}}">
         <h3>God of War Ragnarök</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="{URL::asset('/resources/views/photo/Play/PS5/TLOU.jfif')}}">
         <h3>THE LAST OF US PART 1 </h3>
         <div class="price">$ 1,399.00</div>
      </div>

   </div>

</div>

</body>
</html> 