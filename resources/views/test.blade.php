<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href={{ URL::to('/css/bootstrap.css') }}>
    {{-- <link rel="stylesheet" href={{ URL::to('/css/all.min.css') }}> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fm p-2 bg-lime d-flex justify-space-between">
        <a href="#" class="navbar-brand me-auto">
            <!-- Logo Image -->
            <img src="{{ URL::to('/image/KLMPK2 Shop logo green.png') }}" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span class="text-uppercase font-weight-bold text-dark ">E-Commerce</span>
          </a>
          <a href="#" class="navbar-user">
            <span class="text-uppercase font-weight-bold text-dark navbar-user">Nama User</span>
            <!-- Logo Image -->
            <img src="{{ URL::to('/image/user.png') }}" width="45" alt="" class="d-inline-block align-middle ">
          </a>
    </div>
    
    <div class="b-example-divider b-example-vr"></div>

    
    <div class="d-flex">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;  border-right:1px solid #D3D3D3; height:900px">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Content</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark active" aria-current="page">
                        <i class="fa-solid fa-clipboard-list" ></i> My Order
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark ">
                        <i class="fa-solid fa-cart-shopping"></i> Product Catalog
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <i class="fa-solid fa-chart-simple"></i> Report
                    </a>
                </li>
            </ul>
        </div>

        <div class="d-flex p-2 justify-content-center" style="flex-wrap: wrap;">
          

          {{-- slider --}}
          <div id="slider" class="carousel slide border " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::to('/image/iklan/iklan.png') }}" class="d-block w-75" alt="Wild Landscape">
                </div>
                <div class="carousel-item ">
                    <img src="{{ URL::to('/image/iklan/iklan2.png') }}" class="d-block w-75" alt="Camera">
                </div>
                <div class="carousel-item ">
                    <img src="{{ URL::to('/image/iklan/iklan3.png') }}" class="d-block w-75" alt="Exotic Fruits">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
            </div>

          </div>
        
      

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>
                
                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>
                
                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>

                <div class="card m-2" style="width: 14rem;">
                    <img src="{{ URL::to('/image/placeholder.jpg') }}" class="card-img-top" alt="...">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Nama</li>
                      <li class="list-group-item">Harga Rp 00</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                      <a href="#" class="card-link">test</a>
                      <a href="#" class="card-link">test</a>
                    </div>
                </div>  
        </div>

    </div>

    <script src="{{ URL::to('/js/bootstrap.min.js.map') }}"></script>
</body>
</html>