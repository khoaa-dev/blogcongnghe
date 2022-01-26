@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1>{{$post->title}}</h1>
        <div class="content">
          {!! $post->content !!}
        </div>
      </div>
    </div>
  </div>
@endsection