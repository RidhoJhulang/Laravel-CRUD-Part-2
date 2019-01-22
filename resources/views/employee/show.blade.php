@foreach ($employee as $employeelist)
   <p>{{$employeelist->employee_id}}
   {{$employeelist->employee_name}}
   {{$employeelist->employee_address}}
   {{$employeelist->employee_phone_number}}</p>
@endforeach
<a href ="{{ url('Employee') }}">
Back
</a> 