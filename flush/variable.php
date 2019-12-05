<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `flush`.`index`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
//	echo"<tr><td>".
$title = $res['title'];
$des = $res['des'];
$button1 = $res['button1'];
$world = $res['world'];
$des1 = $res['des1'];
$button2 = $res['button2'];
$world1 = $res['world1'];
$des2 = $res['des2'];
$button3 = $res['button3'];
$world2 = $res['world2'];
$des3 = $res['des3'];
$button4 = $res['button4'];
$world3 = $res['world3'];
$des4 = $res['des4'];
$button5 = $res['button5'];
$service = $res['service'];
$des5 = $res['des5'];
$world4 = $res['world4'];
$des6 = $res['des6'];
$world5 = $res['world5'];
$des7 = $res['des7'];
$world6 = $res['world6'];
$des8 = $res['des8'];
$world7 = $res['world7'];
$des9 = $res['des9'];
$feedback = $res['feedback'];
$feeedback_des = $res['feeedback_des'];
$access = $res['access'];
$name = $res['name'];
$prof = $res['prof'];
$access1 = $res['access1'];
$name1 = $res['name1'];
$prof1 = $res['prof1'];
$access2 = $res['access2'];
$name2 = $res['name2'];
$prof2 = $res['prof2'];
$insta = $res['insta'];

}
}
else"0 result";

$link->close();

/*************index.php********************/
// $title="Nature </br>Photoshoot";
// $des="If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
// You may see some for as low as $.17 each.";
// $button1="Explore Gallery";
// $world="Spreading </br>Peace to world";
// $des1="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button2="Explore Gallery";
// $world1="Spreading </br>Peace to world";
// $des2="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button3="Explore Gallery";
// $world2="Spreading </br>Peace to world";
// $des3="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button4="Explore Gallery";
// $world3="Spreading </br>Peace to world";
// $des4="If you are looking at blank cassette on the web you may be very confused at the difference in price 
// you may see some.";
// $button5="Explore Gallery";
// //Services
// $service="Services Offered by Us";
// $des5="If you are looking at blank cassettes on the web, you may be very confused at the difference in price. 
// You may see some for as low as $.17 each.";
// $world4="Spreading </br>Peace to world";
// $des6="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world5="Spreading </br>Peace to world";
// $des7="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world6="Spreading </br>Peace to world";
// $des8="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// $world7="Spreading </br>Peace to world";
// $des9="If you are looking at blank cassettes on the web, you may be very confused at the difference.";
// //client feedback
// $feedback="Clients Feedback";
// $feedback_des="Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderitin.";
// $access="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name="Mark Alviro Wiens";
// $prof="CEO at Google";
// $access1="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name1="Mark Alviro Wiens";
// $prof1="CEO at Google";
// $access2="“Accessories Here you can find the best computer accessory for your laptop, monitor,printer, scanner, speaker, projector, hardware”";
// $name2="Mark Alviro Wiens";
// $prof2="CEO at Google";
// //instagram
// $insta="Follow us on instagram";



