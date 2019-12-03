<?php
//<!------------------------------------------------- about.php -->
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn1 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query_user1 = mysqli_query($conn1,"SELECT * FROM admin5")or die(mysqli_error($conn1));
if(mysqli_num_rows($query_user1) > 0){

  

while($res = mysqli_fetch_array($query_user1) ){
//  echo"<tr><td>".
  $tit1 = $res['title'];
  $des1 = $res['des'];
  $head4 = $res['head1'];
  $head5 = $res['des1'];
    $head6 = $res['head2'];
    $head7 = $res['des2'];
    $head8 = $res['head3'];
    $head9 = $res['des3'];
    $head10 = $res['head4'];
    $head11 = $res['des4'];
    $head12 = $res['head5'];
    $head13 = $res['des5'];
    $head14 = $res['head6'];
    $head15 = $res['des6'];
    $head16 = $res['head7'];
    $head17 = $res['des7'];
    $head1 = $res['head8'];
    $head2 = $res['head9'];
    $head3 = $res['head10'];
    $email = $res['email'];
    $addr = $res['addr'];
    

}
}
else"0 result";

$conn1->close();



/*------------------faq.php----------------*/
// $tit1="FAQ";
// $des1="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, totam.";
// $head1="Frequently Asked Questions";
// $head2="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, repudiandae.";
// $head3="Last updated: April 24, 2017";
// $email="legal@mail.com";
// $add="Airspace, Inc. <br>
// San Francisco, CA 94107 <br>
// USA";
// $head4="Welcome to Airspace!";
// $head5="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ullam sint quas pariatur ipsam nemo repellendus suscipit quod accusantium numquam tempora assumenda sequi, velit voluptatem soluta voluptatibus nesciunt ducimus iure. Excepturi voluptatum ullam tenetur perspiciatis alias delectus beatae voluptatibus magni facere aspernatur, qui, quas nesciunt blanditiis assumenda a expedita accusantium quos consectetur neque nemo. Necessitatibus est quod quo deserunt, dicta aut voluptatem blanditiis, alias quos sed vel unde enim dolore aliquam quis reiciendis qui vitae reprehenderit. Similique nemo accusamus, vel possimus error cumque quas, tempora repellendus velit, unde cupiditate impedit deserunt fugit labore et nostrum sapiente est obcaecati maiores voluptates.";
// $head6="1.Overview";
// $head7="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas iusto, alias, tempora fuga quam eveniet neque excepturi aliquid. Eligendi, mollitia.";
// $head8="2. Data We Collect";
// $head9="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, earum, quibusdam? Accusantium, eaque at quasi dicta quis consectetur. Temporibus, natus illo quasi, magni neque fugiat ducimus omnis, ab ullam reprehenderit obcaecati. Inventore ut nisi repellendus dolores odit. Ea molestias perspiciatis enim, tenetur impedit suscipit quidem optio asperiores quibusdam. Minus, vel.";
// $head10="3. How We Use Data";
// $head11="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus repellat id, laboriosam ipsa repudiandae quisquam, suscipit officiis, praesentium itaque facilis distinctio dolorum. Velit reiciendis libero laudantium corporis, delectus impedit sunt.";
// $head12="4. How We Disclose Data.";
// $head13="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur itaque ut culpa totam ratione! Iste possimus beatae consequuntur, fugit iusto fugiat id, dignissimos culpa obcaecati voluptatum omnis est quibusdam quos, et illo rerum quae dolorem error quis suscipit asperiores facilis? Ratione, facere architecto modi incidunt voluptatibus iusto maiores, at libero accusamus aliquam dolor minus autem possimus illum maxime, fugit fuga! A libero adipisci molestias praesentium distinctio odio, alias accusantium, dolorum itaque, necessitatibus labore! Facilis explicabo pariatur laudantium quibusdam consequatur ex odio labore sequi animi. Voluptatem impedit, maiores, cupiditate, iure possimus neque quaerat natus aut minima quibusdam tempora magnam, vero itaque!";
// $head14="5. Security";
// $head15="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis quod saepe, inventore ipsum sint cum iste quae ratione nobis laborum minima autem totam similique, quia neque deleniti! Provident, suscipit.";
// $head16="6. Advertising.";
// $head17="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eaque repellendus placeat aperiam fugit. Quod inventore quis quos, molestias nostrum tempora quae adipisci dolorem ipsam repellendus officia, voluptatem assumenda porro possimus, eius eum enim qui natus! Quas numquam voluptas reiciendis eveniet ab at provident omnis mollitia ipsa. Asperiores vero rem cum minima voluptas, vitae magni accusantium quae. Sed, expedita, ad.";

?>