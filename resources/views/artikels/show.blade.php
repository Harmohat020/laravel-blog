@extends('artikels.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-3">
            <h1>Artikel details</h1>
        </div>

        <div class="row">
            <div class="col">
                <p class="font-weight-bold">Naam:</p>
            </div>
            <div class="col">
                {{$artikel->auteur}}
            </div>
            <div class="col-9"></div>
        </div>

        <div class="row">
            <div class="col">
            <p class="font-weight-bold">titel:</p>
            </div>
            <div class="col">
                {{$artikel->titel}}
            </div>
            <div class="col-9"></div>
        </div>

        <div class="row">
            <div class="col">
            <p class="font-weight-bold">Content:</p>
            <p class="text-justify">
                {{$artikel->content}}
            </p>
          </div>

        </div>

        <div class="pull-right mt-3 mb-3">
            <a class="btn btn-primary" href="{{ route('artikels.index') }}">Terug</a>
        </div>
    </div>
</div>

@endsection
