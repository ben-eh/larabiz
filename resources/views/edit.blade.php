@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Edit a Listing</div>
        <div class="card-body">
          <form method="post" action="/listings/{{ $listing->id }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Listing Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $listing->name }}">
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ $listing->address }}">
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" value="{{ $listing->website }}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ $listing->email }}">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{ $listing->phone }}">
            </div>
            <div class="form-group">
              <label for="bio">Bio</label>
              <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio" value="{{ $listing->bio }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <span class="float-right"><a href="/home"><div class="btn btn-secondary">Cancel</div></a></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
