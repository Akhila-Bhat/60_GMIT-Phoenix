<?php

if(isset($_POST['fname']))
 {
// database connection code   
  // $connection = mysqli_connect('localhost', 'database_user', 'database_password','database');
  $connection = mysqli_connect('localhost', 'root', '','details_gmit_phoenix');

   // get the post records
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $religion = $_POST['religion'];
   $category = $_POST['category'];
   $caste = $_POST['caste'];
   $fathername = $_POST['fathername'];
   $mothername = $_POST['mothername'];
   $parentsmobile = $_POST['parentsmobile'];
   $studentmobile = $_POST['studentmobile'];
   $email = $_POST['email'];
   $college = $_POST['college'];
   $how = $_POST['how'];
   $referredby = $_POST['referredby'];
   $aadhaar = $_POST['aadhaar'];
   $address = $_POST['address'];
   $saddress = $_POST['saddress'];
   $pin = $_POST['pin'];
   $state = $_POST['state'];
   $district = $_POST['district'];
   $taluk = $_POST['taluk'];
   $schoolmarks = $_POST['schoolmarks'];
   $schoolpercentage = $_POST['schoolpercentage'];
   $schoolname = $_POST['schoolname'];
   $schoolpassoutyear = $_POST['schoolpassoutyear'];
   $pucollegename = $_POST['pucollegename'];
   $pumarks = $_POST['pumarks'];
   $purollnumber = $_POST['purollnumber'];
   $pubranch = $_POST['pubranch'];
   $pupercentage = $_POST['pupercentage'];
   $pupassoutyear = $_POST['pupassoutyear'];
   $kcetranking = $_POST['kcetranking'];
   $comedkranking = $_POST['comedkranking'];

   // database insert SQL code
  $sql = "INSERT INTO `students` (`fname`, `lname`, `dob`, `gender`,`religion`,`category`,`caste`,`fathername`,`mothername`,
  `parentsmobile`,`studentmobile`,`email`,`college`,`how`,`referredby`,`aadhaar`,`address`,`saddress`,`pin`,`state`,
  `district`,`taluk`,`schoolmarks`,`schoolpercentage`,`schoolname`,`schoolpassoutyear`,`pucollegename`,`pumarks`,`purollnumber`,
  `pubranch`,`pupercentage`,`pupassoutyear`,`kcetranking`,`comedkranking`)
   VALUES ('$fname', '$lname', '$dob', '$gender','$religion','$category','$caste','$fathername','$mothername','$parentsmobile','$studentmobile','$email',
   '$college','$how','$referredby','$aadhaar','$address','$saddress','$pin','$state','$district','$taluk','$schoolmarks','$schoolpercentage','$schoolname',
   '$schoolpassoutyear','$pucollegename','$pumarks','$purollnumber','$pubranch','$pupercentage','$pupassoutyear','$kcetranking','$comedkranking')";

$rs = mysqli_query($connection, $sql) or die("Bad Query: $sql");
  if($rs)
  {echo "Contact Records Inserted";}

  // printf("fname: %s, lname: %s, dob: %s, gender: %s, religion: %s, category: %s, caste: %s, fathername: %s, mothername: %s, parentsmobile: %s, studentmobile: %s, email: %s,
  //  college: %s, how: %s, referredby: %s, aadhaar: %s, address: %s, saddress: %s, pin: %s, state: %s, district: %s, taluk: %s, schoolmarks: %s, schoolpercentage: %s, schoolname: %s,
  //  schoolpassoutyear: %s, pucollegename: %s, pumarks: %s, purollnumber: %s, pubranch: %s, pupercentage: %s, pupassoutyear: %s, kcetranking: %s, comedkranking: %s  <br />",
  // $_POST['fname'],$_POST['lname'],$_POST['dob'],$_POST['gender'],$_POST['religion'],$_POST['category'],$_POST['caste'],$_POST['fathername'],$_POST['mothername'],
  // $_POST['parentsmobile'], $_POST['studentmobile'],$_POST['email'],$_POST['college'],$_POST['how'],$_POST['referredby'],$_POST['aadhaar'],$_POST['address'],
  // $_POST['saddress'],$_POST['pin'],$_POST['state'],$_POST['district'],$_POST['taluk'],$_POST['schoolmarks'],$_POST['schoolpercentage'],$_POST['schoolname'],
  // $_POST['schoolpassoutyear'],$_POST['pucollegename'],$_POST['pumarks'],$_POST['purollnumber'],$_POST['pubranch'],$_POST['pupercentage'],$_POST['pupassoutyear'],
  // $_POST['kcetranking'],$_POST['comedkranking']);
}
?>