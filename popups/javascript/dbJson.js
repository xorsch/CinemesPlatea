
// https://www.w3schools.com/jsref/jsref_push.asp


/* Caldria que fos d'un consulta al server, i aquest entregui el json 
 * per fer això cal configurar el server per retornar un fitxer amb
 * una forma d'acord al que se li demani.
 *
 * Per ara es un array (myJson)
 * */
function importdB(){
      const myJSON = '{"users":[{"id":"id7","username":"stupiduser","email": "estupid@artix.org","pssw": "1234"},{"id":"id8","username":"monica","email": "levinsky@girlsfrom.usa","pssw": "1234"},{"id":"id1","username":"userB","email": "email2@artix.org","pssw": "1234"},{"id":"id2","username":"userC","email": "email3@artix.org","pssw": "1234"}]}';

      return JSON.parse(myJSON);
}


function userAdd( userAppend, database ){

  let nUsers = database.users.length;

  database.users.push( userAppend  );
  database.users[ nUsers ] = JSON.parse( userAppend );
}


function userExist( user, pass ){

  for ( let i = 0; i < jObj.users.length; i++ ) {
    if( jObj.users[i].username == user && jObj.users[i].pssw == pass ){       
      return true;
    }
  }
  return false;
}

/* */

const jObj = importdB();
const user = 'monica';
const pssw = '1234';

// comproba que existeix un usuari
if( userExist( user,pssw ) ){
   document.getElementById("demo").innerHTML = user + " " + pssw + "<br>" + "Access Granted";
}
else {
  document.getElementById("demo").innerHTML = "Access Denied";
}

// Afegir un usuari
const newUser= '{"id":"id3","username":"newUser","email": "new@tix.org","pssw": "1234"}';
userAdd( newUser, jObj );


