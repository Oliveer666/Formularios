const defaultFile = 'img/PFP.png';
/*Al cancelar el IMG cambia a este por defecto*/

const file = document.getElementById('logo');
const img = document.getElementById('img');
/*LLama a los atributos*/

file.addEventListener( 'change', e => {
  if( e.target.files[0] ){
    const reader = new FileReader( );
    reader.onload = function( e ){
      img.src = e.target.result;
    }
    reader.readAsDataURL(e.target.files[0])
  }else{
    img.src = defaultFile;
  }
} );
/*Cambia a la imagen por defecto si se cancela el proceso*/