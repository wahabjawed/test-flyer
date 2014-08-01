  <div style="margin-bottom:20px;margin-top:20px">
  
<script>
function link(){
	window.location.href = "user/add"
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
  
  
     <form name="search-form" id="search-form" class="form-inline" role="form" enctype="multipart/form-data" method="post" action="user_management.php">
      <div class="form-group">
        <label class="sr-only" for="searchTerm">Search Term</label>
        <input type="text" class="form-control" id="searchTerm" name= "searchTerm" placeholder="Enter Search Term">
      </div>
      <button type="submit" class="btn btn-success">Search</button>
      <button type="button" onclick="resets()" class="btn btn-primary">Reset</button>
      <button type="button" onclick="link()" class="btn btn-warning">Add New</button>
    </form>
    </div>
    <div class="table-responsive">
       <form name="deleteForm" action="" method="post">
       <?php
	   
	   $tmpl = array ( 'table_open'  => '<table class="table table-bordered">' );

$this->table->set_template($tmpl);
       $this->table->set_heading('#', 'Username', 'Name', 'Email','Action');
echo $this->table->generate($users);
       ?>
         </form>
          </div>