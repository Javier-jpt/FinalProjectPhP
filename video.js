var imagenes = [
    { id: 1, src: 'https://plus.unsplash.com/premium_photo-1668989820310-8e2e3684bdb4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80', animacion: 'animacion1.gif' },
    { id: 2, src: 'imagen2.jpg', animacion: 'animacion2.gif' },
    // Agrega aquí las demás imágenes
  ];
  
  var contenedor = document.querySelector('.contenedor');
  
  for (var i = 0; i < imagenes.length; i++) {
    var imagen = imagenes[i];
    var elementoImagen = document.createElement('img');
    elementoImagen.src = imagen.src;
    elementoImagen.id = 'imagen' + imagen.id;
    
    var elementoAnimacion = document.createElement('img');
    elementoAnimacion.src = imagen.animacion;
    elementoAnimacion.id = 'animacion' + imagen.id;
    elementoAnimacion.style.display = 'none';
    
    elementoImagen.addEventListener('mouseover', function() {
      var animacionId = this.id.replace('imagen', 'animacion');
      document.getElementById(animacionId).style.display = 'block';
    });
    
    elementoImagen.addEventListener('mouseout', function() {
      var animacionId = this.id.replace('imagen', 'animacion');
      document.getElementById(animacionId).style.display = 'none';
    });
    
    contenedor.appendChild(elementoImagen);
    contenedor.appendChild(elementoAnimacion);
  }
  