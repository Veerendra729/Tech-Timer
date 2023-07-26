<?php
 include('config.php');
 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM times';
  if( !( $selectRes = mysqli_query($link,$selectSQL) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else{
    ?>
<table border="2">
  <thead>
    <tr>
      <th>From</th>
      <th>To</th>
      <th>Duration</th>
      <th>Project</th>
      <th>Activity</th>
      <th>Description</th>
      <th>Tags</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['Fromt']}</td><td>{$row['Tot']}</td><td>{$row['Duration']}</td><td>{$row['Project']}</td><td>{$row['Activity']}</td><td>{$row['Description']}</td><td>{$row['Tags']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }

?>