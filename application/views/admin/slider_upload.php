<?php $this->load->view('admin/admin_nav.php'); ?>

   
      <div class="content">
	  <h3>slider upload</h3>
	  <?php echo $error;?>
<?php echo form_open_multipart('admin/admin/do_upload_slider');?>
	
      <form action = "" method = "">
	  
         <input type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input type = "submit" value = "upload" /> 
      </form> 
	 
<?php //if( $gtx==1){ ?>
		
   


<?php// } ?>
</div>