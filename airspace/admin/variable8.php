<?php 

/*----------------------------blog-single.php------------------------*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin8")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
$title = $res['title'];
$des1 = $res['des1'];
$blog1 = $res['blog1'];
$ddate = $res['ddate'];
$dadmin = $res['dadmin'];
$dlife = $res['dlife'];
$dtravel = $res['dtravel'];
$dfashion = $res['dfashion'];
$ddes1 = $res['ddes1'];

$ddes2 = $res['ddes2'];
$ddes3 = $res['ddes3'];
$ddes4 = $res['ddes4'];
$comment1 = $res['comment1'];
$name = $res['name'];

$date = $res['date'];
$rep = $res['rep'];
$ans = $res['ans'];
$name1 = $res['name1'];
$date1 = $res['date1'];
$ans1 = $res['ans1'];
$name2 = $res['name2'];
$date2 = $res['date2'];
$ans2 = $res['ans2'];

$name3 = $res['name3'];
$date3 = $res['date3'];
$ans3 = $res['ans3'];
$name4 = $res['name4'];
$date4 = $res['date4'];

$ans4 = $res['ans4'];
$post1 = $res['post1'];
$button = $res['button'];


}
}
else"0 result";

$conn1->close();

// $title4="Blog";
// $describe1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, quibusdam.";
// $blog1="How To Wear Bright Shoes";
// $ddate="20, MAR 2017";
// $dadmin=" POSTED BY ADMIN";
// $dlife=" LIFESTYLE";
// $dtravel=" TRAVEL";
// $dfashion="FASHION";
// $ddes1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere. ";
// $ddes2="Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error";
// $ddes3="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum illo deserunt necessitatibus quibusdam sint, eos explicabo tenetur molestiae vero facere, aspernatur sit mollitia perferendis reiciendis. Deleniti magni explicabo sed alias fugit amet animi molestias ipsum maiores. Praesentium sint, id laborum quos. Tempora inventore est, dolor corporis quis doloremque nostrum, eos velit culpa quasi labore. Provident laborum porro nihil iste, magnam officia nemo praesentium autem, libero vel officiis. Omnis pariatur nam voluptatem voluptate at officia repellat ea beatae eligendi? Mollitia error saepe, aperiam facere. Optio maiores deleniti veritatis eaque commodi atque aperiam, debitis iste alias eligendi ut facilis earum! Impedit, tempore.";
// $ddes4="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex error esse a dolore, architecto sapiente, aliquid commodi, laudantium eius nemo enim. Enim, fugit voluptatem rem molestiae. Sed totam quis accusantium iste nesciunt id exercitationem cumque repudiandae voluptas perspiciatis, consequatur quasi, molestias, culpa odio adipisci. Nesciunt optio fugiat iste quam modi, ex vitae odio pariatur! Corrupti explicabo at harum qui doloribus, sit dicta nemo, dolor, enim eum molestias fugiat obcaecati autem eligendi? Nisi delectus eaque architecto voluptatibus, unde sit minus quae quod eligendi soluta recusandae doloribus, officia, veritatis voluptatum eius aliquam quos. Consectetur, nisi? Veritatis totam, unde nostrum exercitationem tempora suscipit, molestias, deserunt ipsum laborum aut iste eaque? Vitae delectus dicta maxime non mollitia? Sapiente eos a quia eligendi deserunt repudiandae modi molestias tenetur autem pariatur ullam itaque, quas eveniet, illo quam rerum ex obcaecati voluptatum nesciunt incidunt culpa provident illum soluta. Voluptas possimus nesciunt inventore perspiciatis neque fugiat, magnam natus repellendus praesentium eum voluptatum, alias incidunt, tempora reprehenderit recusandae et numquam itaque ratione dolor voluptatibus in commodi ut! Neque deserunt nostrum commodi dolor natus quo, non vitae deleniti, vero voluptatem error aspernatur veniam expedita numquam amet quia in dolores velit esse molestiae! Iusto architecto accusantium quisquam recusandae quod vero quia.";
// $comment1="10 Comments";
// $name="Jonathon Andrew";
// $date="July 02, 2015, at 11:34";
// $rep="Reply";
// $ans="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.";
// $name1="Senorita";
// $date1="July 02, 2015, at 11:34";
// $ans1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.";
// $name2="Senorita";
// $date2="July 02, 2015, at 11:34";
// $ans2="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.";
// $name3="Senorita";
// $date3="July 02, 2015, at 11:34";
// $ans3="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.";
// $name4="Senorita";
// $date4="July 02, 2015, at 11:34";
// $ans4="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.";
// $post="Leave You Comments";
// $button="Send comment";
?>