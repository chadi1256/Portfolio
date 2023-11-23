@extends('layouts.app', ['hideBookRoomButton' => true])

@section('content')
    <div class="container">
        <form method="post" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
         

            @csrf
            <div class="form-group">
                <label>Room Type</label>
                <input type="text" class="form-control" name="room_type" required/>
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo" accept="image/*"/>
            </div>

            <div class="form-group">
                <label>Room Number</label>
                <input type="number" class="form-control" name="room_number" required/>
            </div>
            
            <div class="form-group">
                <label>Room Surface Area m2</label>
                <input type="number" step="0.01" class="form-control" name="room_area" required/>
            </div>
           
            <div class="form-group">
                <label>Capacity</label>
                <input type="number" class="form-control" name="capacity" required/>
            </div>
           
            <div class="form-group">
                <label>Price per Night</label>
                <input type="number" step="0.01" class="form-control" name="price_per_night" required/>
            </div>
            
            <div class="form-group">
                <label>Minibar Available</label>
                <input type="text" class="form-control" name="minibar_available" required/>
            </div>

            <div class="form-group">
                <label>Bath Available</label>
                <input type="text" class="form-control" name="bath_available" required/>
            </div>

            <button type="submit" class="btn btn-primary">Add Room</button>
        </form>
    </div>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
