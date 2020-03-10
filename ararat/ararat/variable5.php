<?php

        include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user5`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title1=$fetch['db_title1'];
                        $subtitle1=$fetch['db_subtitle1'];
                        // $subtitle1=$fetch['db_dec1'];
                        $subtitle2=$fetch['db_subtitle2'];
                        $subtitle3=$fetch['db_subtitle3'];
                        $subtitle4=$fetch['db_subtitle4'];
                        $subtitle5=$fetch['db_subtitle5'];
                        // $dec3=$fetch['db_dec3'];
                        // $subtitle4=$fetch['db_subtitle4'];
                        // $dec4=$fetch['db_dec4'];
                        // $con1=$fetch['db_con1'];
                        $title2=$fetch['db_title2'];
                        $con1=$fetch['db_con1'];
                        $con2=$fetch['db_con2'];
                        $con3=$fetch['db_con3'];
                        $con4=$fetch['db_con4'];
                        $con5=$fetch['db_con5'];
                        $con6=$fetch['db_con6'];
                        $title3=$fetch['db_title3'];
                        $con7=$fetch['db_con7'];
                        $con8=$fetch['db_con8'];
                        $con9=$fetch['db_con9'];
                        $con10=$fetch['db_con10'];



                        


                        }

	// $title1="Blog";
	// $subtitle1="Google inks pact for new 35-storey office";
	$dec1="That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.";
    // $subtitle2="Google inks pact for new 35-storey office";
    //  $subtitle3="Google inks pact for new 35-storey office";
    //   $subtitle4="Google inks pact for new 35-storey office";
    //    $subtitle5="Google inks pact for new 35-storey office";
    $dec2="That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.";
    $dec3="That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.";
     $dec4="That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.";
    $dec5="That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.";
    // $title2="Category";
    // $con1="Resaurant food";
    // $con2="Travel news";
    // $con3="Modern technology";
    // $con4="Product";
    // $con5="Inspiration";
    // $con6="Health Care (21)";
    // $title3="Recent Post";
    // $con7="From life was you fish...";
    // $con8="The Amazing Hubble";
    // $con9="Astronomy Or Astrology";
    // $con10="Asteroids telescope";                                
?>