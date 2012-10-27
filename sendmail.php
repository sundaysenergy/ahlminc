<?
  $email = $_REQUEST['borrower_email'] ;
  $message = $_REQUEST['borrower_name'] ;
  $borrower_name = $_REQUEST['borrower_name'] ;
  $coborrower_name = $_REQUEST['coborrower_name'] ;
  $borrower_email = $_REQUEST['borrower_email'] ;
  $address_1 = $_REQUEST['address_1'] ;
  $address_2 = $_REQUEST['address_2'] ;
  $city = $_REQUEST['city'] ;
  $state = $_REQUEST['state'] ;
  $zip = $_REQUEST['zip'] ;
  $day_phone = $_REQUEST['day_phone'] ;
  $night_phone = $_REQUEST['night_phone'] ;
  $fax = $_REQUEST['fax'] ;
  $borrower_ssn = $_REQUEST['borrower_ssn'] ;
  $coborrower_ssn = $_REQUEST['coborrower_ssn'] ;
  $borrower_income = $_REQUEST['borrower_income'] ;
  $coborrower_income = $_REQUEST['coborrower_income'] ;
  $seeking = $_REQUEST['seeking'] ;
  $refi_value = $_REQUEST['refi_value'] ;
  $purchase_down = $_REQUEST['purchase_down'] ;
  $how_find_us = $_REQUEST['how_find_us'] ;
  $comments = $_REQUEST['comments'] ;
  $permission = $_REQUEST['permission'] ;


  mail( "olivia@ahlminc.com",
	"AHLM Inc. Online Application",
	"$message\n------------------------------\n------------------------------\nBorrower's Name: $borrower_name\nCo-Borrower Name: $coborrower_name\nBorrower E-Mail: $borrower_email\nBorrower Address 1: $address_1\nBorrower Address 2: $address_2\nCity: $city\nState: $state\nZIP Code: $zip\nDay Phone: $day_phone\nNight Phone: $night_phone\nFax: $fax\nBorrower's SSN: $borrower_ssn\nCo-Borrower's SSN: $coborrower_ssn\nBorrower's Income: $borrower_income\nCo-Borrower's Income: $coborrower_income\nInterested in: $seeking\nIf Refi, value: $refi_value\nIf Purchase, amount down: $purchase_down\nHow did you find us: $how_find_us\nComments: $comments\nGrant permission: $permission\n--------------------\n",
	"From: $email" );
  header( "Location: thankyou.html" );
?>