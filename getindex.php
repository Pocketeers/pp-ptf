<?php
//include external php file
include 'dbcon.php';

	//check connection
    if($conn){


            //Pagination code 
            //Documentation link below
            //https://www.developphp.com/video/PHP/Pagination-MySQLi-Google-Style-Paged-Results-Tutorial
            $sql4 = "SELECT COUNT(*) FROM posts WHERE post_status = 'published'";
            $query = mysqli_query($conn, $sql4);
            $row = mysqli_fetch_row($query);

            $rows = $row[0];

            //number of results per page
            $page_rows = 50;

            //page number of last page
            $last = ceil($rows/$page_rows);
            //$last shouldn't be less than 1
            if($last < 1)
            {
                $last = 1;
            }


            $pagenum = 1;

            //get pagenum from URL if any
            if(isset($_GET['pn'])){
                $pagenum = preg_replace('#[^0-9]#','', $_GET['pn']);
            }

            //page num is greater than 1 and smaller than last page num
            if($pagenum < 1) 
                { $pagenum = 1;}
            else if($pagenum > $last)
                { $pagenum = $last;}

            $limit = 'LIMIT ' .($pagenum - 1) * $page_rows.',' .$page_rows;


        
        //escape user string input
       
            

            //Based on search
        if(isset($_POST['submit']))
        {

             $_POST['search']=mysqli_real_escape_string($conn, $_POST['search']);

            //set sql statement to select all record from "posts" table that matches the input
            $sql = "SELECT * FROM posts WHERE work LIKE '%".$_POST['search']."%' AND post_status = 'published' ORDER BY date_posted DESC $limit";

            //run sql statement with query
            $query= mysqli_query($conn, $sql);

        }
        else
        {    
            //query for grabbing just one page worth of rows by applying limit
            $sql4 = "SELECT * FROM posts WHERE post_status = 'published' ORDER BY date_posted DESC $limit";
            $query = mysqli_query($conn, $sql4);
        }
            //shows user what page they are on & total number of pages
         //   $textline1 = "Testimonials (<b>$rows</b>)";
            $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
            
            $paginationCtrls = '';

            //if there is more than 1 page worth of results
            if($last != 1)
            {
                if($pagenum > 1)
                {
                  $previous = $pagenum - 1;
                    $paginationCtrls .= '<a href="'.'?pn='.$previous.'">Previous</a> &nbsp; &nbsp;'; 

                    //for clickable number links, on left side
                    for($i = $pagenum-4; $i < $pagenum; $i++)
                    {
                        if($i > 0) 
                        {
                            $paginationCtrls .= '<a href="'. '?pn='.$i.'">'.$i.'</a> &nbsp;';
                        }
                    }  
                }

            //Render target page number, but without it being link(page user is in)
                $paginationCtrls .= ''.$pagenum. '&nbsp; ';

                //Render clickable number links that should appear on the right of the target page number
                for($i = $pagenum+1; $i <= $last; $i++)
                {
                    $paginationCtrls .= '<a href="'.'?pn='.$i.'">'.$i.'</a> &nbsp; ';
                    if($i >= $pagenum+4)
                    {
                        break;
                    }
                }

                //This does the same as above, only checks if we are on the last page and then generates "Next"
                if ($pagenum != $last)
                {
                    $next = $pagenum + 1;
                    $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.'?pn='.$next.'">Next</a> ';
                }

            }


    }else
    {

        echo "The database cannot be connected right now. Please try again later";

    }


     // $list = '';
    //check if table record exist
       if(mysqli_num_rows($query) > 0){

       // echo $textline2;

          //loop to fetch all records
          echo "<ul class='jobs list-inline'>";
          while($postinfo=mysqli_fetch_array($query)){

            //display the records
            //
            //if($highlight==true){$text="<li class='highlight'>"}
            //else $text = "<li>";
            //replace "<li>" with $text.

            $fromMYSQL = $postinfo['date_posted'];

            //display the records
            echo "<li>".
            "<a class=\"postlink\" href=\"viewpost.php?post_id=".$postinfo['post_id']."\">".
            "<span class='job-employer'>".$postinfo['employer']."</span>".
            "<span class ='job-title'>".$postinfo['work']."</span>".
            //"<span class = 'job-category label label-default'>".$postinfo['jobcat']."</span>".
            "<span class = 'job-salary'>RM" .$postinfo['salary']." (Per ".$postinfo['salary_rate'].") </span>" .
            "<span style='display:none;' class = 'job-publish-date'>". date("d M", strtotime($fromMYSQL))."</span>".
            "</a>
            </li>";

          }
          echo "</ul>";

        }else{

          //display message if no record were found
         echo "0 Results";

       }    

?>
