   <?php $this->load->view('admin/admin_nav.php'); ?>
   
      <div class="content">
	  
<?php 
foreach($data as $row){ ?>

<form action="<?php echo base_url() ?>admin/admin/multiform_slider" method="POST" id="personal-info" class="personal-info">



<img src="../../slider_uploads/<?php echo $row->image_name;  ?>" alt="Girl in a jacket" width="500" height="600">
<!--<form name="myform" id="myform" action="<?php //echo base_url() ?>/admin/toggle_data" method="post">-->

<input type="hidden" class="idclass" name="id" id="id" value="<?php echo $row->id; ?>" />
<input type="hidden" name="image_name" id="image_name" value="<?php echo $row->image_name; ?>" />

<div class="form-group">
             
                <select name="status" id="status" class="form-control" >
				<option value="1" >enable</option>                
					<option  value="0" >disable</option>       
                </select>
                 </div>




<input      type="submit" value="See more" />
</form>
<?php 
} ?>
</div>

<script>
var inputElement = document.createElement('input');
inputElement.type = "submit"
inputElement.addEventListener('click', function(){
    gotoNode(<?php echo $row->id; ?>);
	console.log()
});

  /*  $(document).ready(function(){
        $(".personal-info").submit(function(e){
            e.preventDefault();
			
			
			
		
			  
			  //   var id = $("#id").val();

			var status = $(".idclass").val();
			
			console.log(status);
           // var decs= $("#js_personal_desc").val();
            $.ajax({
                type: "POST",
                url: 'http://localhost/kaperign/admin/admin/toggledata',
                data: {status:status,id:id},
                success:function(data)
                {
                    alert('grgrgrg!!');
					//location.reload();
                },
                error:function()
                {
                    alert('fail');
                }
            });
        });
    });*/
</script>