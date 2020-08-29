@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                        <form method="post" action="/home/video" enctype="multipart/form-data">
                <div class="card-body">
                <h4 class="heading">Video Ekle</h4>
                            <div class="form-group">
                                <input class="form-control" type="text" id="name" name="name" placeholder="Ürün Adı">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="file" id="video" name="video" placeholder="Ürün Fotoğrafı">
                            </div>
                            @csrf
                            <input type="submit" class="btn btn-primary" value="Video Ekle">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection