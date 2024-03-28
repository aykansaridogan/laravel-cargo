@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Kargo Gönderisini Düzenle</h1>
                <form action="{{ route('cargo.update', $cargo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Ad</label>
                        <input type="text" name="name" class="form-control" value="{{ $cargo->name }}">
                    </div>
                    <div class="form-group">
                        <label for="surname">Soyad</label>
                        <input type="text" name="surname" class="form-control" value="{{ $cargo->surname }}">
                    </div>
                    <div class="form-group">
                        <label for="product_name">Ürün Adı</label>
                        <input type="text" name="product_name" class="form-control" value="{{ $cargo->product_name }}">
                    </div>
                    <div class="form-group">
                        <label for="content">İçerik</label>
                        <textarea name="content" class="form-control">{{ $cargo->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="weight">Kilo</label>
                        <input type="text" name="weight" class="form-control" value="{{ $cargo->weight }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Açıklama</label>
                        <textarea name="description" class="form-control">{{ $cargo->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gönderiyi Güncelle</button>
                </form>
            </div>
        </div>
    </div>
@endsection
