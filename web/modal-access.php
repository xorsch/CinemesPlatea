    <!-- Modal access -->
    <div class="modal fade" id="filibuster" \
      tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Acceso a miembros</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


          <form action="user.php" method="post">

          <div class="modal-body">
            
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="accemail" name="accemail" placeholder="cinefilo@cineclub.cat">
                <label for="accemail">Email</label>
              </div>      
              
              <div class="form-floating">
                <input type="password" class="form-control" id="accpassword" name="accpassword" placeholder="Password">
                <label for="accpassword">Password</label>
              </div>
        
          </div>
        
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Accedir"></input>
          </div>

          </form>
        
        </div>
      </div>
    </div>
 
