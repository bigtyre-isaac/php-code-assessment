<?php
$currentUrl = sprintf('%s://%s%s', isset($_SERVER['HTTPS']) ? 'https' : 'http', $_SERVER['HTTP_HOST'], strtok($_SERVER["REQUEST_URI"], '?'));

// Get the input from the GET/POST variables
$followupCode = 'ABC123'; // <-- Replace with the code provided as a GET/POST parameter
//$followupCode = 
//$testimonialText = 
//$postalAddress = 

// Get the survey from the database using MeekroDB. Returns an associative array or null.
// See https://meekro.com/docs
$survey = DB::queryFirstRow(
  'SELECT 
    `id`,
    `name`,
    `testimonial`,
    `postal_address`,
    `followup_date_completed`,
    `is_followup_completed`
  FROM `survey_responses`
  WHERE `followup_code` = %s',
  $followupCode
);

// If the followup code does not match any records, display a 'Code not found' message and return 


// If followup has already been completed for the code, display a Thank You message and return


$action = $_REQUEST['action'] ?? null;
switch ($action) {
  case 'save':
    // Validate inputs (postal address and testimonial text are required)
    $isValid = false;

    $errors['testimonialText'] = 'Testimonial cannot be empty.';

    // If inputs are valid, save and exit
    if ($isValid) {

      // Update the database with the values provided by the user.
      // Set the followup_date_completed to the current time. You can use the date format 'Y-m-d H:i:s' to ensure it will be recognized by MySQL.
      // See MeekroDB document for update syntax

      // Redirect back to this form as a GET request, to trigger the thank you page
      $currentUrl .= "?" . http_build_query(['code' => $followupCode]);
      header("Location: $currentUrl");
      return;
    }
    break;
}

// Display the form, including values already entered and any validation errors
?>
<h1>Feedback</h1>
<form method="POST">
  
  <label>Testimonial</label>
  <textarea type="text" name="testimonialText" rows="10"><?php echo $testimonialText; ?></textarea>
  <div class="validation-error"><?php echo $errors['testimonialText'];?></div>

  <button type="submit" name="action" value="save">Submit</button>
<form>