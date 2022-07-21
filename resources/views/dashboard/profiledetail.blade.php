<h2> Profile Details</h2>
<fieldset>
<p>Email:prantosaha604@gmail.com</p><br><br>
<h4> Personal Storage</h4>
<p> Here you can upload to keep your necessary files here!</p><br>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"> <br><br>
    <button type="submit"> Upload </button>
</form>
</fieldset>
@include('includes.footer')

