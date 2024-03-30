# Jeraquia i peticions (web-services)- Base de dades servidor - client

- **Existeix_usuari**: el_client li demana al_server si existeix un usuari i 
mail. el_server li retorna un si o un no. 

- **Crear_usuari**: el_client li demana al_server si usuario o email existeix 
sino existeix el_server l'afegeix a la base de dades i 
el_server li retorna un si o un no.

- **Baixa_usuari**: ...

- **Accedir_usuari**: el_client envia email i password al server, si 
existeix_usuari el_server li retorna json amb dades del 
usuari + productes(comprats) + targetes però sense el password.

- **Afegir_tarjeta**: ...
- **Eliminar_tarjeta**: ...
- **Canviar_adreça_facturacio: ...

- **Alta_producte**: ...
- **Baixa_producte**: ...
- **Consulta_producte**: ...
- **Existeix_producte**: ...

## Estructura de la base de dades amb json: 

### base de dades al_client amb format json: 

Base de dades al_client que pot guardarse localmment per fer consultes més
ràpides.

{
  "nom":"nom",
  "creacio":"data",
  "producte": [
  {
    "id":"id",
    "preu":"",
    "durada":"",
    "descripcio":"descripcio",
    "condicio":bolea
  }]
  "usuaris": [
  {
    "id":"id",
    "nom":"nom",
    "cognom":"cognom",
    "username":"username",
    "email":"email",
    "productes": [
    {
      "id":"id_producte"
    }]
    "tarjeta":[
    { 
      "operador":"operador",
      "titular":"titular",
      "num_tarjeta":"num_tarjeta",
      "csv":"csv tarjeta",
      "expira":"cad tarjeta",
      "facturacio":"adr facturació",
      "condicio":bolea
    }]
  }]
}

### base de dades al_servidor: 

- Base de dades resumida

{
  productes [1..n]
  usuarios[1..n]
    productes[1..n]
    targetes[1..n] 
}

- Base de dades general

{
  "nom":"nom",
  "creacio":"data",
  "producte": [
  {
    "id":"id",
    "preu":"",
    "durada":"",
    "descripcio":"descripcio",
    "condicio":bolea
  }]
  "usuaris": [
  {
    "id":"id",
    "nom":"nom",
    "cognom":"cognom",
    "username":"username",
    "password":"password",
    "email":"email",
    "productes": [
    {
      "id":"id_producte"
    }]
    "tarjeta":[
    { 
      "operador":"operador",
      "titular":"titular",
      "num_tarjeta":"num_tarjeta",
      "csv":"csv tarjeta",
      "expira":"cad tarjeta",
      "facturacio":"adr facturació",
      "condicio":bolea
    }]
  }]
}

<EOF>
