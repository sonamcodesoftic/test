<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Sr.no.</td>
            <td>Name</td>  
            <td>Lastname</td>
            <td>Email</td>  
            <td>Password</td>
            <td colspan="2">Actions</td> 
         </tr>  
         <tr>
         <?php  
          $query = $this->db->query('SELECT * FROM `users`');
          $count=1;
          foreach ($query->result_array() as $row)
          {
            echo'
             <tr>
               <td>'.$count.'</td>
               <td>'.$row['fname'].'</td>
               <td>'.$row['lname'].'</td>
               <td>'.$row['email'].'</td>
               <td>'.$row['password'].'</td>
               <td><a href="#">Edit</a></td>
               <td><a href="#">Delete</a></td>
             </tr>
            ';
            $count++;
          }
         ?> 
           </tr> 
      </tbody>  
   </table>
<body>  
</body>  
</html>