<h3>Change Password</h3>
<fieldset>
    <form method="post" action="">
        {{@csrf_field()}}
        Your Email: <input type="email" name="email" placeholder="Enter your Email"><br>
        @error('email')
            {{$message}} <br>
        @enderror
         New Password: <input type="password" name="newpass" placeholder="Enter New Password" ><br>
        @error('npass')
            {{$message}}<br>
        @enderror
        Confirm New Password: <input type="password" name="cnpass"  ><br>
        @error('cnpass')
            {{$message}}<br>
        @enderror

    </fieldset><br>
        <input type="submit" name="cpass" value="Change Password">
    </form><br>
    @include('includes.footer')
    
   