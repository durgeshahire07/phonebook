<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>
<body>
    <div>
        <div class="header">  
        <i class="fas fa-phone"></i>  
            <h3>Phonebook App</h3>
            <p id="msg"></p>
        </div>
        <h3 id="heading">Saved Contacts</h3>
        <div class="table">
           
       
        <?php  
         $con = mysqli_connect('localhost','root','');
         $query = "SELECT * FROM `phonebook`.`data`";
         $result = mysqli_query($con,$query);
         
         echo "<table id='t' border='1'>
         <tr>
         <th>Sr.No.</th>
         <th>Name</th>
         <th>Number</th>
         </tr>
         ";

         while($row = mysqli_fetch_array($result)) {
            //  echo "".$row["name"]." ".$row["phone"]."<br>";
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['phone']."</td>";     
            echo "</tr>";    
            }

        echo "</table>";
        mysqli_close($con);
        ?>

        </div>


        <br>
        <h3 id="heading">Add Contact</h3>
        <div class="container">
            <form autocomplete="off" action="add.php" method="post">
            <input type="text" name="id" id="id" required placeholder="Sr. No.">
            <br><br>
            <input type="text" name="name" id="name" required placeholder="Name">
            <br><br>
            <input type="number" name="number" id="number" required placeholder="Phone Number">
            <br><br>
            
            <button class="btn">Save</button>
            <br><br>
            </form>
        </div>
    <div>
    <script src="script.js"></script>
</body>
</html>