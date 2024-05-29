<!DOCTYPE html>
<html lang="en">
<x-main-menu/>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @yield('header')

    
</head>

<body>
    <!-- header -->
   

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/a1.webp')}}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/a1.webp')}}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/a1.webp')}}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
    </div>

    <main>
        @yield('maincontent')
    </main>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>ĐĂNG KÝ NHẮN TIN</h4>
                    <form>
                        <input type="email" placeholder="Your email" class="form-control mb-2" />
                        <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    </form>
                    <h6 class="mt-3">KẾT NỐI VỚI CHÚNG TÔI</h6>
                    <a href="#"><i class="fab fa-facebook-square facebook-icon"></i></a>
                    <a href="#"><i class="fab fa-instagram-square instagram-icon"></i></a>
                    <a href="#"><i class="fab fa-youtube-square youtube-icon"></i></a>
                </div>
                <div class="col-sm-3">
                    <h5>Fashion - THƯƠNG HIỆU</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="#">Tuyển Dụng</a></li>
                        <li><a href="#">Hướng Dẫn</a></li>
                    </ul>
</div>
                <div class="col-sm-3">
                    <h5>WE HERE</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Hướng dẫn mua</a></li>
                        <li><a href="#">Tra cứu bảo hành</a></li>
                        <li><a href="#">Quy định phiếu quà</a></li>
                        <li><a href="#">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>CATEGORY</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Xu hướng</a></li>
                        <li><a href="#">Giải đáp</a></li>
                        <li><a href="#">Cẩm nang</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @yield('footer')
</body>

</html>
