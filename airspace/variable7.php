<?php 
/*------------tyography.php-----------------*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin7")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
  $title = $res['title'];
$dir = $res['dir'];
$dir1 = $res['dir1'];
$heading = $res['heading'];
$tag1 = $res['tag1'];
$tag2 = $res['tag2'];
$tag3 = $res['tag3'];
$tag4 = $res['tag4'];
$tag5 = $res['tag5'];

$tag6 = $res['tag6'];
$heading1 = $res['heading1'];
$blog = $res['blog'];
$heading2 = $res['heading2'];
$para = $res['para'];


}
}
else"0 result";

$conn1->close();


// $title="Typography";
// $dir="Home";
// $dir1="typography";


// $heading="Typography (Heading)";
// $tag1="H1 Heading";
// $tag2="H2 Heading";
// $tag3="H3 Heading";
// $tag4="H4 Heading";
// $tag5="H5 Heading";
// $tag6="H6 Heading";

// $heading1="Paragraph";
// $blog="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae rem ut veritatis quisquam doloribus nam excepturi, deserunt odit, aut. Possimus blanditiis culpa natus eius non molestias nihil praesentium, vel ullam dolorum qui, quibusdam minima placeat officiis quod dolorem perferendis dicta harum ab obcaecati nemo! Quisquam, porro qui tempora, ducimus aspernatur vitae odit aliquid soluta eius tenetur, atque minima error est officiis itaque nobis voluptate? Modi aliquid reiciendis perspiciatis totam asperiores consequuntur sint molestias. Error quas quod voluptatem eligendi modi asperiores ipsam nemo, obcaecati provident omnis nisi dolorem aliquam sapiente, quidem, porro quo id fuga! Recusandae blanditiis aliquid repudiandae animi officia.";
// $heading2="Blockquote";
// $para="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore fugiat voluptas accusamus! Perspiciatis quam quisquam iste id officiis quia commodi quibusdam sapiente molestiae! Aliquam tempore ad quis, culpa sit ullam quam inventore voluptatum necessitatibus numquam! Tempora nobis iure cupiditate excepturi aliquid earum ratione dignissimos, a consequatur odio quo aut rem voluptatem quam repellat sint, eligendi facilis maiores unde, soluta quos, veritatis sit. Dolore deleniti dolorum repellendus dolorem cum, unde architecto consectetur odit rem eveniet, accusantium omnis suscipit totam quibusdam officiis blanditiis molestiae! Totam ipsam temporibus aspernatur praesentium quam, laboriosam ipsa rem. Maxime repudiandae molestias in consequuntur sint, dicta? Temporibus, fugiat!";
?>