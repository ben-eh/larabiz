@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ $listing->name }}}<span class="float-right"><a href="/"><div class="btn btn-secondary">Back</div></a></span></div>
          <div class="card-body">
            <div class="list-group">
              <div class="list-group-item">
                Address: {{ $listing->address }}
              </div>
              <div class="list-group-item">
                Website: <a href="{{ $listing->website }}" target="blank">{{ $listing->website }}</a>
              </div>
              <div class="list-group-item">
                Email: {{ $listing->email }}
              </div>
              <div class="list-group-item">
                Phone: {{ $listing->phone }}
              </div>
              <div class="list-group-item">
                Bio: {{ $listing->bio }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
