




  
  <!-- Jumbotron -->
  <div class="jumbotron">
    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/data/update/'.$data->data_id)?>" enctype="multipart/form-data">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $title; ?></h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="inputFName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName" name="inputName"  value= "<?php echo $data->name; ?> " required>
			  
            </div>
          </div>
          
           <div class="form-group">
            <label for="inputTel" class="col-sm-2 control-label">Tel</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputTel" name="inputTel" value= "<?php echo $data->tel; ?>" required>
            </div>
          </div>
            <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputAddress" name="inputAddress" value= "<?php echo $data->address; ?>" required>
            </div>
          </div>
            <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputCity" name="inputCity" value= "<?php echo $data->city; ?>" required>
            </div>
          </div>
          
                      <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Zip Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputZip" name="inputZip" value= "<?php echo $data->zipcode; ?>" required>
            </div>
          </div>
                      <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="Email" class="form-control" id="inputEmail" name="inputEmail" value= "<?php echo $data->email; ?>" required>
            </div>
          </div>
           
           <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Interest</label>
            <div class="col-sm-10">
              <select class="form-control" id="inputInterest" name="inputInterest" required>
              <option value=1 <?PHP echo ($data->interest=='1'?'selected':''); ?>>1</option>
              <option value=2 <?PHP echo ($data->interest=='2'?'selected':''); ?>>2</option>
              <option value=3 <?PHP echo ($data->interest=='3'?'selected':''); ?>>3</option>
              <option value=4 <?PHP echo ($data->interest=='4'?'selected':''); ?>>4</option>
              <option value=5 <?PHP echo ($data->interest=='5'?'selected':''); ?>>5</option>
               </select>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Have System</label>
            <div class="col-sm-10">
              <select class="form-control" id="inputSystem" name="inputSystem" required>
              <option value='YES' <?PHP echo ($data->havesystem=='Yes'?'selected':''); ?>>Yes</option>
              <option value='No' <?PHP echo ($data->havesystem=='No'?'selected':''); ?>>No</option>
                             </select>
            </div>
          </div>
          
          
              <div class="form-group">
            <label for="inputCity" class="col-sm-2 control-label">Date</label>
            <div class="col-sm-10">
              <input type="Date" class="form-control" id="inputDate" name="inputDate" value= <?php echo $data->cdate; ?> required>
            </div>
          </div>
          
          
          <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="float:right">
          <button type="submit" class="btn btn-default">Update</button>
        </div>
      </div>   
    
        
        </div>
      </div>
      
    </form>
  </div>