$social="Social Life";

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
$z="Home";
$aa="About Us";
$bb="We’ve made a life";
$cc="that will change you";
$dd="We are here to listen from you deliver exellence";
$ee="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et
dolore magna aliqua. Ut enim ad minim.";
$hh="Enjoy your social life together";
$ii="Politics";
$jj="Be a part of politics";
$kk="Food";
$ll="Let the food be finished";
$mm="Food,";
$nn="Technology,";
$oo="Politics,";
$pp="Lifestyle";
$qq="Mark wiens";
$rr="12 Dec, 2017";
$ss="1.2M Views";
$tt="06 Comments";
$uu="Astronomy Binoculars A Great Alternative";
$vv="MCSE boot camps have its supporters and its detractors.
Some people do not understand why you should have to spend money on boot 
camp when you can get the MCSE study materials yourself at a fraction.";
$xx="View More";
$yy="The Basics Of Buying A Telescope";
$zz="The Glossary Of Telescopes";
$a1="The Night Sky";
$a2="Telescopes 101";
$a3="01";
$a4="02";
$a4="03";
$a5="04";
$a6="05";
$a7="Charlie Barber";
$a8="Senior blog writer";
$a9="Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to 
spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.";
$a10="Popular Posts";
$b1="Space The Final Frontier";
$b2="02 Hours ago";
$b3="The Amazing Hubble";
$b4="Astronomy Or Astrology";
$b5="03 Hours ago";
$b6="Asteroids telescope";
$b7="01 Hours ago";
$b8="Post Catgories";
$b9="Technology";
$b10="37";
$c1="lifestyle";
$c2="24";
$c3="Fashion";
$c4="59";
$c5="Art";
$c6="29";
$c7="Food";
$c8="15";
$c9="Architecture";
$c10="09";
$d1="Adventure";
$d2="44";
$d3="Newsletter";
$d4=" Here, I focus on a range of items and features that we use in life without
giving them a second thought.";
$d5="Subcribe";
$d6="You can unsubscribe at any time";
$d7="Tag Clouds";
$d8="Elements";
$d9="Text Sample";
$d10="Every avid independent filmmaker has ";
$e1="Bold";
$e2="bout making that";
$e3="Italic";
$e4="nterest documentary, 
or short film to show off their creative prowess. Many have great ideas and want to “wow” the";
$e5="Superscript";
$e6=" scene, or video renters with their big project.  But once you have the";
$e7="Subscript";
$e8="“in the can” (no easy feat),
how do you move from a ";
$e9="Strike";
$e10="through of master DVDs with the";
$f1="“Underline”";
$f2="marked hand-written title 
inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and
 polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a
  reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option
   to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow
    for good DVD replication results: ";
$f3="Sample Buttons";
$f4="Default";
$f5="Primary";
$f6="Success";
$f7="Info";
$f8="Warning";
$f9="Danger";
$f10="Link";
$g1="Disable";
$g2="Project Details";
$g3="Projects";
$g4="Project Details";
$g5="Lavendar ambient colorlib";
$g6="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.";
$g7="Rating";
$g8="Client";
$g9="Website";
$g10="Completed";
$h1="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
consequat. Duis aute irure dolor in reprehenderit.";
$h2="Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error 
sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis 
et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
 odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
  est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
  incidunt ut labore et dolore magnam aliquam quaerat voluptatem.";
$h3="Follow us on instagram";
$h4="About Me";
$h5="Do you want to be even more successful? Learn to love learning and growth. The more effort you put
into improving your skills,"; 
$h6="Projects";  
$h7="Spreading ";
$h8="Peace to world";
$h9="If you are looking at blank cassette on the web you may be very confused at the difference 
in price you may see some.";
$h10="Explore Gallery";
$i1="Blog Details";   
$i2="Blog ";
$i3=" Boot camps have its supporters and its detractors. Some people do not understand why you should have
to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the 
camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who 
has the willpower to actually sit through a self-imposed";
$i4="   MCSE boot camps have its supporters and its detractors. Some people do not understand why you
should have to spend money on boot camp when you can get the MCSE study materials yourself at a
 fraction of the camp price. However, who has the willpower to actually sit through a self-imposed
  MCSE training.";
$i5= "MCSE boot camps have its supporters and its detractors. Some people do not understand 
why you should have to spend money on boot camp when you can get the MCSE study materials 
yourself at a fraction of the camp price. However, who has the willpower.";                       
$i6="Prev Post";
$i7="Space The Final Frontier";
$i8="Next Post";
$i9="Telescopes 101";
$i10="05 Comments";
$j1="Emilly Blunt";
$j2="December 4, 2017 at 3:12 pm ";
$j3="Never say goodbye till the end comes!";
$j4="reply";
$j5="Elsie Cunningham";
$j6="December 4, 2017 at 3:12 pm";
$j7="Never say goodbye till the end comes!";
$j8="Annie Stephens";
$j9="Maria Luna";
$j10="Ina Hayes";
$k1="Post Comment";
$k2="harlie Barber";
$k3="Senior blog writer";
$k4="Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to 
spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.";
$k5="popular Posts";
$k6="Extra Large";
$k7="Medium";
$k8="Small";
$k9="Left Aligned";
$k10="Recently, the US Federal government banned online casinos from operating in America by
making it illegal to transfer money to them through any US bank or payment system.
 As a result of this law, most of the popular online casino networks such as Party 
 Gaming and PlayTech left the United States. Overnight, online casino players found 
 themselves being chased by the Federal government. But, after a fortnight, the online 
 casino industry came up with a solution and new online casinos started taking root.
  These began to operate under a different business umbrella, and by doing that, 
  rendered the transfer of money to and from them legal. A major part of this was 
  enlisting electronic banking systems that would accept this new clarification and 
  start doing business with me. Listed in this article are the electronic banking s
  ystems that accept players from the United States that wish to play in online casinos.";
