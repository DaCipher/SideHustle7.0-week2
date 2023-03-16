<?php

$pvc = false; // Accepts True or false, 1 or 0
$age = 17;
$ward = 22;

$errors = [
  'age' => "",
  'pvc' => "",
  'ward' => ""
]; // Error Bag

if (!$pvc) {
  $errors['pvc'] = "You don't have PVC!\n";
}

if ($age < 18) {
  $errors['age'] = "You must be at least 18years to vote!\n";
}

if ($ward != 20) {
  $errors['ward'] = "You must be from ward 20 to vote!\n";
}

$pvcstatus = (!$pvc) ? "Not Enrolled\n" : "Enrolled\n"; // Customise PVC Status
echo "VOTER DETAILS\n";
echo "PVC: $pvcstatus";
echo "Age: $age\n";
echo "Ward: $ward\n\n";
echo "VOTER STATUS\n";

// Check if there are errors.
if (empty($errors['pvc']) && empty($errors['age']) & empty($errors['ward'])) {
  echo "Voter eligible to vote.\n";
} else {
  // Loop through the error bag
  foreach ($errors as $error) {
    //Find error bags that are not empty
    if (!empty($error)) {
      echo "Error: $error";
    }
  }
}
