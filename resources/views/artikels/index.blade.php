@extends('artikels.layout')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
            <h1>Overzicht Artikles</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-3" href="{{ route('artikels.create') }}">Nieuwe Artikel</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<table class="table table-striped" id="medewerkersTabel">
           <thead>
               <tr>
               <th scope="col">Titel</th>
               <th scope="col">Content</th>
               <th scope="col">Auteur</th>
               <th scope="col">Gemaakt op</th>
               <th scope="col"></th>
               </tr>
           </thead>
           <tbody>
                @foreach ($artikels as $artikel)
                   <tr>
                         <td>{{$artikel->titel}}</td>
                         <td>{{$artikel->content}}</td>
                         <td>{{$artikel->auteur}}</td>
                         <td>{{$artikel->created_at}}</td>
                         <td>
                           <form class="form-inline" action="{{ route('artikels.destroy',$artikel->id) }}" method="POST" >
                             @csrf
                             @method('DELETE')
                            <a class="btn btn-secondary mr-2 btn-sm" href="{{ route('artikels.show',$artikel->id) }}">Toon</a>
                            <a class="btn btn-primary mr-2 btn-sm" href="{{ route('artikels.edit',$artikel->id) }}">Edit</a><input class="btn btn-danger btn-sm" type="submit" value="Verwijderen">
                           </form>
                         </td>

                   </tr>
               @endforeach
           </tbody>
   </table>

@endsection
