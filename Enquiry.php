<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet">
</head>
<body style="background-color:wheat;" >

  <?php
// database connection code
if(isset($_POST['aadhaar'])) {
  // printf("Aadhaar: %s,admissiondate: %s, Courses: %s, Branch: %s, Programme: %s, admissiontype: %s, admissionquota: %s, studiedgmit: %s, NonKarnataka: %s,
  //  HostelRequired: %s, admissionyear: %s <br />",
  // $_POST['aadhaar'],$_POST['admissiondate'],$_POST['courses'],$_POST['branch'],$_POST['programme'],$_POST['admissiontype'],$_POST['admissionquota'],
  // $_POST['studiedgmit'],$_POST['NonKarnataka'],$_POST['HostelRequired'],$_POST['admissionyear']);

 $aadhaar = $_POST['aadhaar'];
 $admissionyear = $_POST['admissionyear'];
 $admissiondate = $_POST['admissiondate'];
 $programme = $_POST['programme'];
 $courses = $_POST['courses'];
 $branch = $_POST['branch'];
 $admissiontype = $_POST['admissiontype'];
 $admissionquota = $_POST['admissionquota'];
 $studiedgmit = $_POST['studiedgmit'];
 $NonKarnataka = $_POST['NonKarnataka'];
 $HostelRequired = $_POST['HostelRequired'];

  $connection = mysqli_connect('localhost', 'root', '','details_gmit_phoenix');

  $sql = "INSERT INTO `admissions`(`aadhaar`,`admission_year`,`admission_date`,`programme`,`courses`,`branch`,
                                    `admission_type`,`admission_quota`,`ex_gmit`,`non_karnataka`,`hostel_required`)
   VALUES ('$aadhaar','$admissionyear','$admissiondate','$programme','$courses','$branch',
             '$admissiontype','$admissionquota','$studiedgmit','$NonKarnataka','$HostelRequired')";
             
   $rs = mysqli_query($connection, $sql) or die("Bad Query: $sql");
   if($rs)
   {echo "Contact Records Inserted";}
}
?>
    
  <h1 style="text-align:center; font-size: 100px; color:black;">GM institute of technology</h1>

<form action="Registration.php" method="post">
  <div class="container">

  <label for="aadhaar"><b>Aadhaar</b></label>
    <input type="number" placeholder="Enter Your Aadhaar Number" name="aadhaar" id="aadhaar" required><br>

    <label for="uname"><b>Admission Year</b></label>
    <input type="number" placeholder="Enter Your Year of Admission" name="admissionyear" id="admissionyear" required><br>

    <label for="num"><b>Admission Date</b></label>
    <input type="text" placeholder="DD/MM/YYYY" name="admissiondate" id="admissiondate" required><br>
    
      <label for="programme"><b>Programme</b>:</label>
      <select name="programme" id="programme">
        <option value="non"></option>
        <option value="UG">UG</option>
        <option value="PG">PG</option>
      </select>
    <br>

    <label for="courses"><b>Courses</b>:</label>
      <select name="courses" id="courses">
        <option value="non"></option>
        <option value="BE">BE</option>
        <option value="B.Tech">B.Tech</option>
        <option value="B.Pharma">B.Pharma</option>
        <option value="BA">BA</option>
        <option value="BSC">BSC</option>
      </select>
   <br>
   
      <label for="branch"><b>Branch</b>:</label>
      <select name="branch" id="branch">
        <option value="non"></option>
        <option value="AIML">AIML</option>
        <option value="BT">BT</option>
        <option value="CSE">CSE</option>
        <option value="CIV">CIV</option>
        <option value="ECE">ECE</option>
        <option value="ISE">ISE</option>
        <option value="ME">ME</option>
        <option value="CS&E">CS&D</option>
        <option value="AI&DS">AI&DS</option>
      </select>
   <br>
    
      <label for="admissiontype"><b>Admission Type</b>:</label>
      <select name="admissiontype" id="admissiontype">
        <option value="Regular"></option>
        <option value="Regular">Regular</option>
        <option value="Lateral Entry">Lateral Entry</option>
      </select>
    <br>
    
    
      <label for="Admission Quota"><b>Admission Quota</b>:</label>
      <select name="admissionquota" id="admissionquota">
        <option value="non"></option>
        <option value="CET">CET</option>
        <option value="SNQ">SNQ</option>
        <option value="COMEDK">COMEDK</option>
        <option value="Management">Management</option>
      </select>
    <br>
    
      <label for="Type"><b>Have you studied in Gmit?</b>:</label>
      <select name="studiedgmit" id="studiedgmit">
        <option value="NO"></option>
        <option value="Yes">YES</option>
        <option value="NO">NO</option>
      </select>
    <br>
    
      <label for="Type"><b>Are you Non Karnataka?</b>:</label>
      <select name="NonKarnataka" id="NonKarnataka">
        <option value="NO"></option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
      </select>
    <br>
    
      <label for="Type"><b>Is Hostel Required?</b>:</label>
      <select name="HostelRequired" id="HostelRequired">
        <option value="NO"></option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
      </select>
  <br>
   
  </div>
  <button type="submit">Submit</button>
  <div class="container" style="background-color:#f1f1f1">
  </div>
</form>

</body>
</html>
