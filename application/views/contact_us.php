 
  <?php $this->load->view('headerfiles.php'); ?>
    <?php $this->load->view('navbar.php'); ?>
<style>
.btn-primary {
    color: #fff;
    background-color: #455a64!important;
    border-color: #455a64!important;
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
.contact_right {
    background-color: whitesmoke;
}
.contact_bg {
    background-color: #017eff;
    color: #2e2e2e;
    background-color: #daecff!important;
}
.paddingtop3
{
	padding-top: 4%;
} 
@media (min-width:767px) {

	.col-md-10.contact_right {
    margin-top: 0%; 
    position: relative;
    top: 11%;
}

.contact_img {
   
    padding: 15%;
}
}
@media (max-width:767px) {
.call {
    margin-top: 2%;
}
}
 @media(min-width :1600px){
	 

	 
	 
	.col-md-10.contact_right {
		    position: relative;
    top: 20%;
}
.form-group {
    margin-bottom: 2rem;
}
 h2 {
    font-size: 3rem;
}
}
</style>
 

<div class="row">
  <div class="col-md-6 contact_left">
 <img  class="contact_img" src="../../assets/Email.png"  alt=""/>
  </div>
  <div class="col-md-6 contact_right">
   <div class="col-md-10 contact_right">
 <h2>We're always ready to help</h2><br/>

   
	<form role="form" method="post" action="<?php echo site_url('Welcome/sendmail');?>">
  <div class="form-group">

    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"  name="name" required>
  </div>
   <div class="form-group">
 
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email1" placeholder="Email" required>
  </div>
   <div class="form-group">

    <input type="text" class="form-control" id="exampleFormControlInput1" name="subject" placeholder="Subject" required>
  </div>
  <div class="form-group">
  
    <textarea class="form-control"   name="content" id="exampleFormControlTextarea1" rows="3" placeholder="Text" required></textarea>
  </div>
  <button type="submit"  onclick="mailfunct()" class="btn btn-primary">Contact US</button>
</form>

  </div>
</div>
 </div>
<div class="clearfix"></div>
<div class="col-lg-12  contact_bg">
<h3 class="paddingtop3">Call  : +91 859-297-3800 | +91 974-657-4532</h3>
<h3 class="paddingtop5">Email : info@kapreign.com </h3>
  
    </div>
	<div class="col-lg-12  contact_bg_white">

  
    </div>
   
	
   
	<?php $this->load->view('footer.php'); ?>