$l1="Right Aligned";
$l2="Over time, even the most sophisticated, memory packed computer can begin
to run slow if we don’t do something to prevent it. The reason why has less to do with how 
computers are made and how they age and more to do with the way we use them. You see, all
 of the daily tasks that we do on our PC from running programs to downloading and deleting
  software can make our computer sluggish. To keep this from happening, you need to understand 
  the reasons why your PC is getting slower and do something to keep your PC running at its best. 
  You can do this through regular maintenance and PC performance optimization programs";
$l3="Before we discuss all of the things that could be affecting your PC’s performance, 
let’s talk a little about what symptoms";
$l4="Definition";
$l5="Definition 01";
$l6="Recently, the US Federal government banned online casinos from operating in America by making it
illegal to transfer money to them through any US bank or payment system. As a result of this law,
 most of the popular online casino networks";
$l7="Definition 02";
$l8="Definition 03";
$l9="Block Quotes";
$l10="“Recently, the US Federal government banned online casinos from operating in America by making
it illegal to transfer money to them through any US bank or payment system. As a result of this law, 
most of the popular online casino networks such as Party Gaming and PlayTech left the United States.
 Overnight, online casino players found themselves being chased by the Federal government. But, after 
 a fortnight, the online casino industry came up with a solution and new online casinos started taking
  root. These began to operate under a different business umbrella, and by doing that, rendered the 
  transfer of money to and from them legal. A major part of this was enlisting electronic banking
  systems that would accept this new clarification and start doing business with me. Listed in this
   article are the electronic banking” ";
$m1="Table";
$m2="#";
$m3="Countries";
$m4="Visits";
$m5="Percentages";
$m6="01";
$m7="Canada";
$m8="645032";
$m9="02";
$m10="03";
$n1="04";
$n2="05";
$n3="06";
$n4="07";
$n5="08";
$n6="Image Gallery";
$n7="Typography";
$n8="This is header 01";
$n9="This is header 02";
$n10="This is header 03";
$o1="This is header 04";
$o2="Unordered List";
$o3="Fta Keys";
$o4="For Women Only Your Computer Usage";
$o5="Facts Why Inkjet Printing Is Very Appealing";
$o6="Addiction When Gambling Becomes";
$o7="Protective Preventative Maintenance";
$o8="Addiction When Gambling Becomes";
$o9="Dealing With Technical Support 10 Useful Tips";
$o10="Make Myspace Your Best Designed Space";
$p1="Cleaning And Organizing Your Computer";
$p2="Ordered List";
$p3="Form Element";
$p4="City";
$p5="Dhaka";
$p6="Dilli";
$p7="Newyork";
$p8="Islamabad";
$p9="Country";
$p10="Bangladesh";
$q1="India";
$q2="England";
$q3="Srilanka";
$q4="Switches";
$q5="01. Sample Switch";
$q6="02. Primary Color Switch";
$q7="03. Confirm Color Switch";
$q8="Selectboxes";
$q9="English";
$q10="Spanish";
$r1="Arabic";
$r2="Portuguise";
$r3="Bengali";
$r4="Checkboxes";
$r5="01. Sample Checkbox";
$r6="02. Primary Color Checkbox";
$r7="03. Confirm Color Checkbox";
$r8="04. Disabled Checkbox";
$r9="05. Disabled Checkbox active";
$r10="Radios";
$s1="01. Sample radio";
$s2="02. Primary Color radio";
$s3="03. Confirm Color radio";
$s4="04. Disabled radio";
$s5="05. Disabled radio active";
?>
