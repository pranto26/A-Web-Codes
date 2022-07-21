
  <fieldset>    
    <form action="/search">
        <input type="text" name="query"
        <button type="submit" value="Search" </button>
        </form>
   <div>
    <a href="{{route('about')}}">About Us</a><br><br>
    <a href="{{route('pdetails.customer')}}">Personal Details</a><br><br>
    <a href="{{route('cpassword')}}">Change Password</a><br><br>
    <a href="{{route('mdc.list')}}">Medicine List</a><br><br>
    <a href="{{route('doctor.list')}}">Doctor List</a><br><br>
    <a href="{{route('email')}}">Contact Helpline</a><br><br><br>
    <a href="{{route('customer.login')}}">Logout</a>
</div>
</fieldset>