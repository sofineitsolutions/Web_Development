<?php
    include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user1`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title=$fetch['db_title'];
                        $subtitle=$fetch['db_subtitle'];
                        $title1=$fetch['db_title1'];
                        $subtitle1=$fetch['db_subtitle1'];
                        $con1=$fetch['db_con1'];
                        $con2=$fetch['db_con2'];
                        $title2=$fetch['db_title2'];
                        $con3=$fetch['db_con3'];
                        $dec1=$fetch['db_dec1'];
                        $con4=$fetch['db_con4'];
                        $con5=$fetch['db_con5'];
                        $title3=$fetch['db_title3'];
                        $con6=$fetch['db_con6'];
                        $con7=$fetch['db_con7'];
                        $con8=$fetch['db_con8'];
                        $con9=$fetch['db_con9'];
                        $dec2=$fetch['db_dec2'];
                        $dec3=$fetch['db_dec3'];
                        $dec4=$fetch['db_dec4'];
                         // $name1=$fetch['db_name1']
                        $name2=$fetch['db_name2'];
                         $name3=$fetch['db_name3'];
                        $post1=$fetch['db_post1'];
                        $post2=$fetch['db_post2'];
                        $post3=$fetch['db_post3'];


                        }



    //home page
    // $title="We Design your space";
	// $subtitle="Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor";
	$button="See Our Projects";
	// $title1="Architechtural plan <br>design and build";
    // $subtitle1="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.";
    // $con1="Consectetur adipiscing sed do eiusmod.";
    // $con2="Eiusmod tempor incididunt labore.";
    // $title2="Make your Dream with US";
    // $con3="Interior";
    // $dec1="Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    //                         aliqua quis ipsum suspendisse.";
    // $con4="Exterior";
    // $con5="Bridge";
    // $title3="Our Latest Projects";
    // $con6="Abahoni Building";
    // $con7="MR Kholifa Tower";
    // $con8="Galoni Plan & Design";
    // $con9="Hiclick Mirror design";
    // $dec2="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis. ";
    // $dec3="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis. ";
    // $dec4="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $name1="-MITHILA";
    // $name2="-MITHILA";
    // $name3="-MITHILA";
    // $post1=" Designer at Colorlib";
    // $post3=" Designer at Colorlib";                                 
?>
    