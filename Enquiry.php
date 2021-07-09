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