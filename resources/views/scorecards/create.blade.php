@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a Scorecard</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/scorecards/store">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Runs Scored</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="runs-scored" value="{{ old('runs-scored') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Over Bowled</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="over-bowled" value="{{ old('over-bowled') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Wickets</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wickets" value="{{ old('wickets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Leg Byes</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="leg-byes" value="{{ old('leg-byes') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Wides</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wides" value="{{ old('wides') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Byes</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="byes" value="{{ old('byes') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">No Balls</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no-balls" value="{{ old('no-balls') }}">
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="match_id" value="{{ $matchid }}">


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Scorecard
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
