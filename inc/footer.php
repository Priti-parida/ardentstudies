 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-lg-3 col-md-12">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Couching Center</h4>
              <a class="btn btn-link" href="index.php">Home</a>

              <a class="btn btn-link" href="about.php">About Us</a>
              <a class="btn btn-link" href="events.php">Exam notification</a>

              

              <a class="btn btn-link" href="service.php">Services</a>
              <a class="btn btn-link" href="gallery.php">Results </a>


              <a class="btn btn-link" href="contact.php">Contact Us</a>
            
          </div>
          <div class="col-lg-3 col-md-12">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Courses</h4>
              <a class="btn btn-link" href="courses.php">SSC</a>

              <a class="btn btn-link" href="courses.php">CLAT</a>
              <a class="btn btn-link" href="courses.php">MBA</a>

              

              <a class="btn btn-link" href="courses.php">MAT</a>
              <a class="btn btn-link" href="courses.php">CAT </a>


              <a class="btn btn-link" href="courses.php">IPMAT</a>
            
          </div>
          <div class="col-lg-3 col-md-12">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Pragati Nagar Road, Street-1
              Riali,Bhilai, Chhattisgarh 490006</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>9993728269</p>
              <a href="ardentstudies@gmail.com"><p class="mb-2"><i class="fa fa-envelope me-3"></i>ardentstudies@gmail.com</a></p>
              <div class="d-flex pt-2">
                 
              <a href="" class="text-white me-4">
        
              </div>
          </div>
          <div class="col-lg-3 col-md-12">
              <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
              <h5 class="text-light fw-normal">Monday-Saturday</h5>
              <p>7AM-9PM Sunday- Closed</p></br>
              
          </div>
        
      </div>
  </div>

</div>
<!-- Footer End -->


<!-- Back to Top -->
<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright&copy;<?php echo date('Y');?><a href="http://www.binarycodetechnologies.com/">Binary Code Technology</a>, All rights reserved.</span>
      
    </p>
</div>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
<script  src="js/jquery-3.6.0.min.js"></script>
<script  src="js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready( function () {
    $('#examtable').DataTable();
} );
</script>


</body>
</html>


<style>
  
/*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid #FFFFFF;
    border-radius: 35px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(18, 17, 17, 0.1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}
.bg-dark {
    background-color: #0d0d0d!important;
</style>