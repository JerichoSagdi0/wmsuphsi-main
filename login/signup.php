<?php
    //resume session here to fetch session values
    session_start();
    $page_title = 'Sign Up | WMSU - Peace and Human Security Institute';
    require_once '../includes/head.php';
?>


<div class="signup-container">
    <div class="title">Sign Up Form</div>
    <div class="content">

    <!--PERSONAL INFORMATION-->
    <div class="sub-title">Personal Information</div>
      <form action="login.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Firstname</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details" id="middlename">Middlename</span>
            <input type="text" placeholder="">
          </div>
          <div class="input-box">
            <span class="details">Lastname</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details" id="middlename">Extension Name</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Street Address</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Barangay</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">City/town</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Country</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Contact number</span>
            <input type="text" placeholder="" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>

        <!--WMSU STATUS-->
          <div class="sub-title">WMSU Status (Optional) </div><br>
          <p style="COLOR: red;margin-bottom: 10px;">Please skip this part if it does not apply to you!
          </p>
          <label class="wmsu-status">WMSU Alumni
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
          <label class="wmsu-status">WMSU Employee
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="wmsu-status">WMSU Student
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="wmsu-status">WMSU Youth Peace Mediators - UNESCO Club 
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="wmsu-status">WMSU Biosafety and Biosecurity Committee
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>


           <!--ACCOUNT CREDENTIALS-->
          <div class="sub-title">Account Credentials</div><br>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" placeholder="">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="" required>
          </div>
        </div>
        
         <!--SIGN UP BUTTON-->
        <div class="button">
          <input type="submit" value="Sign Up">
        </div>
        <div class="have-account">
        <p>ALREADY HAVE AN ACCOUNT?<span> <a href="login.php">LOG IN</a></span></p>
        </div>
        
      </form>
    </div>
  </div>
  </section>
