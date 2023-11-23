@extends('layouts.app', ['hideBookRoomButton' => true])

@section('content')
    <div class="container">
        <a href="{{ route('rooms.create') }}" class="btn btn-primary mt-2 mb-2">Add Room</a>
      
        <table class="table">
            <thead>
                <tr>
                    <th>Room Type</th>
                    <th>Room Number</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->room_type }}</td>
                        <td>{{ $room->room_number }}</td>
                        <td>{{ $room->capacity }}</td>
                        <td>
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('rooms.destroy', $room->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
