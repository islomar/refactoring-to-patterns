# Refactoring to Patterns
Exercises from the "Refactoring to patterns" course by Xavi Ghost (@XaV1uzz).

GitHub:   https://github.com/curso-refactoring

Course website:
* (First edition - 2015)[http://content.geekshubsacademy.com/courses/GeeksHubs/ed1/2015-refactoring-patrones/]
* (Second edition - 2016)[http://content.geekshubsacademy.com/courses/GeeksHubsAcademy/2016-REFACTORING/2016_T1/courseware/eb61ecc796be47fda8334409f644e920/a31e0150e4f14576bcc65d123f6f4867/]

Chats:
* https://noysi.com/a/#/teams/geekshubs/channels/general/chat
* https://www.flowdock.com/app/xavier-gost/main

##Sesión 1: Mecánicas y Open SCAD
* **IDE:** http://www.openscad.org/
* **Original Source code:** https://github.com/TomHodson/Raspberry-Pi-OpenSCAD-Model
* **Xavi&Repli solution:**    https://github.com/curso-refactoring/Raspberry-Pi-OpenSCAD-Model
* **CheatSheet:** http://www.openscad.org/cheatsheet/

* Pasos dados_
  * Eliminado comentario en cabecera sobre unidades
  * Constantes en mayúsculas. 
  * Eliminados los comentarios sobre el tipo de módulo, incluído en el nombre de las propias funciones.
  * Extraemos offset y dimensions para pasarlo como parámetros.
  * Fuera magic numbers: extrae todo a variables/constantes dentro del método.

* Comentarios:
  * No estoy de acuerdo con eliminar la unidad (milímetros), la añadiría a las constantes como sufijo (e.g. "_IN_MM")
  * Sesión 1 (OpenSCAD), vídeo 2, minuto 56: radius queda "flotando" a lo largo del módulo audio_jack(), cuando en realidad solo pertenece al conector. Yo haría algo similar a lo que ya se hizo anteriormente en XXX, sacando todo el código del conector a un módulo aparte, lo cual nos permite llevarnos varias variables y constantes y así descargar un poco el módulo audio_jack()
  * Se han declarado dos constantes BLUE.
  * FINE >> MHOLE_FINE
  * El IDE OpenSCAD sí tiene UNDO.
  * Eliminadas semánticas de leds (e.g. power).
  * led_group(offset_x, 2); >> en lugar de un magic number, usar una variable "number_of_leds" o algo así.

Refactors de esta primera sesión: https://fd-files-production.s3.amazonaws.com/153194/nfXbHZE0z9K7lRiR3JNqBw?X-Amz-Expires=300&X-Amz-Date=20160304T221000Z&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIA2QBI5WP5HA3ZEA/20160304/us-east-1/s3/aws4_request&X-Amz-SignedHeaders=host&X-Amz-Signature=27b1b18cfa66abf25de5ab3dabddb955b26b958ddc31b31970f52615af7a6471



* Exercise:
  * Buscar código OpenSCAD en GitHub, forkear y refactorizar.


##Sesión 2: de procedural a objetos
* Código: 
  * https://github.com/wes/phpimageresize
  * https://github.com/curso-refactoring/phpimageresize

* PHP installation: https://lastzero.net/2015/10/howto-install-php-5-6-and-phpunit-5-0-on-mac-os-x/

`$ phpunit test`

##Bookmark
Session 2 > 15:00


##Links de interés:
* https://refactoring.guru/
* https://sourcemaking.com/refactoring/simplifying-conditional-expressions
* Martin Fowler: (Workflows of Refactoring)[https://www.youtube.com/watch?v=vqEg37e4Mkw]


