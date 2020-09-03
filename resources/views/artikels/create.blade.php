@extends('artikels.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-3">
            <h1>Nieuwe medewerker toevoegen</h1>
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

<form action="{{ route('artikels.store') }}" name="form" method="POST">
    @csrf
    <div class="form-row">
        <div class="col">
            <input type="text" required class="form-control" name="titel" value="{{old('titel')}}"  maxlength="60" placeholder="titel">
        </div>
        <div class="col">
            <input type="text" required class="form-control" name="auteur" value="{{old('auteur')}}"  maxlength="60" placeholder="auteur">
        </div>
    </div>
    <hr>
    <div class="col">
        <textarea rows="5" required class="form-control" name="content" value="{{old('content')}}" maxlength="" placeholder="content"></textarea>
    </div>

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Toevoegen</button>
        </div>
    </div>
</form>

@endsection
