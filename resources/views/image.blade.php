@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <h4 class="heading">Ürün Ekle</h4>
                        <form method="post" action="/home/image" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Ürün Adı">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="file" id="image" name="image" placeholder="Ürün Fotoğrafı">
                            </div>
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Ürün Ekle">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection