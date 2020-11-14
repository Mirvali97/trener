@extends('layouts.app')

@section('content')
    <h3 class="text-center text-info text-uppercase">Yangi Ro`yhat Qo'shish</h3>
<div class="container">
    @if ($message = Session::get('Success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form class="form-group" action="{{ route('upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label class="text-primary" for="file">Faylni tanlang</label>
        <input class="form-control" type="file" name="file" >
        <button class="btn btn-success my-4" type="submit">Yuklash</button>
    </form>


</div>
@endsection
