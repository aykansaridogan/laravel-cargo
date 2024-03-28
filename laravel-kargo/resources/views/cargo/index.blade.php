@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Kargo Gönderileri</h1>
                <a href="{{ route('cargo.create') }}" class="btn btn-primary mb-3">Yeni Kargo Gönderisi Oluştur</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad</th>
                            <th>Soyad</th>
                            <th>Ürün Adı</th>
                            <th>İçerik</th>
                            <th>Kilo</th>
                            <th>Açıklama</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cargos as $cargo)
                            <tr>
                                <td>{{ $cargo->id }}</td>
                                <td>{{ $cargo->name }}</td>
                                <td>{{ $cargo->surname }}</td>
                                <td>{{ $cargo->product_name }}</td>
                                <td>{{ $cargo->content }}</td>
                                <td>{{ $cargo->weight }}</td>
                                <td>{{ $cargo->description }}</td>
                                <td>
                                    <a href="{{ route('cargo.edit', $cargo->id) }}" class="btn btn-sm btn-primary">Düzenle</a>
                                    <form action="{{ route('cargo.destroy', $cargo->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Sil</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
