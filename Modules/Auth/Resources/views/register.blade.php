<form method="POST" action="register">
  {{ csrf_field()}}
  <div class="form-group">
    <label for="username">Username</label>
    <input type="input" class="form-control" id="username" name="username" placeholder="Enter Username" required>
  </div>
  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="input" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
  </div>
  <div class="form-group">
    <label for="middle_name">Middle Name</label>
    <input type="input" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
  </div>
  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="input" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="emal" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Register</button>

  <div class="form-group">
    
  </div>

</form>