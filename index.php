<!DOCTYPE html>
<html lang="en">
    <?php
    include 'includes/db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<form class="row g-3 needs-validation" novalidate method="POST">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" name="uname" id="uname" required>
    <div class="valid-feedback">
      good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" name="uemail" id="uemail" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a user email.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Phone</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">+91</span>
      <input type="number" class="form-control" name="unumber" id="unumber" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">dob</label>
    <div class="input-group has-validation">
      <input type="date" class="form-control" name="udob" id="udob" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a user dob.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">door no</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="door_no" id="door_no" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a door_no.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Street</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" name="street" id="street" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a street.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" name="city" id="city" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select"  name="state" id="state" required>
      <option selected disabled value="">Choose...</option>
      <option value="chennai">chennai</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">code</label>
    <input type="text" class="form-control" name="code" id="code" required>
    <div class="invalid-feedback">
      Please provide a valid code.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-6">
    <button class="btn btn-primary" name="submit" type="submit">Insert</button>
  </div>

  <div class="col-6">
    <button class="btn btn-primary" name="update" type="submit">Update</button>
  </div>

</form>
</div>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['unumber'];
    $dob = $_POST['udob'];
    $doorno = $_POST['door_no'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    ?>
    <div class="container">
    <table>
        <tr>
            <td>Name: </td>  <td><?php  echo $name; ?></td>  
        </tr>
        <tr>
            <td>email: </td>  <td><?php  echo $email; ?></td>  
        </tr>
        <tr>
            <td>DOB: </td>  <td><?php  echo $dob; ?></td>  
        </tr>
        <tr>
            <td>phone: </td>  <td><?php  echo $phone; ?></td>  
        </tr>
        <tr>
            <td>Door No: </td>  <td><?php  echo $doorno; ?></td>  
        </tr>
        <tr>
            <td>Street: </td>  <td><?php  echo $street; ?></td>  
        </tr>
        <tr>
            <td>City: </td>  <td><?php  echo $city; ?></td>  
        </tr>
        <tr>
            <td>State: </td>  <td><?php  echo $state; ?></td>  
        </tr>
        <tr>
            <td>Pin Code: </td>  <td><?php  echo $code; ?></td>  
        </tr>
    </table>
    </div>
    <?php
    
    
    $sql="INSERT INTO employee(name, email, phone, dob, door_no, street, city, state, code) VALUES('$name', '$email', '$phone', '$dob', '$doorno', '$street', '$city', '$state', '$code')";
    $result=mysqli_query($conn, $sql);

}

elseif(isset($_POST['update']))
{
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $phone = $_POST['unumber'];
    $dob = $_POST['udob'];
    $doorno = $_POST['door_no'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $code = $_POST['code'];
    
    
    $updatesql="UPDATE employee SET name='$name', phone='$phone', dob='$dob', door_no='$doorno', street='$street', city='$city', state='$state', code='$code' WHERE email='$email'";
    $result1=mysqli_query($conn, $updatesql);
    if($result1)
    {
        echo 'Updated';
    }
    else{
        echo 'Not updated';
    }

}else{
    echo 'not updated';
}


?>

<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()</script>
</body>
</html>
