@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('train.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="economy_seat_num" class="col-md-4 control-label">Economy Seat Number</label>
                            <div class="col-md-6">
                                <input id="economy_seat_num" type="number" class="form-control" name="economy_seat_num" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="business_seat_num" class="col-md-4 control-label">Business Seat Number</label>
                            <div class="col-md-6">
                                <input id="business_seat_num" type="number" class="form-control" name="business_seat_num" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="executive_seat_num" class="col-md-4 control-label">Executive Seat Number</label>
                            <div class="col-md-6">
                                <input id="executive_seat_num" type="number" class="form-control" name="executive_seat_num" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection