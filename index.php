<?php
include('inc/header.php');
include('inc/db.php');





?>


</section>

<div id="popUpMain" style="display: none;">
    <div id="popup">
      <!--<h1 id="newsHeading"> subscribe here</h1><br>-->
      <button class="submitId">close</button>
    
  
    </div>
  </div>
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten"><b>Education is the most powerful weapon which you can use to change the world - 

Nelson Mandela</b></p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->



<section class="bg-gray overflow-md-hidden">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/about.jpeg" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4"> Teaching Motto </h3>
            <p> Its your belief that system about teaching and learning broken down into achievable objectives. It reflects your values and the truths that guide your behavior.The carving and chipping away to create a masterpiece take years of dedication. </p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Inspiration, Way to Success</h3>
            <p>
“True education reveals self-potential, more than just sows ideas.” “In school we learn to think alike, but true education is to learn how to think differently.” “A true education prepares you not only for living but also for life.”</p>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<section class="notification">

<hr>
<marquee behavior="alternate" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
<?php $query=mysqli_query($conn,"select * from tblnotice");
while ($row=mysqli_fetch_array($query)) {
?>

<h4><?php echo $row['Title'];?> </h4>

<?php } ?>


</marquee>
</section>
</hr>
<!-- HOME -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About Educenter</h2>
        <p>We adopt unique teaching methodology, followed by rigorous training. We at ARDENT STUDIES believe that the youth need a total transformation in terms of "Education and Motivation that could lead them to great success in this abruptly changing era.

We primarily inculcate these two things in our students which resulted in unmatched results like Eight All India Toppers with 100Percentile and Seventeen 99+ Percentilers, IIM selects in the very first year and hundreds of campus placements, setting ARDENT STUDIES a class apart from its contemporaries.</p>
        <a href="about.php" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/aboutsir.jpeg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /HOME -->


 <!-- course list -->
 <section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">Achievements</h2>

  
        
      </div>
    </div>
    <div class="gallery">
    <?php
			
			
			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `ID` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
   <video width="300" height="240" controls>
					<source src="admindash/video/<?php echo $fetch['location']?>">
				</video>
    <?php }
    ?>
  
    
</div>

</div>
        
</section>
<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="courses.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0"  style="height:254px; width:100%"src="https://resize.indiatvnews.com/en/resize/newbucket/715_-/2019/09/ssc-recruitment-2019-1568358144.jpg" alt="course thumb">
      <div class="card-body" style="margin-top: 27px;">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">SSC</h4>
        </a>
        <p class="card-text mb-4">  Staff Selection Commission Combined Graduate Level Exam or Staff Selection Commission (SSC) is an organisation under Government of India to recruit staff for various posts in the various Ministries and Departments of the Government of India and in Subordinate Offices
</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0"style="height:254px; width:100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNXbiPKJo3YOvq-Fxnz2Pe-QeioHrmubbeqDy7gpxRQdDRoM-BD183jS_oTLZgz52q0XI&usqp=CAU" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">CLAT</h4>
        </a>
        <p class="card-text mb-4"> 
The Common Law Admission Test (CLAT) is a national level entrance exam for admissions to undergraduate (UG) and postgraduate (PG) law programmes offered by 22 National Law Universities around the country. CLAT is organized by the Consortium of National Law Universities consisting of the representative universities.</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0"style="height:254px; width:100%" src="https://www.thehighereducationreview.com/newsimagespl/71CHVOfi.jpeg" alt="course thumb">
      <div class="card-body" style="margin-top: 27px;">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">MBA</h4>
        </a>
        <p class="card-text mb-4">The core courses in an MBA program cover various areas of business administration such as accounting, applied statistics, human resources, business communication, business strategy, finance etc in a manner most relevant to management analysis and strategy.</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0"style="height:254px; width:100%"src="https://qph.fs.quoracdn.net/main-qimg-b11b257b9ac3d20cb40950e6796c187f-pjlq" alt="course thumb">
      <div class="card-body" style="margin-top: 27px;">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">CAT</h4>
        </a>
        <p class="card-text mb-4"> The Common Admission Test (CAT)is a computer based test for admission in graduate management programs. The test consists of three sections: Verbal Ability and Reading Comprehension (VARC), Data Interpretation and Logical Reasoning (DILR) and Quantitative Ability (QA).</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" style="height:254px; width:100%"src="https://www.firebird.ac.in/wp-content/uploads/2021/12/4-mat-exam.jpg" alt="course thumb">
      <div class="card-body" style="margin-top: 27px;">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">MAT</h4>
        </a>
        <p class="card-text mb-4">Management Aptitude Test (MAT) is a standardised test being administered since 1988 to facilitate Business Schools (B-Schools) to screen candidates for admission to MBA.The largest test of its kind in the nation, MAT will continue to be your passport to over 600 B-Schools across India</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" style="height:254px; width:100%"src="https://images.shiksha.com/mediadata/images/articles/1626685249phplNcKpD.jpeg" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
         
        </ul>
        <a href="signup.php">
          <h4 class="card-title">IPMAT</h4>
        </a>
        <p class="card-text mb-4">IPMAT is an aptitude test conducted by IIM Indore and IIM Rohtak for admission to its five-year Integrated Programme in Management. IPM course is a dual degree program (UG
        +PG) offered by IIM Indore for candidates passing the 12th standard.IPMAT exam has questions from Quantitative Ability and Verbal Ability for under-graduates</p>
        <a href="signup.php" class="btn btn-primary btn-sm">Apply now</a>
      </div>
    </div>
  </div>
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Click to Join the Advance Examination Plans</h6>
        <h2 class="section-title text-white">Training In Many Competitive Exams</h2>
        <a href="signup.php" class="btn btn-secondary">join now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->


