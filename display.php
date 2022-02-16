

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
      table {
        width:50%;
        margin: auto; 
      } 
      table th{
        background: black;
        color: white;
        font-size: 20px;
      } 
      .d1{
        background: #999696;

      }
    </style>
</head>
<body>
 
 <div id="main">
     <div id="table">
         <table border="1" width="50" height="50">
             <thead>
                <tr>
                <th>S.no</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
                <th>dt</th>
                </tr>
             </thead>
             <tbody>
                <?php
  
    // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
       

    }
       $sql = " SELECT * FROM `contactus`";
       $result = mysqli_query($conn, $sql);

       $num = mysqli_num_rows($result);
       // echo $num;
       echo "<br>";
       echo "<br>";

       if ($num> 0) {
            while($row = mysqli_fetch_assoc($result)){
       
          // echo $row['s.no'] .  $row['name'] . $row['email'] . $row['concern'] . $row['dt'] ;
  
          ?>
          
       <tr> 
                 <td class="d1"> <?php  echo $row['s.no']; ?></td>
                 <td class="d1"><?php  echo $row['name']; ?></td>
                 <td class="d1"><?php  echo $row['email']; ?></td>
                 <td class="d1"><?php  echo $row['concern']; ?></td>
                 <td class="d1"><?php  echo $row['dt']; ?></td>

       </tr>

    <?php   
    }

       }

?>
                
             </tbody>
         </table>
     </div>
 </div>

</body>
</html>