@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a Score</div>
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

                    <form class="form-horizontal" role="form" method="POST" action="/playerscores/store">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Runs Scored</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="runs-scored" value="{{ old('runs-scored') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Not Out</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="not-out" value="{{ old('not-out') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Wickets</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wickets" value="{{ old('wickets') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Balls Bowled</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="balls-bowled" value="{{ old('ball-bowled') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Runs Conceded</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="runs-conceded" value="{{ old('runs-conceded') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Catches</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="catches" value="{{ old('catches') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Stumpings</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stumpings" value="{{ old('stumpings') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Player</label>
                            <div class="col-md-6">
                                <select name="player_id" value="{{ old('player_id') }}" class="form-control">
                                    <?php foreach( $players as $player => $value ): ?>
                                        <option value="<?php echo $value; ?>" >
                                            <?php echo $player; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Score
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
