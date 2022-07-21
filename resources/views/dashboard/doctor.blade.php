<h2> Doctors List</h2>
<table border="1">
    <tr>
        <td> Id</td>
        <td>Medicine Name</td>
        <td>Company</td>
        <td>Price</td>
    </tr>

       @foreach($dlists as $doctor)
       <tr>
        
        <td> {{$doctor['id']}}</td>
        <td>{{$doctor['name']}}</td>
        <td>{{$doctor['specialist']}}</td>
        <td>{{$doctor['hospital']}}</td>
       @endforeach
        
    </tr>



</table><br>
@include('includes.footer')