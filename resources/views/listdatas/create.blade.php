@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Data List</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/listdatas') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add list</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
