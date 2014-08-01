




  
  <!-- Jumbotron -->
  <div class="jumbotron">
    <form class="form-horizontal" role="form" method="post">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $user['title']; ?></h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label for="inputFName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Name" required >
            </div>
          </div>
          
           <div class="form-group">
            <label for="inputUName" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputUName" name="inputUName" placeholder="Username" required>
            </div>
          </div>
            <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="Email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
            </div>
          </div>
            <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="float:right">
          <button type="submit" class="btn btn-default">Post</button>
        </div>
      </div>   
    
        
        </div>
      </div>
      
    </form>
  </div>