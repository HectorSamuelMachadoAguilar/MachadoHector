# Modelo de Caja
El modelo de cajas o *"box model"* es una característica importante debido que todo en HTML tiene una caja rectangular alrededor y condiciona el diseño de todas las páginas web.  

Las cajas rectangulares se crean automáticamente cada vez que se inserta una etiqueta y encierra los contenidos de ese elemento.  

Las cajas de las páginas no son visibles a simple vista debido que inicialmente no cuentan con un color de fondo ni un borde, pero CSS permite modificar todas sus características. Las cajas están formadas por seis partes, ordenadas de afuera, hacía adentro:

1. **Margin** (margen): El área transparente afuera del borde y que las separa de las demás cajas.
2. **Background-color** (color de fondo): El color que se le quiera dar al fondo de la caja.
3. **Background-image** (imagen de fondo): La imagen que se desea aplicar al fondo de la caja.
4. **Border** (borde): El borde envuleve el padding y el content.
5. **Padding** (relleno): El área alrededor del contenido.
6. **Content** (contenido): El contenido del cuadro, donde aparecen el texto y las imágenes.  

   
El relleno y el margen son transparentes, pero el relleno se muestra si el color o imagen de fondo están definidos y el margen muestra el color o imagen de fondo de su elemento padre.   
Si ningún elemento padre tiene definido un color o imagen de fondo, se muestra el color o imagen de fondo de la propia página.  
Si una caja define tanto un color como una imagen de fondo, la imagen tiene más prioridad, pero si la imagen de fondo no cubre totalmente la caja o si tiene zonas transparentes, también se visualiza el color de fondo.

## **Anchura y altura**

Las cajas tienen una propiedad llamada *width* mediante la que se controla la anchura y una llamada *height* con la que se controla la altura.  
Estas propiedades no admiten valores negativos y si se indican porcentajes, estas toman de referencia al elemento padre.   
El valor *inherit* indica que la altura o anchura del elemento se hereda de su elemento padre. El valor *auto* se utiliza si no se establece un valor para la altura o anchira e indica que el navegador debe calcular automáticamente los valores del elemento, teniendo en cuenta sus contenidos y el sitio disponible en la página.

## **Margen y relleno**
CSS usa 4 propiedades para controlar cada uno de los márgenes horizontales y verticales del elemento, y cada propiedad establece una separación entre el borde lateral de la caja y el resto de las cajas adyacentes.  
Las unidades que se utilizan para indicar márgenes son los píxeles para mayor precisión, los *em* para hacer diseños que mantengan proporciones y los porcentajes para diseños líquidos o fluidos.  

La propiedad que permite definir los cuatro márgenes se denomina *margin* y admite entre 1 y 4 valores con la siguiente definición:

* Si solo se indica un valor, todos los márgenes tienen ese valor.
* Si se indican dos valores, el primero se asigna a lps márgenes verticales y el segundo se asigna a los márgenes horizontales.
* Si se indican tres valores, el primero se asigna al margen superior, el tercero se asigna al margen inferior y el segundo valor se asigna los márgenes horizontales
* Si se indican los cuatro valores, el orden de asignación es: margen superior, margen derecho, margen inferior y margen izquierdo.

Por otro lado, CSS define 4 propiedades para controlar cada uno de los espacios de relleno y se llama *padding*, admite entre 1 y 4 valores al igual que *margin*.

## **Bordes**
CSS permite modificar el aspecto los cuatro bordes de la caja. Para cada borde se puede establecer su anchura o grosor, su color y su estilo, por lo que en total CSS define 20 propiedades relacionadas con los bordes.

La anchura se define con las siguientes 4 propiedades: **border-top-width, border-right-width, border-bottom-width, border-left-width**.  
La anchura de los bordes se indica mediante una medida o mediante las palabras clave *thin* (borde delgado), *medium* (borde normal) y *thick* (borde ancho).

Para establecer la anchura de todos los bordes al mismo tiempo se utiliza una propiedad llamada *border-width*. Esta te permite indicar entre uno y cuatro valores: 

* Si se indica un solo valor, se aplica a los cuatro bordes. 
* Si se indican dos valores, el primero se aplica a los bordes verticales y el segundo valor se aplica a los bordes horizontales.
* Si se indican tres valores, el primero se aplica al borde superior, el segundo se aplica a los bordes horizontales y el tercer valor se aplica al borde inferior. 
* Si se indican los cuatro valores, el orden de aplicación es superior, derecho, inferior e izquierdo.

Se le puede dar colores a cada uno de los bordes usando las siguientes propiedades: **border-top-color, border-right-color, border-bottom-color, border-left-color**

Para establecer el color de todos los bordes al mismo tiempo se utiliza una propiedad llamada *border-color*. Esta te permite indicar entre uno y cuatro valores, al igual que la propiedad *border-width*

Por último, CSS permite establecer un estilo a cada borde a través de las siguientes propiedades: **border-top-style, border-right-style, border-bottom-style, border-left-style**. Y puede tomar los siguientes aspectos:
* **None**: Indica que no hay estilo
* **Hidden**: Sí hay estilo, pero se encuenta oculto
* **Dotted**: El borde consiste de puntos
* **Dashed**: Consiste en líneas salteadas
* **Solid**: Tiene un borde sólido
* **Double**: Es un borde de doble línea
* **Groove**: El borde tiene apariencia de ranura
* **Ridge**: Apariencia de cresta
* **Insert**: Borde sólido en el margen superior e izquierdo y Borde tenue en el margen inferior y derecho
* **Outset**: Lo opuesto al Insert. Borde sólido en el margen inferior y derecho, borde tenue en margen superior e izquierdo

Para establecer de los estilos de todos los bordes de una caja al mismo tiempo, se utiliza la propiedad *border-style*. Como es habitual, la propiedad permite indicar de uno a cuatro valores diferentes y las reglas de aplicación son las habituales.

## **Fondos**
El fondo puede ser un color simple o una imagen. El fondo solamente se visualiza en el área ocupada por el contenido y su relleno, ya que el color de los bordes se controla directamente desde los bordes y las zonas de los márgenes siempre son transparentes.  
CSS define cinco propiedades para establecer el fondo de cada elemento: *background-color, background-image, background-repeat, background-attachment, background-position* y otra propiedad general *background*.

* **background-color**: Permite mostrar un color de fondo sólido en la caja de un elemento. Esta propiedad no permite crear degradados ni ningún otro efecto avanzado.
* **background-image**: Para crear efectos gráficos avanzados y permite mostrar una imagen como fondo de la caja de cualquier elemento.
* **background-repeat**: La propiedad permite controlar la forma de repetición de las imágenes de fondo.
* **background-position**: Permite controlar la posición de la imagen dentro del fondo del elemento.
* **background-attachment**: Se puede indicar que el fondo permanezca fijo cuando la ventana del navegador se desplaza mediante las barras de scroll. Se trata de un comportamiento que en general no es deseable y que algunos navegadores no soportan correctamente.
* **background**: Indica todas las propiedades de los colores e imágenes de fondo de forma directa.