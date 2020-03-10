
<?php





    include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user3`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title1=$fetch['db_title1'];
                        $title2=$fetch['db_title2'];
                        $subtitle1=$fetch['db_subtitle1'];
                        $dec1=$fetch['db_dec1'];
                        $subtitle2=$fetch['db_subtitle2'];
                        $dec2=$fetch['db_dec2'];
                        $subtitle3=$fetch['db_subtitle3'];
                        $dec3=$fetch['db_dec3'];
                        $subtitle4=$fetch['db_subtitle4'];
                        $dec4=$fetch['db_dec4'];
                        $con1=$fetch['db_con1'];
                        $con2=$fetch['db_con2'];
                        $con3=$fetch['db_con3'];
                        $name1=$fetch['db_name1'];
                        $name2=$fetch['db_name2'];
                        $name3=$fetch['db_name3'];
                        $post1=$fetch['db_post1'];
                        $post2=$fetch['db_post2'];
                        $post3=$fetch['db_post3'];



                        


                        }
	



    // $title1="Projects";
	// $title2="Our Latest Projects";
	// $subtitle1="Abahoni Building";
	// $dec1="Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
 //                            quis ipsum suspendisse.";
 //    $subtitle2="MR Kholifa Tower";
 //    $dec2="Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
 //                            quis ipsum suspendisse.";
    // $subtitle3="Galoni Plan & Design";
    // $dec3="Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
    //                         quis ipsum suspendisse.";
    // $subtitle4="Hiclick Mirror design";
    // $dec4="Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
    //                         quis ipsum suspendisse.";
    // $con1="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $con2="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $con3="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                 tempor
    //                                 incididunt ut
    //                                 <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida4    //                                 Risus
    //                                 commodo
    //                                 viverra <br> maecenas accumsan lacus vel facilisis.";
    // $name1="-MITHILA";
    // $name2="-MITHILA";
    // $name3="-MITHILA";
    // $post1=" Designer at Colorlib";
    // $post2=" Designer at Colorlib";
    // $post3=" Designer at Colorlib";                                               
?>	