## Propósito de la aplicación
Crear un sistema de gestión de incidencias en el que los usuarios puedan notificárselas a los administradores
y éstos puedan ir gestionándolas e ir asignándoles estados de forma secuencial hasta su resolución.

Los administradores también tendrán disponibles una serie de opciones en el panel de incidencias recibidas
para poder disparar una serie de acciones que causen su resolución.

Los administradores deben tener la capacidad de crear, eliminar y cambiar las contraseñas de los usuarios, esto último mediante que un usuario abra una incidencia para que se la cambien.

(resumen al aire porque sí)

## Vista general del código
### Clases disponibles:
Las clases que se han diseñado sólo a modo de conceptualización de los objetos con los que se trabaja.
No contienen más métodos que los getter y setter para sus atributos.

Las operaciones con los objetos que se creen con estas clases se realizan a través de las funciones del modelo.

#### Incidencia
Una incidencia es creada por un usuario determinado en un momento concreto informando generalmente de un problema con un determinado servidor.
Ese problema está asociado a la incidencia a modo de descripción.

Un administrador tendrá la potestad de asignarle la prioridad que le corresponda y, en su caso, cambiar su estado de resolución.

Una incidencia puede tener varios estados de resolución no es accesible a través de esta clase sino a través de una función del modelo:  `getEstadosIncidencia($idIncidencia)` .

##### Atributos de la clase Incidencia
- $id
- $idUsuario
- $prioridad
- $descripción
- $server

#### EstadoIncidencia
Una incidencia puede tener varios estados que se apilan conforme vaya evolucionando su resolución.
Estos estados se asignan en un momento concreto que se almacena como una fecha y hora concretas.

El acceso a estos estados de incidencia se hace a través de una función del modelo: `getEstadosIncidencia($idIncidencia)` .

##### Atributos de la clase EstadoIncidencia
- $idIncidencia
- $estado
- $timestampEstado

#### Usuario
Un usuario tiene tres campos únicos que lo identifican pero que son distintos entre sí.
- Su NIF, que no puede repetirse entre distintos usuarios
- Un nombre de usuario que elija o que el administrador le asigne
- Un identificador numérico que le asigna la base de datos al insertarlo.

A parte tiene otra serie de campos:
- Su email
- Su clave

##### Atributos de la clase Usuario
- $id
- $nif
- $usuario
- $email
- $clave

### Funciones del modelo:
#### getUsuarioLoginMedianteNifClave($nif,$clave):
Obtener un objeto Usuario a partir del nif y la clave

#### getUsuario($idUsuario)
Obtener un objeto Usuario a partir de su id.

#### getIncidenciasUsuario($idUsuario)
Obtener un array de objetos Incidencia a partir del id de un usuario.

#### getEstadosIncidencia($idIncidencia)
Obtener un objeto EstadoIncidencia a partir de una id de incidencia.

