@foreach ($customer as $customerlist)
   <p>{{$customerlist->customer_id}}
   {{$customerlist->name}}
   {{$customerlist->address}}</p>
<a href="/Customer/{{ $customerlist->customer_id }}">Show</a>
<br />
<!-- Tambahkan link edit di setiap row -->
<a href="/Customer/{{ $customerlist->customer_id }}/edit">Edit</a>
<br />
<!-- http://localhost:8000/Customer/1 -->
<form action="/Customer/ {{$customerlist->customer_id}}" method="post">
    {{ csrf_field() }}  {{ method_field('DELETE') }}
    <button> Delete </button>
</form>    
@endforeach    
<br />
<a href="{{ url('Customer/create') }}">
    CREATE
</a>