
@extends('component/navbar')
{{-- <style>
.container {
    position: relative;
    width: 10%;
    max-width: 100px;
  }
  
  .image {
    display: block;
    width: 100%;
    height: auto;
  }
  
  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .3s ease;
    background-color: red;
  }
  
  .container:hover .overlay {
    opacity: 1;
  }
  
  .icon {
    color: white;
    font-size: 100px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
  }
  
  .fa-user:hover {
    color: #eee;
  }
  </style>
  </head>

  @section('content')
    
  
  <h2>Fade in Overlay Icon</h2>
  <p>Hover over the image to see the effect.</p>
  
  <div class="container">
    <img src="img_avatar.png" alt="Avatar" class="image">
    <div class="overlay">
    <a href="#" class="icon" title="User Profile">
      <i class="fa fa-user"></i>
    </a>
    </div>
  </div>
@stop --}}

@section('content')

<style>
  div.gallery {
    border: 1px solid #ccc;
  }
  
  div.gallery:hover {
    border: 1px solid #777;
  }
  
  div.gallery img {
    width: 100%;
    height: auto;
  }
  
  div.desc {
    padding: 15px;
    text-align: center;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .responsive {
    padding: 0 6px;
    float: left;
    width: 44.99999%;
  }
  
  @media only screen and (max-width: 700px) {
    .responsive {
      width: 49.99999%;
      margin: 6px 0;
    }
  }
  
  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }
  
  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
  </style>
  </head>
  <body>
  
  <h2>Porfolio</h2>
  
  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="image/image.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">This is an art exhibition website. Where artist can upload there art ..</div>
    </div>
  </div>
  

  

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="image/image1.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">This is a Kid story website built in php/laravel. It consist of new story need for children to read and learn</div>
    </div>
  </div>


  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="image/image2.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">This is a quick website for</div>
    </div>
  </div>



  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="image/image3.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">This is a website for suya display and details showing there size and price</div>
    </div>
  </div>
  

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img_5terre.jpg">
        <img src="image/image4.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">I participated in HNG intern which was 3 month internship . where i was able to collobarate and work on project and other team.. 
        I learn the use of GIT, GITHUB and i lay my hand on several projects...
      </div>
    </div>
  </div>

  

    
@endsection