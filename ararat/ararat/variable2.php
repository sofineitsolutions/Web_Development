<?php


    include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user2`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title1=$fetch['db_title1'];
                        $subtitle1=$fetch['db_subtitle1'];
                        $dec1=$fetch['db_dec1'];
                        $con1=$fetch['db_con1'];
                        $con2=$fetch['db_con2'];
                        $subtitle2=$fetch['db_subtitle2'];
                        $dec2=$fetch['db_dec2'];
                        $subtitle3=$fetch['db_subtitle3'];
                        $name1=$fetch['db_name1'];
                        $post1=$fetch['db_post1'];
                        $name2=$fetch['db_name2'];
                        $post2=$fetch['db_post2'];
                        $name3=$fetch['db_name3'];
                        $post3=$fetch['db_post3'];
                        $dec3=$fetch['db_dec3'];
                        $dec4=$fetch['db_dec4'];
                        $dec5=$fetch['db_dec5'];
                        $name4=$fetch['db_name4'];
                        $name5=$fetch['db_name5'];
                        $name6=$fetch['db_name6'];
                        $post4=$fetch['db_post4'];
                        $post5=$fetch['db_post5'];
                        $post6=$fetch['db_post6'];



                        


                        }

	// $title1="About Us";
	// $subtitle1="Architechtural plan <br>
 //                                design and build";
 //    $dec1="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
 //                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
 //                            viverra maecenas accumsan lacus vel facilisis.";
    // $con1="Consectetur adipiscing sed do eiusmod.";
    // $con2="Eiusmod tempor incididunt labore.";
    // $subtitle2="Our Mission";
    // $dec2="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
    //                         labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
    //                         viverra maecenas accumsan lacus vel facilisis.";
    // $subtitle3="Meet Our Experts";
    // $name1="Lallu Mia";
    // $post1="Design Expert";
    // $name2="Kobra King";
    // $post2="Builder Expert";
    // $name3="Zamboo Ali";
    // $post3="3d Archtect";
    // $dec3="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
 //    $dec4="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
 //                                    tempor
 //                                    incididunt ut
 //                                    <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
 //                                    Risus
 //                                    commodo
 //                                    viverra <br> maecenas accumsan lacus vel facilisis.";
	// $dec5="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
 //                                    tempor
 //                                    incididunt ut
 //                                    <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
 //                                    Risus
 //                                    commodo
 //                                    viverra <br> maecenas accumsan lacus vel facilisis.";
 //    $name4="-MITHILA";
    // $name5="-MITHILA";
    // $name6="-MITHILA";
    // $post4=" Designer at Colorlib";
    // $post5=" Designer at Colorlib";
    // $post6=" Designer at Colorlib";
?>