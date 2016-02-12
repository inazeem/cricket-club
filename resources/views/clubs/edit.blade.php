@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Club Registeration</div>
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

                        <form class="form-horizontal" role="form" method="POST" action="/clubs/update/{{$club->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Club Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ $club->name }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Owner</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="owner" value="{{ $club->owner }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Secretory</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="secretory" value="{{  $club->secretory }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Admin</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="admin" value="{{ $club->admin }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Address Line 1</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address1" value="{{ $club->address1 }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Address Line 2</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address2" value="{{ $club->address2 }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">City</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="city" value="{{ $club->city }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Postcode</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="postcode" value="{{ $club->postcode }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">County</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="county" value="{{ $club->county }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
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
