@foreach ($customer as $customerlist)
   <p>{{$customerlist->customer_id}}
   {{$customerlist->name}}
   {{$customerlist->address}}</p>
@endforeach
<a href ="{{ url('Customer') }}">
Back
</a>   