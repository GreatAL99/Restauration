<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
  <body>
    <center>
      <form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
return true; }
</script>
<section>
    <div class="container-fluid"> </div>
    <h1 class="text-center text-centralize pt-5">Contact Us</h1>
    <hr class="w-25 mx-auto pt-5">
  </section>
<div class="form-group">
      <label for="Name">Your Name</label>
      <input type="Name" class="form-control" style='width: 50%' id="Name" placeholder="Enter Your Name" name="Name">
    </div>
<div class="form-group">
      <label for="PhoneNumber">PhoneNumber</label>
      <input type="text" class="form-control" style='width: 50%' id="PhoneNumber" placeholder="Enter Your PhoneNumber" name="PhoneNumber">
    </div>
<div class="form-group">
      <label for="FromEmailAddress">Email</label>
      <input type="text" class="form-control" id="FromEmailAddress" style='width: 50%'  placeholder="Enter Your Email" name="FromEmailAddress">
    </div>
<div class="form-group">
      <label>Textarea</label>
      <textarea class="form-control"  style='width: 50%' name="Comments"></textarea>
    </div>
<div style="float:right"><a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div>
<button type="submit" name="skip_Submit" class="btn btn-primary">Send</button>

<script src="https://www.100forms.com/js/FORMKEY:92GCX3AB635C/SEND:my@email.com" type="text/javascript"></script>
</td> </tr>
</table>
</form>
    </center>

</head>
</body>
</html>