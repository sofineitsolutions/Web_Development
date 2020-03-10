<?php








    include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user4`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title1=$fetch['db_title1'];
                        $title2=$fetch['db_title2'];
                        $con1=$fetch['db_con1'];
                         $dec1=$fetch['db_dec1'];
                         $con2=$fetch['db_con2'];
                         $dec2=$fetch['db_dec2'];
                         $dec3=$fetch['db_dec3'];
                         $con3=$fetch['db_con3'];
                         $title3=$fetch['db_title3'];
                        $dec4=$fetch['db_dec4'];
                         $con4=$fetch['db_con4'];
                         $con5=$fetch['db_con5'];
                         $dec5=$fetch['db_dec5'];
                         $dec6=$fetch['db_dec6'];
                         $dec7=$fetch['db_dec7'];
                         $name1=$fetch['db_name1'];
                         $name2=$fetch['db_name2'];
                         $name3=$fetch['db_name3'];
                         $post1=$fetch['db_post1'];
                         $post2=$fetch['db_post2'];
                         $post3=$fetch['db_post3'];



                        


                        }
	// $title1="Services";
	// $title2="Make your Dream with US";
	// $con1="Interior";
	// $dec1="Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
 //                            aliqua quis ipsum suspendisse.";
 //    $con2="Exterior";
 //    $dec2="Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
 //                            aliqua quis ipsum suspendisse.";
    // $dec3="Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    //                         aliqua quis ipsum suspendisse.";
    // $con3="Bridge";
    // $title3="Architechtural plan <br>
    //                             design and build";
    // $dec4="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    //                         labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
    //                         viverra maecenas accumsan lacus vel facilisis.";
    // $con4="Consectetur adipiscing sed do eiusmod.";
    // $con5="Eiusmod tempor incididunt labore.";
    // $dec5="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $dec6="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $dec7="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $name1="-MITHILA";
    // $name2="-MITHILA";
    // $name3="-MITHILA";
    // $post1="Designer at Colorlib";
    // $post2="Designer at Colorlib";
    // $post3="Designer at Colorlib";
?>