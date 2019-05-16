document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();
   // Leemos el archivo subido y se lo pasamos a nuestro fileReader 
    reader.onload = function(){
    preview = document.getElementById('preview'),
    image = document.createElement('img');
    image.style.height = "100px";
    image.style.width = "100px";

    image.src = reader.result;
    
    preview.innerHTML = '';
    preview.append(image);
  };
   reader.readAsDataURL(e.target.files[0]);
}