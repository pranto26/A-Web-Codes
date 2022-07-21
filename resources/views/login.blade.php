
<h3>Login</h3>
<fieldset>
    <form method="post" action="">
        {{@csrf_field()}}
        Email: <input type="text" name="email" placeholder="Enter Email"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password" placeholder="Enter a Password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
    </fieldset><br>
        <input type="submit" name="login" value="Login">
    </form>
    <p> Don't have any account? <a href="{{route('customer.register')}}">Sign Up</a></p>
   