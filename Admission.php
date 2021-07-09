<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styles.css" rel="stylesheet">
</head>
<body style="background-color:wheat;" >

  <?php
// database connection code
if(isset($_POST['aadhaar'])) {
  printf("Aadhaar: %s,Date: %s, Courses: %s, Branch: %s, Programme: %s, type: %s, admissionquote: %s, studiedGmit: %s, NonKarnataka: %s, HostelRequired: %s, admissionyear: %s <br />",
  $_POST['aadhaar'],$_POST['date'],$_POST['courses'],$_POST['branch'],$_POST['programme'],$_POST['type'],$_POST['admissionquote'],$_POST['studiedGmit'],$_POST['NonKarnataka'],$_POST['HostelRequired'],$_POST['admissionyear']);
}
?>
    
  <h1 style="text-align:center; font-size: 100px; color:black;">GM institute of technology</h1>

<form action="Registration.php" method="post">
  <div class="container">

  <label for="aadhaar"><b>Aadhaar</b></label>
    <input type="number" placeholder="Enter Your Aadhaar Number" name="aadhaar" id="aadhaar" required><br>

    <label for="uname"><b>Admition Year</b></label>
    <input type="number" placeholder="Enter Your Year of Admission" name="admissionyear" id="admissionyear" required><br>

    <label for="num"><b>Date</b></label>
    <input type="text" placeholder="DD/MM/YYYY" name="date" id="date" required><br>
    
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
    
      <label for="Type"><b>Type</b>:</label>
      <select name="type" id="type">
        <option value="Regular"></option>
        <option value="Regular">Regular</option>
        <option value="Lateral Entry">Lateral Entry</option>
      </select>
    <br>
    
    
      <label for="Admission Quote"><b>Admission Quote</b>:</label>
      <select name="admissionquote" id="admissionquote">
        <option value="CET"></option>
        <option value="CET">CET</option>
        <option value="SNQ">SNQ</option>
        <option value="COMEDK">COMEDK</option>
        <option value="Management">Management</option>
      </select>
    <br>
    
      <label for="Type"><b>Have you studied in Gmit?</b>:</label>
      <select name="studiedGmit" id="StudiedGmit">
        <option value="NO"></option>
        <option value="Yes">YES</option>
        <option value="NO">NO</option>
      </select>
    <br>
    
      <label for="Type"><b>Are you Non Karnatakan?</b>:</label>
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
