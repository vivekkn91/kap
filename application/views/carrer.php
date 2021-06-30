 <?php $this->load->view('headerfiles.php'); ?>
    <?php $this->load->view('navbar.php'); ?>

<style>


a {
    color: white;
}
img {
    vertical-align: baseline;
    border-style: none;
}
body {
    max-width: 100%;
  
    background-color: #f2f2f2;
}
main {
    background: #f2f2f2!important;;

  width: 60%;
  margin: 0 auto;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;

}
.careertext {
   margin-top: 0;
    text-align: center;
	color: black;
}
main div {
 
 
  color: skyblue;

  padding: 20px;

  overflow: auto;
  text-align: center;
}

 .carrer_img{
    width: 100%;
    height: auto;
    object-fit: contain;
}

.fa-2x:before {
    font-size: 14px;
    vertical-align: bottom;
}
.last {
    color: white;
    margin-right: 43px;
    vertical-align: 0px;
}
.careers
{height:150px;
width:100%;
background:#017eff;
color:white;}
.hire {
	font-size:20px;
   text-align: center;
    padding-left: 0%;
    padding-top: 0%;
    float: none;
    top: 33%;
    position: relative;
    color: #f9f9f9;
}
.hire2 {
	font-size:20px;
	  position: relative;
    text-align: center;
    padding-left:0%; 
    padding-top: 0%; 
   float: none; 
 top: 27%;
    color: #f9f9f9;
}

</style>
<main>
  
 <img  class="carrer_img" src="<?php echo base_url('assets/careerold.jpg'); ?>"  alt=""/>
 <!--<h4 class="careertext">Currently there is no opening.</h4>-->
 </main>
  <div class="clearfix"></div>
  <div class="row">
  <div class="careers">
  <p class="hire">We are hiring <b>.NET Developers</b>, 3+ years experience</p>
  <p class="hire2">interested candidates please submit your resume to info@kapreign.com</p>
  </div>
  </div>
  

	<?php $this->load->view('footer.php'); ?>