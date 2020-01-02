<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'opium');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin5")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
$blog = $res['blog'];
$life = $res['life'];
$gad = $res['gad'];
$name = $res['name'];
$date = $res['date'];

$blog1 = $res['blog1'];
$blogquote = $res['blogquote'];
$blogquote1 = $res['blogquote1'];
$comment = $res['comment'];
$pre_post = $res['pre_post'];

$next_post = $res['next_post'];
$comm = $res['comm'];
$date_comm = $res['date_comm'];
$msg = $res['msg'];
$comm1 = $res['comm1'];

$date_comm1 = $res['date_comm1'];
$msg1 = $res['msg1'];
$comm2 = $res['comm2'];
$date_comm2 = $res['date_comm2'];
$msg2 = $res['msg2'];

$comm3 = $res['comm3'];
$date_comm3 = $res['date_comm3'];
$msg3 = $res['msg3'];
$comm4 = $res['comm4'];
$date_comm4 = $res['date_comm4'];

$msg4 = $res['msg4'];
$bloger = $res['bloger'];
$post = $res['post'];
$blog_post = $res['blog_post'];

}
}
else"0 result";

$conn1->close();

// $blog="Cartridge Is Better Than Ever <br /> A Discount Toner";
// $life="Lifestyle";
// $gad="Gadget";
// $name="Mark wiens";
// $date="12 Dec, 2017 11:21 am";
// $blog1="MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
//        						<p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.";

// $blogquote="MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.";   
// $blogquote1="MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
// 							<p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower";    
// $comment="Lily and 4 people like this";	
// $pre_post="Space The Final Frontier";	
// $next_post="Telescopes 101";	
// $comm="Emilly Blunt";	
// $date_comm="December 4, 2017 at 3:12 pm ";		
// $msg="Never say goodbye till the end comes!";							
// $comm1="Elsie Cunningham";
// $date_comm1="December 4, 2017 at 3:12 pm ";		
// $msg1="Never say goodbye till the end comes!";
// $comm2="Annie Stephens";
// $date_comm2="December 4, 2017 at 3:12 pm ";		
// $msg2="Never say goodbye till the end comes!";
// $comm3="Maria Luna";
// $date_comm3="December 4, 2017 at 3:12 pm ";		
// $msg3="Never say goodbye till the end comes!";
// $comm4="Ina Hayes";
// $date_comm4="December 4, 2017 at 3:12 pm ";		
// $msg4="Never say goodbye till the end comes!";
// $bloger="Charlie Barber";
// $post="Senior blog writer";
// $blog_post="Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.";

?>