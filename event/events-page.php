   <?php

	//resume session here to fetch session values
   $page_title = 'Upcoming Events | WMSU - Peace and Human Security Institute';
   require_once '../includes/head.php';
   require_once '../includes/header.php';
   require_once '../classes/user.class.php';

   //$user = new Users;
   //$userData = $user -> fetch($_SESSION['user_id']);

   // Check if user is logged in
   if (!isset($_SESSION['logged-in'])) {
   // User is not logged in, redirect to login page
   header('Location: ../login/login.php');
   exit();
 } 
?>


<?php
  require_once '../classes/event_model.php'; 
  $event = new Event();

  // Check if the article ID is set in the URL
  if (isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $article = $event->fetchRecordById($article_id);

    if ($article) {
?>




<!-- Event Section Start  -->

<section class="event-heading">
   <div class="event-banner-container">
  <img src="../uploads/<?php echo $article['event_banner']; ?>" class="banner" alt="Background Image">
  <div class="event-wrapper">
    <div class="event-infos">
      <h2 class="event-title"></h2>
    </div>
  </div>
</div>
</section>

<?php



$user = new Users;
$id = isset($_GET['id']) ? $_GET['id'] : null;
$userData = $user -> fetch($_SESSION['user_id']);
if(isset($_POST['submit'])) {
   
   // Verify the reCAPTCHA response
   $recaptcha_secret = '6Ley7zslAAAAAAzfUOiWUDuKPlagO_F2ODAAUcaY';
   $recaptcha_response = $_POST['g-recaptcha-response'];

   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
   $response_data = json_decode($response);

   if (!$response_data->success) {
     // The reCAPTCHA verification failed
     // Handle the error accordingly
   } else {
      // The reCAPTCHA verification succeeded
      // Process the form submission
      // ...
   } 
      // TABULATE DATA TO USER OBJECT
      $user->id = $id;
      $user->event_id = htmlentities($_POST['event_id']);
      $user->firstname = htmlentities($_POST['firstname']);
      $user->middlename = htmlentities($_POST['middlename']);
      $user->lastname = htmlentities($_POST['lastname']);
      $user->suffix = htmlentities($_POST['suffix']);
      $user->email = htmlentities($_POST['email']);
      $user->contact_number = htmlentities($_POST['contact_number']);
   
   if ($user->addUserToEvent()) {
      header('location: registered-event.php');
      exit;
   }
} else {
   if ($id && $user->fetch($id)){
      $data = $user->fetch($id);

      $_POST['firstname'] = $data['firstname'];
      $_POST['middlename'] = $data['middlename'];
      $_POST['lastname'] = $data['lastname'];
      $_POST['suffix'] = $data['suffix'];
      $_POST['email'] = $data['email'];
      $_POST['contact_number'] = $data['contact_number'];
   }
}
?>

<section class="rsvp-container">
    <div class="rsvp-box">
        <p style="text-align: center;font-size: 18px;font-weight: bold;"><?php echo $article['event_title'] ?></p>
        
        <button class="btn" id="open-modal-btn">RSVP TO JOIN THIS EVENT</button>

        <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="margin: auto; font-size: 3rem;">You're almost there!</h2>
            <p style="font-size: 12px; justify-content: center; display: flex; margin: auto; width: 50;padding: 2rem; text-align: center;">To help us fight spam, please complete this verification step. </p>
            
            <form action="events-page.php?id=<?php echo $id; ?>" class="modal-form" id="modal-form" method="post">
               
               <label for="firstname" style="display: none;">First Name:</label>
                <input type="hidden" id="firstname" name="firstname" required 
                value="<?php echo $userData['firstname'] ?>">

                <label for="middlename" style="display: none;">Middle Name:</label>
                <input type="hidden" id="middlename" name="middlename" 
                value="<?php echo isset($userData['middlename']) ?  $userData['middlename']: "" ?>">

                <label for="lastname" style="display: none;">Last Name:</label>
                <input type="hidden" id="lastname" name="lastname" required 
                value='<?php echo $userData['lastname'] ?>'>

                <label for="suffix" style="display: none;">Suffix:</label>
                <input type="hidden" id="suffix" name="suffix" 
                value="<?php echo isset($userData['suffix']) ?  $userData['suffix']: "" ?>">

                <label for="email" style="display: none;">Email:</label>
                <input type="hidden" id="email" name="email" required 
                value="<?php echo $userData['email'] ?>">

                <label for="contact_number" style="display: none;">Contact:</label>
                <input type="hidden" id="contact_number" name="contact_number" required 
                value="<?php echo $userData['contact_number'] ?> ">

                <input type="hidden" name='event_id' value="<?php echo $id; ?>">
                
                <div class="g-recaptcha" data-sitekey="6Ley7zslAAAAAEJKMa5RypSUqOkVHkS2cq5isadS" style="justify-content: center;display: flex;"></div>

                <input type="submit" id="submit" name="submit" value="Submit">  
            </form>
        </div>
    </div>
    </div>
</section>


<script>
  const modal = document.getElementById("modal");
  const btn = document.getElementById("open-modal-btn");
  const closeBtn = modal.querySelector(".close");
  const form = document.getElementById("modal-form");
  const rsvpBox = document.querySelector(".rsvp-box");

  btn.onclick = function() {
    modal.style.display = "block";
  }

  closeBtn.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  form.addEventListener("submit", function(event) {
   //event.preventDefault();   
   //modal.style.display = "none";
   //srsvpBox.innerHTML = "<p>Registration Successful! See you at the venue.</p>";
  });





</script>

<section class="about-event">
    <p class="about-heading">About this event</p>
    <p><?php echo $article['event_about'] ?></p>
</section>

<section class="event-information">
    <div class="event-info-container">
        <i class="bi bi-clock"><span>When</span></i>
        <p>Sept 28, 2022 11:00 AM - 5:00 PM</p>
        <i class="bi bi-geo-alt"><span>Where</span></i>
        <p><?php echo $article['event_location'] ?></p>
        <i class="bi bi-eye"><span>Scope</span></i>
        <p><?php echo $article['event_scope'] ?></p>
        <i class="bi bi-people"><span>Slots</span></i>
        <p><?php echo $article['event_slots'] ?></p>
        <i class="bi bi-laptop"><span>Platform</span></i>
        <p><?php echo $article['event_platform'] ?></p>
    </div>
    <!--<div class="event-agenda-container">
        <i class="bi bi-pencil-square"><span>Agenda</span></i>
        <div class="agenda-info">
            <p class="agenda-time">9:00 AM</p>
            <p class="agenda-label">Opening Remarks</p>
            <p class="agenda-host">MR. FLORETO B. QUINITO JR. MSIT, Office of the Student Affairs Director</p> 
        </div>
        <div class="agenda-info">
            <p class="agenda-time">11:00 AM</p>
            <p class="agenda-label">Guest Speaker</p>
            <p class="agenda-host">MR. FLORETO B. QUINITO JR. MSIT, Office of the Student Affairs Director</p>
        </div>
        <div class="agenda-info">
            <p class="agenda-time">11:30 AM</p>
            <p class="agenda-label">Program</p>
            <p class="agenda-host">MR. FLORETO B. QUINITO JR. MSIT, Office of the Student Affairs Director</p>
        </div>
        <div class="agenda-info">
            <p class="agenda-time">12:00 PM</p>
            <p class="agenda-label">Closing Remarks</p>
            <p class="agenda-host">MR. FLORETO B. QUINITO JR. MSIT, Office of the Student Affairs Director</p>
        </div>
    </div>-->
</section>



<section class="event-organizers">

   <h1 class="heading">Organizers</h1>


   <div class="box-container container">


      <div class="box">
         <img src="../images/administration-profile/phsi-marlon.png" alt="">
         <div class="admin-info">
         <h3>Engr. Marlon Grande</h3>
         <p>Club Adviser</p>
         </div>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-clarise.png" alt="">
         <h3>Clarise Jane Tayao</h3>
         <p>President</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-arafi.png" alt="">
         <h3>Araffi Suhaide</h3>
         <p>Vice President</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-krisha.png" alt="">
         <h3>Krisha Joy Elumir</h3>
         <p>General Secretary</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-ahmad.png" alt="">
         <h3>Ahmad Alawi</h3>
         <p>PIO</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-juniel.png" alt="">
         <h3>Juniel Anoso</h3>
         <p>External Finance</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-amir.png" alt="">
         <h3>Amir Nashireen Tadjul</h3>
         <p>Internal Finance</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-lowel.png" alt="">
         <h3>Lowel Jay Recto</h3>
         <p>Auditor</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-kin.png" alt="">
         <h3>Kin Gerald Lugas</h3>
         <p>Project Manager</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-almuha.png" alt="">
         <h3>Almuhaimin Jahama</h3>
         <p>Ambassador</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-elvina.png" alt="">
         <h3>Elvina Vanessa Kairan</h3>
         <p>Ambassadress</p>
      </div>

      <div class="box">
         <img src="../images/student-profile/user-icon.png"" alt="">
         <h3>Vanessa Pascua</h3>
         <p>Content Committee</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-kristine.png" alt="">
         <h3>Kristine Joy Esteban</h3>
         <p>Creative Committee Head</p>
      </div>

      <div class="box">
         <img src="../images/student-profile/user-icon.png" alt="">
         <h3>Myrtle Pama</h3>
         <p>Creative Committee Asst. Head</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-clark.png" alt="">
         <h3>Clark Santander</h3>
         <p>Creative Committee</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-jenevie.png" alt="">
         <h3>Jenevie Balendres</h3>
         <p>Creative Committee</p>
      </div>

      <div class="box">
         <img src="../images/administration-profile/unesco-gloria.png" alt="">
         <h3>Gloria Louie Escote</h3>
         <p>Membership Committee</p>
      </div>

      <div class="box">
         <img src="../images/student-profile/user-icon.png" alt="">
         <h3>Monique Dancel</h3>
         <p>Membership Committee</p>
      </div>
   </div>

</section>




<?php
    } else {
      // Display error message if article is not found
      echo 'We apologize, but we could not locate the article you are trying to access. It may no longer be available or may have been moved to a different location.';
    }
  } else {
    // Display error message if article ID is not set in URL
    echo 'Invalid article ID.';
  }
?>

<script src="../js/modal.js"></script>



<!-- Event Section End -->


<?php
    require_once '../includes/footer.php';
?>