<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <link rel="stylesheet" href={{ URL::to('/css/bootstrap.css') }}>
</head>
<body>
    <div class="container-fm p-2 bg-lime">
        <a href="#" class="navbar-brand">
            <!-- Logo Image -->
            <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span class="text-uppercase font-weight-bold text-dark">E-Commerce</span>
          </a>        
          <a href="#" class="navbar-user">
            <!-- Logo Image -->
            <span class="text-uppercase font-weight-bold text-dark">Nama User</span>
            <img src="https://bootstrapious.com/i/snippets/sn-nav-logo/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
          </a>   
    </div>

    
    <div class="b-example-divider b-example-vr"></div>

    <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;  border-right:1px solid #D3D3D3; height:auto">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Sidebar</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg> My Order
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg> Product Catalog
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg> Report
                </a>
            </li>
            {{-- <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg> Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-dark">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg> Customers
                </a>
            </li> --}}
        </ul>
    </div>
</body>
</html>