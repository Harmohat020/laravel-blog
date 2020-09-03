@extends('artikels.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-3">
            <h1>Artikel Wijzigen</h1>
        </div>
        <div class="pull-right mt-3 mb-3">
            <a class="btn btn-primary" href="{{ route('artikels.index') }}">Terug</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oeps!</strong> Er zijn problemen met het formulier:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('artikels.update',$artikel->id) }}"   name="form" method="POST">
    @csrf
     @method('PUT')
    <div class="form-row">
        <div class="col">
            <input type="text" required class="form-control" name="titel" value="{{$artikel->titel}}"   maxlength="60" placeholder="titel">
        </div>
        <div class="col">
            <input type="text" required class="form-control" name="auteur" value="{{$artikel->auteur}}"   maxlength="60" placeholder="auteur">
        </div>
    </div>
    <hr>
    <div class="col">
        <!-- <textarea rows="5" required class="form-control" name="content" value="{{$artikel->content}}"  maxlength="" placeholder="content"></textarea> -->
        <input type="text" required class="form-control" name="content" value="{{$artikel->content}}"  maxlength="" placeholder="content">
    </div>

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Wijzigen</button>
        </div>
    </div>
</form>

@endsection
