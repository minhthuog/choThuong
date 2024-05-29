@extends('layouts.site')

@section('title', 'Liên Hệ')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <style>
        .centered-form {
            margin: 0 auto;
        }
    </style>
@endsection

@section('maincontent')
        <h1 class="text-center mb-2 mt-2">ĐIỀN THÔNG TIN LIÊN HỆ</h1>
    <div class="san container my-5 centered-form">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="makh" class="form-label">Mã khách hàng:</label>
                <input type="text" class="form-control" id="makh" placeholder="Nhập mã khách hàng" name="ma">
            </div>
            <div class="mb-3">
                <label for="tenkh" class="form-label">Họ Tên:</label>
                <input type="text" class="form-control" id="tenkh" placeholder="Nhập tên khách hàng" name="ht">
            </div>
            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ" name="dc">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
            </div>
            <button type="submit" class="btn btn-success">Lấy thông tin</button>
        </form>

        <!-- Google Map -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12 mt-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.802338881157!2d106.7724241!3d10.8306858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752701a34a5d5f%3A0x30056b2fdf668565!2sCao%20%C4%90%E1%BA%B3ng%20C%C3%B4ng%20Th%C6%B0%C6%A1ng%20TP.HCM!5e0!3m2!1sen!2s!4v1686874291401!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection










