<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- Example Code -->
    <button type="button" class="btn btn-primary" \
      data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Enllaç a acces</button>
   
    <!-- Modal access -->
    <div class="modal fade" id="exampleModal" \
      tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog">

        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Acceso a miembros</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>


          <form action="checkuser.php" method="post">

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
      
  </body>
<html>

