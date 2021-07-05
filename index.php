<?php

include 'header.php';
?>
<!-- search box -->
<form action="search_result.php" method="POST">
<div class="wrap">
  <div class="search">
    
     
     <input type="text" name="search" class="searchTerm" placeholder="What are you looking for?">
     <button type="submit" name="submit-search" class="searchButton">
       <i class="fa fa-search"></i>
    </button>
     
     
    
    
  </div>
</div>
</form>

</div>

  </div>

  

<div class="padd" ></div>
  
<div class="card-details">

 
 <button onclick="document.location='review.php'">write a Review</button>
 


  </div>

<?php


  
    

    //$search=mysqli_real_escape_string($conn,$result);
    $sql="SELECT * from review  WHERE published='1' ";
    $result2 = mysqli_query($db, $sql);
    $row_count=mysqli_num_rows($result2);
    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result2))
         
            {
                
                echo "
                <link rel='stylesheet' href='mystyle.css'>
                <link rel='stylesheet' href='card_style.css'>
                <div class='flex-container'>
                  <div class='left-side'>
                      <div class='avatar-img'>".$row['rev_name']."</div>
                    <div class='student-name'>".$row['rev_name']."<br></div>
                  </div>
                  <div class='right-side'>
                      <div>".$row['uni_name']."</div>
                      <div>".$row['dept_name']."</div>
                      <p>".$row['details']."</P>
                  </div>
                </div>
                ";
               
            }
        }
        

   
?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/606dd400067c2605c0c02741/1f2mg88k2';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=north%20south%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">add google map to html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
<!--Start of Tawk.to Script-->
<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

