<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'air');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query_user = mysqli_query($conn,"SELECT * FROM home")or die(mysqli_error($conn));
if(mysqli_num_rows($query_user) > 0){

	

while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
	$title = $res['title'];
	$des = $res['des'];
	$tit = $res['about'];
	$about_us = $res['des1'];
    $about_us1 = $res['des2'];
    $section = $res['idea'];
    $para = $res['idea1'];
    $para1 = $res['idea2'];
    $para2 = $res['idea3'];
    $d1 = $res['service1'];
    $d2 = $res['service2'];
    $d2 = $res['service3'];
    $d2 = $res['service4'];
    $d2 = $res['service5'];
    $d2 = $res['service6'];
    $d2 = $res['service7'];
    $d2 = $res['service8'];
    $d2 = $res['service9'];
    $action= $res['exp1'];
    $describe = $res['exp2'];
    $con = $res['fun'];
    $des22 = $res['fun1'];
    $con1 = $res['view1'];
    $con1 = $res['view2'];

}
}
else"0 result";

$conn->close();

/*<!-- Slider Start -->*/
//$title="A Digital Marketing <br>  &#38; Design Agency";
//$des="We love the Web and the work we do.We work closely with our clients to deliver </br>  the best possible solutions for their needs";
$button="Free Bootstrap Templates";

?>
<?php
// /*<!-- Wrapper Start -->*/
// $tit="About Us";
// $about_us="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics";
// $about_us1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id";
// $section="WE BELIEVE IN GREAT IDEAS";
// $para="<p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>";
// $para1="<p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>";
// $para2= "<p>Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>";
$button1="View Works";

/*<!-- Service Start -->*/
$s1="Our Services";
// $d1="<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>";
$s2="Branding";
// $d2="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut ";

$s3="Web Design";
$s4="App Design";
$s5="Start Up";
$s6="Logo Design";
$s7="Development";
$s8="Brand Identity";
$s9="Brand Identity";

/*<!-- Call to action Start -->*/
//$action="We design delightful digital experiences.";
//$describe="<p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>";

$button2="Tell Us Your Story";

/*<!-- Content Start -->*/

//$con="Fun Facts About Us";
//$des22="<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,  <br> there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>";

//$con1="This Company created an e-commerce site with the tools to make our business a success, with innovative ideas we feel that our site has unique elements that make us stand out from the crowd.";

?>