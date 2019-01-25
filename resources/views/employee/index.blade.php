@extends('layouts/sb-admin')

@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page header">Employee Data</h1>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <dic class="panel body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
    <tbody>
    @foreach ($employee as $employeelist)
        <tr class="odd gradex">
        <td class="center">{{$employeelist->employee_id}}</td>
        <td class="center">{{$employeelist->employee_name}}</td>
        <td class="center">{{$employeelist->employee_address}}</td>
        <td class="center">{{$employeelist->employee_phone_number}}</td>
        <td>
        <a class="btn btn-primary" href="/Employee/{{ $employeelist->employee_id }}">Show</a>
        </td>
        <td>
        <a class="btn btn-success" href="/Employee/{{ $employeelist->employee_id }}/edit">Edit</a>
        </td>
        <td>
        <form action="/Employee/ {{$employeelist->employee_id}}" method="post">
    {{ csrf_field() }}  {{ method_field('DELETE') }}
    <button class="btn btn-danger"> Hapus </button>
    </td>
</form>
        </td>
        </tr>    
@endforeach    
</tbody>
</table>
</div>
</div>
<a href="{{ url('Employee/create') }}" class="btn btn-primary btn-lg btn-block">Tambah Data</a>
@endsection

