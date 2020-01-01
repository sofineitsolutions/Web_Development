<?php
include("config.php");
/* Attempt to connect to MySQL database */
$query_user = mysqli_query($link,"SELECT * FROM `foody`.`news`")or die(mysqli_error($link));
if(mysqli_num_rows($query_user) > 0){
while($res = mysqli_fetch_array($query_user) ){
    $news1 = $res['news1'];
    $date1 = $res['date1'];
    $des1 = $res['des1'];
    $news2 = $res['news2'];
    $date2 = $res['date2'];
    $des2 = $res['des2'];
    $news3 = $res['news3'];
    $date3 = $res['date3'];
    $des3 = $res['des3'];
    $news4 = $res['news4'];
    $date4 = $res['date4'];
    $des4 = $res['des4'];
    $news5 = $res['news5'];
    $date5 = $res['date5'];
    $des5 = $res['des5'];
    $news6 = $res['news6'];
    $date6 = $res['date6'];
    $des6 = $res['des6'];
}
}
else"0 result";
$link->close();

// $news1="How To Cook Pasta?";
// $date1="April 22, 2018";
// $des1="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
// $news2="How To Cook Pasta?";
// $date2="April 22, 2018";
// $des2="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
// $news3="How To Cook Pasta?";
// $date3="April 22, 2018";
// $des3="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
// $news4="How To Cook Pasta?";
// $date4="April 22, 2018";
// $des4="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
// $news5="How To Cook Pasta?";
// $date5="April 22, 2018";
// $des5="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
// $news6="How To Cook Pasta?";
// $date6="April 22, 2018";
// $des6="Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.";
?>