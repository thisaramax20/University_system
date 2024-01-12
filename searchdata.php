<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="search.css">
        <title>Search</title>
    </head>
    <body>
        <h2>Search details</h2>
        <div class="container">
            <form action="" method="post">
                <input type="text" name="search" id="search">
                <input type="submit">
            </form>
            <div style="overflow-x: auto;">
            <table class="table">
                <thead>
                <tr>
                    <th>NIC</th>
                    <th>Name of the student</th>
                    <th>Address</th>
                    <th>Telephone number</th>
                    <th>Course name</th>
                </tr> </thead> <br>
                <?php
                
                $connection=mysqli_connect("localhost","root","","student");
                if(isset($_POST['search']))
                {
                    $search = $_POST['search'];
                    $query="SELECT * FROM details where nic='$search'";
                    $query_run=mysqli_query($connection,$query) or die(mysqli_error($connection));
                    if(mysqli_num_rows($query_run)){
                    while($row=mysqli_fetch_array($query_run))
                    {
                        ?>
                        <tbody><tr>
                            <td> <?php echo $row['nic']; ?> </td>
                            <td> <?php echo $row['name']; ?> </td>
                            <td> <?php echo $row['address']; ?> </td>
                            <td> <?php echo $row['telephone']; ?> </td>
                            <td> <?php echo $row['course']; ?> </td> 
                        </tr></tbody>

                        <?php
                    } 
                }else {echo "<p> No information found that matches your criteria</p>";}}
                        ?>
            </table></div>
        </div>
    </body>
</html>