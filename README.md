VISTA PREVIA DE HTML EN GITHUB
-------------------------------

Muchos repositorios de GitHub no utilizan GitHub Pages para renderizar esos archivos sin necesidad de clonar o descargar repositorios completos.

Si intentas abrir la versión en bruto de cualquier archivo HTML, CSS o JS directamente desde GitHub en un navegador web, lo único que verás es el código fuente. GitHub los obliga a utilizar el tipo de contenido "text/plain", por lo que no pueden ser interpretados.

## ¿COMO VER EL SITIO WEB?

- Método 1:

Abre el siguiente URL [Oliveer666.github.io](https://oliveer666.github.io/) y se mostrará una interfaz desplegando un menú de enlaces a los siguientes proyectos del repositorio.

- Método 2:

Para utilizarlo, simplemente agrega este fragmento a la URL de cualquier archivo HTML: **[https://htmlpreview.github.io/?](https://htmlpreview.github.io/?)**

Por ejemplo:

https://htmlpreview.github.io/?https://github.com/Oliveer666/Oliveer666.github.io/tree/main/..

Lo que hace es cargar HTML utilizando un proxy CORS, luego procesa todos los enlaces, marcos, scripts y estilos, y los carga usando un proxy CORS, de modo que puedan ser evaluados por el navegador.


### Créditos

Este método de vista previa de HTML en GitHub utiliza [htmlpreview.github.io](https://github.com/htmlpreview/htmlpreview.github.com), desarrollado por [Htmlpreview](https://github.com/htmlpreview).

Este proyecto utiliza [Bootstrap](https://getbootstrap.com/), un marco de trabajo de código abierto para el desarrollo de sitios web y aplicaciones web.
