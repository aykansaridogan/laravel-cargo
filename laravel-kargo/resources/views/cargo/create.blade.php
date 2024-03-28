@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Yeni Kargo Gönderisi Oluştur</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('cargo.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Ad</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Adınızı girin">
                        </div>
                        <div class="form-group">
                            <label for="surname">Soyad</label>
                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Soyadınızı girin">
                        </div>
                        <div class="form-group">
                            <label for="product_name">Ürün Adı</label>
                            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Ürün adını girin">
                        </div>
                        <div class="form-group">
                            <label for="content">İçerik</label>
                            <textarea name="content" class="form-control" id="content" rows="3" placeholder="İçeriği girin"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="weight">Ağırlık</label>
                            <input type="number" name="weight" class="form-control" id="weight" placeholder="Ağırlığı girin">
                        </div>
                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="Açıklama girin"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
