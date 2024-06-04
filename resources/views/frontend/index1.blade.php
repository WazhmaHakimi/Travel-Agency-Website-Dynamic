<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="frontend/style1.css">
</head>

<body>
  <div class="container">
    <h1 class="form-title">Booking </h1>
    <form action="/addRecord" method="POST">
      @csrf
      <div class="main-user-inf">
        <div class="user-input-box">
          <label for="username">
            Username:</label>
          <input type="text" id="FullName" name="UserName" placeholder=" Enter username">
        </div>
        <div class="user-input-box">
          <label for="FullName">Password:</label>
          <input type="text" id="Password" name="Password" placeholder=" Enter Password">
        </div>
        <div class="user-input-box">
          <label for="FullName">FullName:</label>
          <input type="text" id="FullName" name="FullName" placeholder=" Enter Full Name">
        </div>
        <div class="user-input-box">
          <label for="FullName">City:</label>
          <input type="text" id="city" name="City" placeholder=" Enter your city">
        </div>
       
        <div class="gender-details-box">
          <span class="gerder-category"> Gender:</span>
          <div class="gender-category">
            <input type="radio" name="gender_male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender_female" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender_other" id="other">
            <label for="other">Other</label>
        </div>
          <div class="user-input-box">
          
          
         
          <label for="Country">Select Your Country you live:</label>
          <select name="Country" id="Country" name="Country" placeholder="">
            <option value="Afghanitan">Afghanitan</option>
            <option value="Pakistan">Pakistan</option>
            <option value="LOndon">LOndon</option>
            <option value="Iran">Iran</option>
            <option value="Other">Other</option>
          </select>
          </div>
        </div>

      </div>
      <div class="Form-submit-btn">
        <button>Submit</button>
        
      </div>
    </form>
  </div>

</body>

</html>