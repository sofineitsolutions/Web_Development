<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin10")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
$tit1 = $res['tit1'];
$port = $res['port'];

$port1 = $res['port1'];
$port2 = $res['port2'];
$port3 = $res['port3'];
$port4 = $res['port4'];
$port5 = $res['port5'];
$port6 = $res['port6'];
$port7 = $res['port7'];

}
}
else"0 result";

$conn1->close();



/*-----------------portfolio-single.php------------*/
// $tit1="Project Details";
// $port="Behance Website Redesign";
// $port1="<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas officiis cumque, harum dicta necessitatibus reprehenderit, delectus molestiae, impedit alias adipisci distinctio voluptas. Tempora modi amet voluptate at provident soluta consequatur.</p>
//           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quibusdam sed, neque recusandae, est odit. A facere tempore soluta laborum.</p>
//           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, rem eaque facilis. Sit, voluptas? Error soluta odio, harum tenetur, alias in iure ipsam blanditiis illo, ratione, magnam a minima incidunt! Suscipit facilis, ut maxime libero necessitatibus, rerum aut voluptates aliquam maiores iusto qui temporibus nesciunt, incidunt in quasi. Veniam aliquid ea aperiam, obcaecati voluptate ab, temporibus fugiat at, inventore molestiae quibusdam, modi numquam debitis libero aut eum. Architecto sit quia quidem odit, quasi eveniet reprehenderit rerum dolorem voluptate sed aspernatur numquam enim, adipisci iste optio ea libero laboriosam praesentium aperiam nobis vero tempore consequuntur sapiente eos at. Suscipit quis voluptatibus temporibus dolore consectetur ex excepturi adipisci sunt. Maxime aperiam eos illum minima aliquid voluptate autem qui at impedit recusandae earum possimus, alias, maiores sint, sed quia quis aut cupiditate voluptatem reiciendis. Facilis nobis assumenda totam officiis dicta autem dolorem quidem similique, delectus rerum laborum veritatis, cum magnam dignissimos necessitatibus possimus error, eius omnis veniam culpa, porro officia adipisci exercitationem minus hic. Ipsum veritatis repudiandae nulla quo dicta voluptates tenetur mollitia perferendis sequi, magnam doloremque odit similique, sit, voluptas unde iste molestias. Accusantium, corporis quibusdam quod in animi earum alias autem ipsum. Eaque rem numquam delectus veniam commodi doloribus consequatur deleniti?</p>";
// $port2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores neque vero quasi quisquam atque in, libero ab sunt eius! Nesciunt laboriosam alias corporis sit accusantium voluptate sapiente debitis quos mollitia saepe maxime ipsum facilis dolore voluptas inventore veniam deleniti, eligendi harum aperiam iusto culpa? Delectus dolorum facere quasi iure explicabo?";
// $port3="Related Other Projects";
// $port4="Dribbble Redesign";
// $port5="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas recusandae, dignissimos culpa quam debitis quibusdam magni rem quis, cum nesciunt?";
// $port6="Dribbble Redesign";
// $port7="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas recusandae, dignissimos culpa quam debitis quibusdam magni rem quis, cum nesciunt?";

?>