@foreach ($employee as $employeelist)
   <p>{{$employeelist->employee_id}}
   {{$employeelist->employee_name}}
   {{$employeelist->employee_address}}
   {{$employeelist->employee_phone_number}}</p>
<a href="/Employee/{{ $employeelist->employee_id }}">Show</a>
<br />
<a href="/Employee/{{ $employeelist->employee_id }}/edit">Edit</a>
<br />
<form action="/Employee/ {{$employeelist->employee_id}}" method="post">
    {{ csrf_field() }}  {{ method_field('DELETE') }}
    <button> Delete </button>
</form>    
@endforeach 
<br />
<a href="{{ url('Employee/create') }}">
    CREATE
</a>
