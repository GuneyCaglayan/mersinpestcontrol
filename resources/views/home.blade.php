@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">{{ __('Dashboard') }}</div> <br>
                <button class="btn btn-primary"><a href="/home/image" style="color: white; text-align: left;">Resim
                        Ekle</a></button><br>
                <button class="btn btn-success"><a href="/home/video" style="color: white; text-align: left;">Video
                        Ekle</a></button><br>
            </div>
        </div>

        <div class="col-md-12 d-flex">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Video Adı</th>
                        <th scope="col">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                <form action="/home/video/{{ $video->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @method('DELETE')
                @csrf
                    <tr>
                        <th scope="row">{{$video->id}}</th>
                        <td>{{$video->name}}</td>
                        <td><button class="btn btn-outline-danger">Sil</button></td>
                    </tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fotoğraf Adı</th>
                        <th scope="col">Fotoğraf</th>
                        <th scope="col">İşlem</th>
                    </tr>
                    <br>
                </thead>
                <tbody>
                    @foreach($images as $image)
                <form action="/home/image/{{ $image->id }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @method('DELETE')
                @csrf
                    <tr>
                        <th scope="row">{{$image->id}}</th>
                        <td>{{$image->name}}</td>
                        <td><img src="{{ $image->name }}.jpg" alt=""></td>
                        <td><button class="btn btn-outline-danger">Sil</button></td>
                        <br>
                    </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection