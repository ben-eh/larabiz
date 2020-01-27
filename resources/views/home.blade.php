@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create"><div class="btn btn-secondary">Add Listing</div></a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <h2>Your Listings</h2>
                @if (count($listings))
                  <table class="table table-striped">
                    <tr>
                      <th>Company</th>
                    </tr>
                    @foreach ($listings as $listing)
                      <tr>
                        <td>{{ $listing->name }}</td>
                        <td>
                          <a href="/listings/{{ $listing->id }}/edit"><div class="btn btn-secondary float-right ml-2">Edit</div></a>
                          <form class="float-right" action="/listings/{{ $listing->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>

                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </table>
                @else
                  <p>You don't have any listings yet</p>
                @endif
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
