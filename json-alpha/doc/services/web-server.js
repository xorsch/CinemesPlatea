// Test
var http = require('http');
var url = require('url');

http.createServer(function (req, res) {
  
  var q = url.parse(req.url, true).query;
  var action = q.action;
  let user = q.user;
  let mail = q.mail;
  let pass = q.pass;
  let card = q.card;
  let dat  = q.data;
  
  switch( action ) {
    case 'isUser':
      if( (user && mail) != null ){
        isUser(user,mail);
      }
      break;
    case 'addUser':
      addUser(q.user);
      break;
    case 'delUser':
      if( q.user != null ){
        delUser( q.user );
      }
      break;
    case 'getUser':
      if( (mail != null ) && ( pass != null ) ){
        getUser(q.mail,pass,req,res);
      }
      break;
    case 'addUserCard':
      if( (user != null) &&( card != null) ) 
      {
        addUserCard( user, card); 
      }
      break;
    default:
      // code block
  } 

}).listen(8080);


function isUser( user, mail) {
  console.log( "Is User: " + q.user + " "  + q.mail );
  return true; // o false
}

/* Funcio per donar alta un usuari
 * el paràmetre user equival a un xurro json.
 */
function addUser( user ){
  console.log(' afegir usuari al json del server');
  console.log(' retorna si o no en funció del èxit');
  return true;
}


function delUser( user ){
  console.log('busca ' + user)  ;
  console.log('i si existeix l\'elimina');
  return true;
}


var fs = require('fs');

function getUser( mail, pass, req, res ){
 
  // si existeix un usuari amb mail=x i pass = y
  fs.readFile('example_db_client.json', function(err, data) {
    res.writeHead(200, {'Content-Type': 'text/json'});
    res.write(data);
    return res.end();
  });
  // sino retorna 
  return null;  
}


function addUserCard( user, idCard ){
  console.log( 'si usuari i card és valida afegeix' );
  return;
}

/*
function delUserCard(user, idCard ){
}

// change address ---
*/
/* Funcions de l'administrador de la base de dades
 * 
 * function addProduct()
 * function delProduct()
 * function getProduct()
 * function isProduct()
 */


