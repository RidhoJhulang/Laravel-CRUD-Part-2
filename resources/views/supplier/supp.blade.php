@foreach ($supplier as $supplierlist)
   <p>{{$supplierlist->supplier_id}}
   {{$supplierlist->supplier_name}}
   {{$supplierlist->supplier_address}}</p>
@endforeach 

<a href="{{ url('Supplier/create') }}">
    Tekan Saya Neng
</a>