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


    <h1>Puta merda de bola</h1>
    <p>Gañan v0.1</p>
    
    <button class="btn btn-primary" data-bs-target="#subscription-1" data-bs-toggle="modal">Subscriu-te cinefil</button>


    <div class="modal fade" id="subscription-1" \
          aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
    
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Subscripció 1 de 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <div class="modal-body">

            <div class="col-6">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="Perico">
            </div>

            <div class="col-6">
              <label for="cognom" class="form-label">Cognom</label>
              <input type="text" class="form-control" id="cognom" placeholder="De los Palotes">
            </div>

            <!-- Els dos correus han de coincidir --> 
            <div class="col-md-12">
              <label for="correu1" class="form-label">Correu</label>
              <input type="email" class="form-control" id="correu1">
            </div>
      
            <div class="col-md-12">
              <label for="correu2" class="form-label">Correu confirmació</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
    
            <div class="col-md-12">
              <label for="carrer" class="form-label">Adressa postal</label>
              <input type="text" class="form-control" id="carrer">
             </div>

            <div class="col-md-12">
              <label for="passw" class="form-label">Password</label>
              <input type="password" class="form-control" id="passw">
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="condicions1" checked="true">
                <label class="form-check-label" for="condicions1">
                  Marcant la casella acceptes el dret a "pernada"
                </label>
              </div>
            </div>

          </div>
        
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#subscription-2" data-bs-toggle="modal">Següent</button>
          </div>

        </div>
      </div>
    </div>



    <form action="new-sub.php" method="post">
    
    <div class="modal fade" id="subscription-2" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Subscripcio 2 de 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
          
            <div class="col-md-6">
              <label for="operador1" class="form-label">Operador</label>
              <select id="operador1" class="form-select">
                <option selected="">Bank 1</option>
                <option selected="">Bank 2</option>
                <option selected="">Bank 3</option>
                <option selected="">Bank 4</option>
              </select>
            </div>
      
            <div class="col-6">
              <label for="operador2" class="form-label">Operador 2</label>
              <input type="text" class="form-control" id="operador2" placeholder="Operador2">
            </div>
     
            <div class="col-12">
              <label for="bintarjeta" class="form-label">bin</label>
              <input type="text" class="form-control" id="bintarjeta" placeholder="0000-0000-0000-0000">
            </div>

            <div class="col-6">
              <label for="datacaducitat" class="form-label">Expira</label>
              <input type="text" class="form-control" id="datacaducitat" placeholder="08/32">
            </div>
      
            <div class="col-6">
              <label for="cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cvv" placeholder="000">
            </div>

            <div class="col-md-12">
              <label for="codipostal" class="form-label">Codi Postal</label>
              <input type="number" class="form-control" id="codipostal">
            </div>
 
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="condicions2">
                <label class="form-check-label" for="condicions2">
                Accepta que has de pagar 1500€ per una cullera foradada.
                </label>
              </div>
            </div>

          </div>
            
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#subscription-1" data-bs-toggle="modal">Anterior</button>
            <input type="submit" class="btn btn-primary" value="Subscriure's"></input>
          </div>

        </div>
       </div>

      </form>

    </div>
  


  </body>
</html>