<!-- success story -->
<section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://www.youtube.com/watch?v=EZBbvUByVro&list=PL6lOEX12eBo-pC4iP76eiEJbSSFVtoNSV" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-12 col-sm-12">
        <div class="bg-white p-5">
          <h2 class="section-title">SUCCESS SECRETS</h2>
          <p>Dear Students,</br> 
          Great futurist Alvin Toffler quoted,
 "The illiterates of 21st century will not be those who cannot read and write but 
 will be those who cannot learn, unlearn and re-learn".</br>
 How times change! The corporate sector and its industries are witnessing an 
 unprecedented era of growth and transition, seemingly perpetuating. As we stand in the third millennium, the corporate sector promises 
 rich rewards - both monetary and social, to those willing to take a plunge. A general consensus exists in the people of this nation that the only viable solution to our problem lies in planned investment in HR and education. The portal of higher education in India is open to students who perform well in stringent competitive exams. This leads to stiff competition among millions of students and this is where value organizations like ARDENT STUDIES steps in to add value to students' preparations.</br>
 
 We adopt unique teaching methodology, followed by rigorous training. We at ARDENT STUDIES believe that the youth need a total transformation in terms of "Education and Motivation that could lead them to great success in this abruptly changing era. </br>
 
 <b>"Learning Re-defined"</b> signifies the innovative methods in teaching clubbed with heavy doses of motivations that make students crack any national level competitive exams like CAT, CMAT, XAT etc. </b>
 <b>"Appa Deepo Bhowah" </b>explores the very essence of being self motivated. Right from the inception of ARDENT STUDIES in March 2010, students' success has been our driving force to excel in this field. </br>
 
 
 We primarily inculcate these two things in our students which resulted in unmatched results like <b>Eight All India Toppers with 100Percentile and Seventeen 99+ Percentilers, IIM selects in the very first year and hundreds of compus placements,</b> setting ARDENT STUDIES a class apart from its contemporaries. 
 We would like to continue this trend as our prime motive is to give much more back to the society whatever 
 it would have given us in terms of prosperity and happiness. This sacred goal of prospering the society cannot 
 be achieved without you being successful. And together we surely will achieve it.</br>
 
 Let's make it happen, Let's do it!</p></br>
 <b><u>Aakash Singh</u></b>
 
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->



<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Our Educator</h2>
      </div>
      <!-- teacher -->
      <div class="col-lg-12 col-sm-12 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/aboutsir.jpeg" alt="teacher">
          <div class="card-body">
            <a href="teacher-single.html">
              <h4 class="card-title">Aakash Singh</h4>
            </a>
            <p>Educator</p>
             <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/ardentstudies"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.youtube.com/channel/UCoNL3UljJeXdaMIPeQisLxA"><i class="ti-youtube"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/Akash_Ardent"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.instagram.com/akashsingh786/"><i class="ti-instagram"></i></a></li>

            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://in.pinterest.com/singhakash20/_saved/"><i class="ti-pinterest"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.linkedin.com/in/ardentstudies001/"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.quora.com/profile/Akash-Singh"><i class="ti-link"></i></a></li>



          </ul>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</section>
<!-- /teachers -->

<?php
include('inc/footer.php');?>

<style>
  .error {
    color: #a00;
  }
  
         
  body {
    display: flex;
    
    flex-direction: column;
    font-family: 'Roboto',sans-serif;
  }
  .gallery img{
          width: 350px;
          height: 250px
  }
  .h2 text-primary{
    font-size: 14px !important;
  }



#popupmain{
  position: fixed;
   width: 100%;
  height: 100%;
  background: rgba(12, 11, 11, 0.6);
  z-index: 1001;


}
             
             
<?php
     
     $sql = "SELECT * FROM popimg";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
       while($fetch = mysqli_fetch_assoc($result)){
         $img_name = $fetch['img_name'];
         ?>
       <?php 
			foreach (explode(',',  $img_name) as $image) {
			?>

			<?php }} }?>

#popup{
  width: 450px;
  height: 450px;
  background-image:linear-gradient(rgba(0,0,0 ,0.5),rgba(0,0,0 ,0.5)),url('admindash/updpop/<?php echo $image;?>'); 
  background-size: cover;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  box-shadow: 2px 2px 5px 3px white;
  text-align: center;
  padding-top: 10px;


}
#newsHeading{
  transform: translateY(50px);
  color: white;

}

.submitId{
  /*font-family: "Segoe UI", sans-serif;
    font-size: 16pt;
    padding: 10px 20px;
  background-color:transparent;
  border: none;
  font-size: 2rem;
  text-align: right;
  
  color: rgb(17, 14, 14);*/
  background-color:transparent;
  color: aliceblue;

    font-size: 16pt;
    padding-bottom:  10px 20px;
}


</style>
<script>
  $(document).ready(function(){
    setTimeout(function(){
$('#popUpMain').css('display','block');
    }, 3000);

  });


  
  $('.submitId').click(function(){
    
$('#popUpMain').css('display','none');
    

  });



</script>