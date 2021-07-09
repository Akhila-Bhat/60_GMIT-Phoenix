<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet">
</head>
<body style="background-color:oranged(186, 99, 207);" >

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
    <h1 style="text-align:center; font-size: 100px; color:black;">GM Institute Of Technology</h1>

<form action="Details.php" method="post">
  <div class="container">
    <label for="uname"><b>First Name:</b></label>
    <input type="text" placeholder="firstname" name="fname" id="fname" required><br>

    <label for="uname"><b>Last Name:</b></label>
    <input type="text" placeholder="lastname" name="lname" id="lname" required><br>

    <label for="num"><b>Date of birth</b></label>
    <input type="Number" placeholder="DD/MM/YYYY" name="dob" id="dob" required><br>
        <label for="gender"><b>Gender</b>:</label>
        <select name="gender" id="gender">
          <option value="non"></option>
          <option value="male">male</option>
          <option value="female">female</option>
          <option value="other">other</option>
        </select>
     <br>
      <label for="uname"><b>Religion:</b></label>
      <input type="text" placeholder=" " name="religion" id="religion" required><br>

      <label for="uname"><b>Category:</b></label>
      <input type="text" placeholder=" " name="category" id="category" required><br>

      <label for="uname"><b>Aadhaar:</b></label>
      <input type="text" placeholder=" " name="aadhaar" id="aadhaar" required><br>


      <label for="uname"><b>Caste:</b></label>
      <input type="text" placeholder=" " name="caste" id="caste" required><br>


      <label for="uname"><b>Father name:</b></label>
      <input type="text" placeholder=" " name="fathername" id="fathername" required><br>

      <label for="uname"><b>Mother name:</b></label>
      <input type="text" placeholder=" " name="mothername" id="mothername" required><br>

      <label for="uname"><b>Parents mobile:</b></label>
      <input type="number" placeholder="0123456789" name="parentsmobile" id="parentsmobile" required><br>

      <label for="uname"><b>Student Mobile:</b></label>
    <input type="number" placeholder="0123456789" name="studentmobile" id="studentmobile" required><br>

    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="@gmail.com" name="email" id="email" required><br>

    <label for="uname"><b>College studied</b></label>
    <input type="text" placeholder="" name="college" id="college" required><br>

    <label for="uname"><b>How you know about GMIT</b></label>
    <input type="text" placeholder="" name="how" id="how" required><br>

      <label for="referred by"><b>Referred by</b>:</label>
      <select name="referredby" id="referredby">
        <option value="non"></option>
        <option value="self">self</option>
        <option value="parents">parents</option>
        <option value="other">others</option>
      </select>
    <br>
      <label for="uname"><b>RESIDENTAL ADDRESS</b></label>
  <input type="text" placeholder="address" name="address" id="address" required>
  </br>
  <p></p> 
  <br>
  <label for="uname"><b>SECONDARY ADDRESS</b></label>
  <input type="text" placeholder="saddress" name="saddress" id="saddress"  required>
  </br>
  <p></p>
  <br>
  <label for="uname"><b>PIN CODE</b></label>
  <input type="text" placeholder="pin" name="pin" id="pin" required>
  </br>
  <p></p>
  <br>
  <label for="uname"><b>STATE</b></label>
  <input type="text" placeholder="state" name="state" id="state" required>
  </br>
  <p></p>
  <br>
  <label for="uname"><b>DISTRICT</b></label>
  <input type="text" placeholder="district" name="district" id="district" required>
  </br>
  <p></p>
<br>
<label for="uname"><b>TALUK</b></label>
<input type="text" placeholder="taluk" name="taluk" id="taluk" required>
</br>

<label for="uname"><b>SSLC Marks</b></label>
    <input type="number" placeholder="schoolmarks" name="schoolmarks" id="schoolmarks" required><br>

    <label for="uname"><b>SSLC Percentage</b></label>
    <input type="number" placeholder="schoolpercentage" name="schoolpercentage" id="schoolpercentage" required><br>

    <label for="uname"><b>School name</b></label>
    <input type="text" placeholder="schoolname" name="schoolname" id="schoolname" required><br>

    <label for="uname"><b>Year of Pass Out</b></label>
    <input type="number" placeholder="schoolpassoutyear" name="schoolpassoutyear" id="schoolpassoutyear" required><br>

    <label for="uname"><b>PU College Name</b></label>
    <input type="text" placeholder=pucollegename" name="pucollegename" id="pucollegename" required><br>

    <label for="uname"><b>PU Marks</b></label>
    <input type="number" placeholder="pumarks" name="pumarks" id="pumarks" required><br>

    <label for="uname"><b>PU Roll Number</b></label>
    <input type="number" placeholder="purollnumber" name="purollnumber" id="purollnumber" required><br>

    <label for="uname"><b>PU Branch</b></label>
    <input type="text" placeholder="pubranch" name="pubranch" id="pubranch" required><br>


    <label for="uname"><b>PU Percentage</b></label>
    <input type="text" placeholder="pupercentage" name="pupercentage" id="pupercentage" required><br>

    <label for="uname"><b>PU Year of PassOut</b></label>
    <input type="number" placeholder="pupassoutyear" name="pupassoutyear" id="pupassoutyear" required><br>

    <label for="uname"><b>KCET Ranking</b></label>
    <input type="text" placeholder="kcetranking" name="kcetranking" id="kcetranking" required><br>

    <label for="uname"><b>COMEDK Ranking</b></label>
    <input type="text" placeholder="comedkranking" name="comedkranking" id="comedkranking" required><br>
    <br>
   
  </div>
  <button type="submit">Submit</button>
  <label>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

</body>
</html>