@extends('layouts.site')

@section('title', 'san pham')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
@endsection

@section('maincontent')
    <div class="maincontent mb-5">
            <div class="p-4">
                <h1 class="text-center mb-4">TẤT CẢ SẢN PHẨM MỚI</h1>
                <div class="row ">
                    <?php
                    $products = [
                        [
                        'name' => 'váy nữ 1',
                        'description' => 'váy nữ 1.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh1.jpg'
                    ],
                    [
                        'name' => 'váy nữ 2',
                        'description' => 'váy nữ 2.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh2.jpg'
                    ],
                    [
                        'name' => 'váy nữ 3',
                        'description' => 'váy nữ 3.',
                        'price' => '350,000 VND',
                        'image' => 'images/hinh3.jpg'
                    ],
                    [
                        'name' => 'váy nữ 4',
                        'description' => 'váy nữ 4.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh4.jpg'
                    ],
                    ];
    
                    foreach ($products as $product) {
                        echo '
                        <div class="col-6 col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $product['name'] . '</h5>
                                    <p class="card-text">' . $product['description'] . '</p>
                                    <p class="card-text text-success">' . $product['price'] . '</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>

        <div class="p-4">
            <h1 class="text-center mb-4">TẤT CẢ SẢN PHẨM SALE</h1>
            <div class="row">
                <div class="row ">
                    <?php
                    $products = [
                        [
                        'name' => 'váy nữ 1',
                        'description' => 'váy nữ 1.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh1.jpg'
                    ],
                    [
                        'name' => 'váy nữ 2',
                        'description' => 'váy nữ 2.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh2.jpg'
                    ],
                    [
                        'name' => 'váy nữ 3',
                        'description' => 'váy nữ 3.',
                        'price' => '350,000 VND',
                        'image' => 'images/hinh3.jpg'
                    ],
                    [
                        'name' => 'váy nữ 4',
                        'description' => 'váy nữ 4.',
                        'price' => '200,000 VND',
                        'image' => 'images/hinh4.jpg'
                    ],
                    ];
    
                    foreach ($products as $product) {
                        echo '
                        <div class="col-6 col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="' . asset($product['image']) . '" class="card-img-top" alt="' . $product['name'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $product['name'] . '</h5>
                                    <p class="card-text">' . $product['description'] . '</p>
                                    <p class="card-text text-success">' . $product['price'] . '</p>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    ?>
                </div>
            </div>
        </div>

       
    </div>
@endsection