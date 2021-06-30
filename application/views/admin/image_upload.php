   <?php $this->load->view('admin/admin_nav.php'); ?>
   
      <div class="content">
	  <?php echo $error;?>
<?php echo form_open_multipart('admin/admin/do_upload');?>
	
      <form action = "" method = "">
	    <input class="form-control" type="text"  name="name" placeholder="inout diplay name">
         <input type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input type = "submit" value = "upload" /> 
      </form> 
	 
<?php //if( $gtx==1){ ?>
		
   


<?php// } ?>
</div>