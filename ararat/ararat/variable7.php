<?php

     include("conn.php");
                        $query=mysqli_query($conn, 'SELECT * FROM `user7`') or die(mysqli_error());
                        while($fetch=mysqli_fetch_array($query)){
                    
                    
                        $title1=$fetch['db_title1'];
                        $dec1=$fetch['db_dec1'];
                        $title2=$fetch['db_title2'];
                        $dec2=$fetch['db_dec2'];
                        $dec3=$fetch['db_dec3'];
                        $title3=$fetch['db_title3'];
                        $dec4=$fetch['db_dec4'];
                        $dec5=$fetch['db_dec5'];
                        $dec6=$fetch['db_dec6'];
                        $name1=$fetch['db_name1'];
                        $name2=$fetch['db_name2'];
                        $name3=$fetch['db_name3'];
                        $post1=$fetch['db_post1'];
                        $post2=$fetch['db_post2'];
                        $post3=$fetch['db_post3'];
                             




                        


                        }




	 // $title1="Architechtural plan <br>
  //                                   design and build";
   // $dec1="Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
   //                                  liqua orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
   //                              <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
   //                                  liqua orem ipsum dolor sit amet, consectetur adipisicing elit.</p>
   //                              <p>Eiusmod tempor incididunt ut labore et dolore magna liqua orem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.";
   // $title2="Challenge";
   // $dec2="Eiusmod tempor incididunt ut labore et dolore magna liqua orem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet."; 
   // $dec3="Eiusmod tempor incididunt ut labore et dolore magna liqua orem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.";
   // $title3="Solution";
   // $dec4="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
   //                                  tempor
   //                                  incididunt ut
   //                                  <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
   //                                  Risus
   //                                  commodo
   //                                  viverra <br> maecenas accumsan lacus vel facilisis.";
     // $dec5="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
     //                                tempor
     //                                incididunt ut
     //                                <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
     //                                Risus
     //                                commodo
     //                                viverra <br> maecenas accumsan lacus vel facilisis.";
     // $dec6="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
     //                                tempor
     //                                incididunt ut
     //                                <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
     //                                Risus
     //                                commodo
     //                                viverra <br> maecenas accumsan lacus vel facilisis.";
    // $name1="-MITHILA";
     // $name2="-MITHILA";
      // $name3="-MITHILA";
      // $post1="Designer at Colorlib";
       // $post2="Designer at Colorlib";
        // $post3="Designer at Colorlib";


?>