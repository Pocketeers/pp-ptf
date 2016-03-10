<?php
    include 'dbcon.php';
    $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

    $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' OR employer LIKE '%".$_POST['search']."%'";

    $results= mysqli_query($conn, $sql);
?>
<html>
    <head>
    	<Title>PTF</Title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <div class="tophead">
            <header>
                <div>
                    <h1>PART TIME FINDER</h1>
                </div>
            </header>

            <nav>
                <a class="mainlink" href="index.php"> UTAMA </a>|
                <a class="mainlink" href="#"> MENGENAI </a>
               <div class="userlink"><a class="mainlink" href="login.php"> LOG MASUK </a></div>
            </nav>
        </div>

        <div class="middlebody">

            <p>
                <div class="searchalign">
                    <form action="index.php" method="post">
                        <input type="text" name="search" size="30" placeholder="search any available jobs...">
                        <input type="submit" name="submit" value="SEARCH">
                    </form>
                </div>
            </p>

            <p>
                <table class="maintable" border="0" width="100%">
                    <thead>
                        <tr>
                            <th class="hiddenmainth">Pengguna</th>
                            <th class="mainth">ID Pengguna</th>
                            <th class="mainth">Jawatan Kosong</th>
                            <th class="mainth">Tarikh Pos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
    		                    while($postinfo=mysqli_fetch_assoc($results)){
    		                        echo "<tr>";
    		                        echo "<td class='hiddenmaintd'>".$postinfo['post_id']."</td>";
    		                        echo "<td class='maintd'>".$postinfo['user_id']."</td>";
    		                        echo "<td class='maintd'>"."<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">"."<b>Job Title: </b>".$postinfo['work']."<br>"."<b>Employer: </b>".$postinfo['employer']."<br>"."<b>Salary: </b>"."RM".$postinfo['salary']."</a>"."</td>";
    		                        echo "<td class='maintd'>".$postinfo['date_posted']."</td>";
    		                        echo "</tr>";
    		                    }
    	                }else{
    	                    echo "<tr>";
	                        echo "<td class='maintd'>"."0 results"."</td>";
	                        echo "<td class='maintd'>"."0 results"."</td>";
	                        echo "<td class='maintd'>"."0 results"."</td>";
	                        echo "</tr>";
    	                }
                        ?>
                    </tbody>
                </table>
            </p>
        </div>
    </body>
</html>