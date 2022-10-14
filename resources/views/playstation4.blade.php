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
         <img src="{{URL::asset('/resources/views/photo/Play/PS4/Fifa22.jpg')}}">
         <h3>FIFA 22 </h3>
         <div class="price">$ 880.00</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/fifa23.jpg')}}">
         <h3>FIFA 23</h3>
         <div class="price">$ 1,199.00</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/God.jpg')}}">
         <h3>God of War Ragnarök</h3>
         <div class="price">$ 479.00</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/GTA5.jpg')}}">
         <h3>Grand Theft Auto V</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/minecraft.jpg')}}">
         <h3>Minecraft</h3>
         <div class="price">$ 800.00</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/RE2.jpg')}}">
         <h3>Resident Evil 2 REMAKE</h3>
         <div class="price">$ 599.00</div>
      </div>

      <div class="product" data-name="p-7">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/RE3.jpg')}}">
         <h3>Resident Evil 3 REMAKE</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-8">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/RE4.jpg')}}">
         <h3>Resident Evil 4</h3>
         <div class="price">$ 420.00</div>
      </div>

      <div class="product" data-name="p-9">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/TLOU.jpg')}}">
         <h3>The Last of Us Remastered</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-10">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/TLOU2.jpg')}}">
         <h3>The Last of Us 2</h3>
         <div class="price">$ 899.00</div>
      </div>

      <div class="product" data-name="p-11">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/red.jpg')}}">
         <h3>Red Dead Redemption 2 </h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-12">
         <img src="{URL::asset('/resources/views/photo/Play/PS4/spiderman.jpg')}}">
         <h3>Spider-man: Game Of The Year Edition</h3>
         <div class="price">$ 995.00</div>
      </div>



      

   </div>

</div>

</body>
</html> 