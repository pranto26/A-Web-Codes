<h2> Medicine List</h2>
<table border="1">
    <tr>
        <td> Id</td>
        <td>Medicine Name</td>
        <td>Company</td>
        <td>Price</td>
    </tr>

       @foreach($mlists as $orderlist)
       <tr>
        
        <td> {{$orderlist['id']}}</td>
        <td>{{$orderlist['name']}}</td>
        <td>{{$orderlist['company']}}</td>
        <td>{{$orderlist['price']}}</td>
       @endforeach
        
    </tr>



</table><br>
@include('includes.footer')