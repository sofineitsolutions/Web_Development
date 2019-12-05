<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`project_details`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$project_details = $res['project_details'];
$home = $res['home'];
$projects = $res['projects'];
$project_details1 = $res['project_details1'];
$colorlib_name = $res['colorlib_name'];
$des1 = $res['des1'];
$rating = $res['rating'];
$client = $res['client'];
$website = $res['website'];
$completed = $res['completed'];
$des2 = $res['des2'];
$des3 = $res['des3'];
$insta = $res['insta'];
}
}
else"0 result";
/*********************Project_details.php *******************/
// $link->close();
// $project_details="Project Details";
// $home="Home";
// $projects="Projects";
// $project_details1="Project Details";
// $colorlib_name="Lavendar ambient colorlib";
// $des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
// magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.";
// $rating="Rating";
// $client="Client";
// $website="Website";
// $completed="Completed";
// $des2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
// dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
// consequat. Duis aute irure dolor in reprehenderit.";
// $des3="Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
// sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error 
// sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis 
// et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
//  odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
//   est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
//   incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";
// $insta="Follow us on instagram";


$q="About Me";
$r="Do you want to be even more successful? Learn to love learning and growth.
The more effort you put into improving your skills,";
$s="Copyright &copy;";
$t="All rights reserved | This template is made with ";
$u="Colorlib";
$v="Newsletter";
$x="Stay updated with our latest trends";
$w="follow Me";
$y="Let us be social";
?>
