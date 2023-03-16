@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List Data</div>
                    <div class="panel-body">
                        <a href="{{ url('listdatas.create') }}" class="btn btn-primary">Add listdata</a>

                        <br>
                        <br>
                        <br>

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </th>

                                    @if (!count($listdatas))
                                        {{-- <tr>
                                    <td colspan="3">No Listdata</td>
                                </tr> --}}
                                    @endif
                                    @foreach ($listdatas as $listdata)
                                <tr>
                                    <td>{{ $listdata->name }}</td>
                                    <td>{{ $listdata->email }}</td>
                                    <td>{{ $listdata->status }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ url('listdatas/' . $listdata->id . '/edit') }}">Edit</a>
                                        <a class="btn btn-danger"
                                            href="{{ url('listdatas/' . $listdata->id . '/delete') }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
