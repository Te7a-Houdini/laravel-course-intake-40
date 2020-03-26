
@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
        </div>
      </div>
@endsection