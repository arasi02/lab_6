<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
 <style> 
   table {
     background-color: peachpuff;
   }
   th, td {
     padding: 5px;
   }
 </style>
</head>
<body>
  <?php
    $name = "Tamil Arasi" ;
    $MatricNum = "DI220136" ;
    $Course = "Information Technology";
    $YearOfStudy = "2nd Year";
    $Address = "No 67, Jalan Abadi 9, Taman Malim Jaya, 75250 Melaka";
  ?>
 <table border="1">
    <tr>
      <th>Aspect</th>
      <th>Personal Details</th>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$MatricNum"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$Course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$YearOfStudy"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$Address"; ?></td>
    </tr>
  </table>
</body>
</html>
