@extends('layouts/sb-admin')

@section ('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page header">Customer Data</h1>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <dic class="panel body">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id Customer</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
    <tbody>
    @foreach ($customer as $customerlist)
        <tr class="odd gradex">
        <td class="center">{{$customerlist->customer_id}}</td>
        <td class="center">{{$customerlist->name}}</td>
        <td class="center">{{$customerlist->address}}</td>
        <td>
        <a class="btn btn-primary" href="/Customer/{{ $customerlist->customer_id }}">Show</a>
        </td>
        <td>
        <a class="btn btn-success" href="/Customer/{{ $customerlist->customer_id }}/edit">Edit</a>
        </td>
        <td>
        <form action="/Customer/ {{$customerlist->customer_id}}" method="post">
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
<a href="{{ url('Customer/create') }}" class="btn btn-primary btn-lg btn-block">Tambah Data</a>
@endsection
