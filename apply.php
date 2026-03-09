<form action="../submit_application.php" method="POST" enctype="multipart/form-data">

<select name="county">
<option>Meru</option>
<option>Nairobi</option>
<option>Kisumu</option>
<option>Mombasa</option>
</select>

<select name="education">
<option>KCSE</option>
<option>Diploma</option>
<option>Degree</option>
</select>

<label>Passport Photo</label>
<input type="file" name="photo" accept=".jpg,.png">

<label>National ID</label>
<input type="file" name="id_document" accept=".jpg,.png,.pdf">

<label>Certificate</label>
<input type="file" name="certificate" accept=".jpg,.png,.pdf">

<button>Submit Application</button>

</form>