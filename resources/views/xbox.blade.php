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
   background: green;
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
.products-preview{
   position: fixed;
   top:0; left:0;
   min-height: 100vh;
   width: 100%;
   background: rgba(0,0,0,.8);
   display: none;
   align-items: center;
   justify-content: center;
}
.products-preview .preview{
   display: none;
   padding:2rem;
   text-align: center;
   background: #fff;
   position: relative;
   margin:2rem;
   width: 40rem;
}
.products-preview .preview.active{
   display: inline-block;
}
.products-preview .preview img{
   height: 30rem;
}
.products-preview .preview .fa-times{
   position: absolute;
   top:1rem; right:1.5rem;
   cursor: pointer;
   color:#444;
   font-size: 4rem;
}
.products-preview .preview .fa-times:hover{
   transform: rotate(90deg);
}
.products-preview .preview h3{
   color:#444;
   padding:.5rem 0;
   font-size: 2.5rem;
}
.products-preview .preview .stars{
   padding:1rem 0;
   font-size: 1.7rem;
}
.products-preview .preview .stars i{
   color:#27ae60;
}
.products-preview .preview .stars span{
   color:#999;
}
.products-preview .preview p{
   line-height: 1.5;
   padding:1rem 0;
   font-size: 1.6rem;
   color:#777;
}
.products-preview .preview .price{
   padding:1rem 0;
   font-size: 2.5rem;
   color:#27ae60;
}
.products-preview .preview .buttons{
   display: flex;
   gap:1.5rem;
   flex-wrap: wrap;
   margin-top: 1rem;
}
.products-preview .preview .buttons a{
   flex:1 1 16rem;
   padding:1rem;
   font-size: 1.8rem;
   color:#444;
   border:.1rem solid #444;
}
.products-preview .preview .buttons a.cart{
   background: #444;
   color:#fff;
}
.products-preview .preview .buttons a.cart:hover{
   background: #111;
}
.products-preview .preview .buttons a.buy:hover{
   background: #444;
   color:#fff;
}
@media (max-width:991px){
   html{
      font-size: 55%;
   }
}
@media (max-width:768px){
  .products-preview .preview img{
      height: 25rem;
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
         <img src="URL::asset('/resources/views/photo/Xbox/assessins.jpg')}}" alt="">
         <h3>Assassins Creed Valhalla Microsoft</h3>
         <div class="price">$ 929.00</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="URL::asset('/resources/views/photo/Xbox/call.jpg')}}">
         <h3>Call Of Duty Black Ops: Cold War</h3>
         <div class="price">$ 1,190.00</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="URL::asset('/resources/views/photo/Xbox/elden.webp')}}">
         <h3>	Elden Ring</h3>
         <div class="price">$ 1,190.00</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="URL::asset('/resources/views/photo/Xbox/far.jpg')}}">
         <h3>Far Cry 6</h3>
         <div class="price">$ 399.00</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="URL::asset('/resources/views/photo/Xbox/fifa22.jpg')}}">
         <h3>FIFA 22</h3>
         <div class="price">$ 299.00</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="URL::asset('/resources/views/photo/Xbox/fifa23.jpg')}}">
         <h3>FIFA 23</h3>
         <div class="price">$ 1,699.00</div>
      </div>

      <div class="product" data-name="p-7">
         <img src="URL::asset('/resources/views/photo/Xbox/forza.webp')}}">
         <h3>Forza Horizon</h3>
         <div class="price">$ 799.00</div>
      </div>

      <div class="product" data-name="p-8">
         <img src="URL::asset('/resources/views/photo/Xbox/gears.jpg')}}">
         <h3>GEARS 5</h3>
         <div class="price">$ 499.00</div>
      </div>

      <div class="product" data-name="p-9">
         <img src="URL::asset('/resources/views/photo/Xbox/halo.png')}}">
         <h3>HALO Infinite</h3>
         <div class="price">$ 599.00</div>
      </div>

      <div class="product" data-name="p-10">
         <img src="URL::asset('/resources/views/photo/Xbox/RE8.jpg')}}">
         <h3>Resident Evil 8 Village</h3>
         <div class="price">$ 649.00</div>
      </div>

      <div class="product" data-name="p-11">
         <img src="URL::asset('/resources/views/photo/Xbox/KNY.jpg')}}">
         <h3>Demon Slayer. Kimetsu no Yaiba - the Hinokami Chronicles </h3>
         <div class="price">$ 999.00</div>
      </div>

      <div class="product" data-name="p-12">
         <img src="URL::asset('/resources/views/photo/Xbox/Batle.jpg')}}">
         <h3>Battlefield 2042</h3>
         <div class="price">$ 959.00</div>
      </div>

   </div>

</div>


</body>
</html> 