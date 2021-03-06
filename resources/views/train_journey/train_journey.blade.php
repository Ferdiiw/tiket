@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Train Journeys</div>

                <div class="panel-body">
                    <a href="{{ route('train_journey.create') }}" class="btn btn-default" style="margin-bottom: 15px">Create</a>

                    <table class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>Train Number</th>
                            <th>Train</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($train_journeys as $train_journey)
                            <tr>
                                <td>{{ $train_journey->id }}</td>
                                <td>{{ $train_journey->departure_station }}</td>
                                <td>{{ $train_journey->arrival_station }}</td>
                                <td>{{ $train_journey->train_number }}</td>
                                <td>{{ $train_journey->train_id }}</td>
                                <td>{{ $train_journey->departure_time }}</td>
                                <td>{{ $train_journey->arrival_time }}</td>
                                <td>
                                    <a href="{{ route('train_journey.edit', ['id' => $train_journey->id]) }}" class="btn btn-default">Edit</a>
                                    <form action="{{ route('train_journey.destroy', ['id' => $train_journey->id]) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
