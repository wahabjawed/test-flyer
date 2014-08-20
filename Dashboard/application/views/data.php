  <div style="margin-bottom:20px;margin-top:20px">

  
<script>
function link(){
	window.location.href = "data/add"
	}


function resets(){
	location.reload();
	}
	

	function deleteConfirm(id)
	{
		var result = confirm("Want to delete?");
		
		return result;
		
	}	
	
	
	
</script>
  
     <form name="search-form" id="search-form" class="form-inline" role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url('index.php/data/')?>">
      <div class="form-group">
        <label class="sr-only" for="searchTerm">Search Term</label>
        <input type="text" class="form-control" id="searchTerm" name= "searchTerm" placeholder="Enter Search Term">
      </div>
      <button type="submit" class="btn btn-success">Search</button>
      <button type="button" onclick="resets()" class="btn btn-primary">Reset</button>
      
    </form>
    </div>
    <div class="table-responsive">
       <form name="deleteForm" action="" method="post">
       <?php
	   
	   $tmpl = array ( 'table_open'  => '<table class="table table-bordered">' );

$this->table->set_template($tmpl);
       $this->table->set_heading('#', 'Name', 'Tel', 'Address','City','Zip Code','Email','Interest','System','Rate','SystemQ','Next Date','User','Status','Action');
echo $this->table->generate($data);
       ?>
         </form>
          </div>