@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Latest Business Headings</div>
        <div class="card-body">
          @if (count($listings))
            <div class="list-group">
              @foreach ($listings as $listing)
                <div class="list-group-item">
                  <a href="/listings/{{ $listing->id }}"><div>{{ $listing->name }}</div></a>
                </div>
              @endforeach
            </div>
          @else
            <p>No listings yet</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <h2>Your Listings</h2>
@foreach($listings as $listing)
  <p>{{ $listing->name }}</p>
  <p>{{ $listing->bio }}</p>
@endforeach -->
@endsection
