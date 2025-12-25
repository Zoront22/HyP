# HyP — Documentación

## Resumen del proyecto
HyP es una página web construida con Laravel donde el contenido (textos y muchas imágenes) se almacena en la base de datos y en el almacenamiento (`storage`) para permitir una personalización sencilla: para cambiar textos o imágenes basta editar los registros correspondientes en la base de datos (o usar una interfaz administrativa que exponga esos CRUDs).

El repositorio contiene:
- Migraciones para tablas de textos (ej. `texts_home`, `texts_about`) y para imágenes (`images`, `image_sliders`).
- Vistas Blade que cargan textos y rutas hacia imágenes almacenadas en `storage`.
- Controllers y rutas que proveen páginas públicas (`/`, `/about`, `/contact`) y recursos protegidos con `auth` para administrar textos/imagenes (`/texts`, `/images`, etc.).

Ejemplos de archivos revisados:
- `database/migrations/2024_10_15_054202_create_texts_about.php`
- `database/migrations/2024_10_14_195842_create_texts_home_table.php`
- `database/migrations/2024_10_13_021525_create_images_table.php`
- `resources/views/front/index.blade.php`
- `resources/views/front/about.blade.php`
- `routes/web.php`
- `resources/views/layouts/app.blade.php`
- `public/theme/*.html` (plantillas de tema estático incluidas)

---

## Requisitos para ejecutar el proyecto (entorno de desarrollo)
- PHP >= 8.x (según la versión de Laravel usada)
- Composer
- Node.js + npm (para assets con Vite)
- Base de datos (MySQL, MariaDB, SQLite o PostgreSQL; configurar en `.env`)
- Extensiones PHP: pdo, mbstring, openssl, tokenizer, xml, ctype, json, fileinfo, gd o imagick (recomendado para manipular imágenes)

---

## Pasos básicos de instalación / puesta en marcha

1. Clonar el repositorio:
   git clone https://github.com/Zoront22/HyP.git
   cd HyP

2. Instalar dependencias PHP:
   composer install

3. Instalar dependencias JS y construir assets:
   npm install
   npm run dev        # desarrollo
   npm run build      # producción

4. Configurar archivo .env:
   cp .env.example .env
   - Configura DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD
   - Configura MAIL_* si vas a usar envío de correo

5. Generar la clave de la aplicación:
   php artisan key:generate

6. Ejecutar migraciones:
   php artisan migrate

7. Crear enlace público para storage (es necesario si las vistas usan `storage`):
   php artisan storage:link

8. Levantar el servidor local (opcional):
   php artisan serve

---

## Estructura y modelo de datos (resumen basado en migraciones)
Tablas detectadas por migraciones revisadas:

- texts_home
  - id, title, subtitle (added later), content, others, timestamps
  - Usada para textos que aparecen en la página de inicio (`front/index.blade.php`).

- texts_about
  - id, title, subtitle, content, others, timestamps
  - Usada para la página "About" (`front/about.blade.php`).

- images
  - id, filename, (más tarde) location, path, timestamps
  - Tabla genérica para imágenes administrables.

- image_sliders
  - (existente) con columnas `location` y `path` añadidas después
  - Usada para sliders / galerías

Notas:
- Muchas vistas hacen `@foreach ($texts as $text)` y luego comprueban `@if ($text->id === <n>)`. Es decir, la plantilla depende de ids concretos para colocar contenido en áreas específicas.
- Las imágenes se muestran en las vistas con expresiones como:
  <img src="{{ asset('storage/' . str_replace('public/', '', $slider->path)) }}" ...>
  Esto significa que en DB el campo `path` apunta a algo como `public/imagenes/...` y se sirve vía `storage` link.

---

## Cómo editar los textos (3 formas)

1) Directamente en la base de datos (ejemplo SQL)
   - Cambiar el título en `texts_home` con id 10:
     UPDATE texts_home SET title = 'Nuevo título' WHERE id = 10;

2) Con Tinker (Eloquent)
   - Abrir Tinker:
     php artisan tinker
   - Actualizar:
     DB::table('texts_home')->where('id', 10)->update(['title' => 'Nuevo título', 'content' => 'Nuevo contenido']);
   - O usando modelos (si existen modelos correspondientes):
     $t = \App\Models\TextHome::find(10); $t->title = 'Nuevo'; $t->save();

3) Crear/Usar interfaz administrativa
   - Hay rutas `Route::resource('/texts', TextHomeController::class);` protegidas por `auth`.
   - Inicia sesión en la aplicación admin y usa las pantallas de CRUD si ya existen vistas/controles para eso.

Recomendación: al ver que las vistas buscan ids numéricos, toma nota de qué id corresponde a cada bloque. Puedes crear una tabla de referencia o mejor aún, añadir una columna `key` (slug) en la tabla para identificar semánticamente cada texto.

---

## Cómo actualizar/añadir imágenes

1) Subir el archivo a `storage/app/public/...` (por ejemplo `storage/app/public/sliders/imagen1.jpg`)
   - Si subes manualmente por FTP/Git, asegúrate de que `php artisan storage:link` exista para exponer `public/storage`.

2) Insertar registro en la tabla `image_sliders` o `images`:
   INSERT INTO image_sliders (filename, location, path, created_at, updated_at) VALUES ('imagen1.jpg', 'slider', 'public/sliders/imagen1.jpg', NOW(), NOW());

3) Ejemplo con Tinker (Eloquent):
   php artisan tinker
   DB::table('image_sliders')->insert([
     'filename' => 'imagen1.jpg',
     'location' => 'slider',
     'path' => 'public/sliders/imagen1.jpg',
     'created_at' => now(),
     'updated_at' => now()
   ]);

4) Verificar en la vista:
   Las plantillas esperan `asset('storage/' . str_replace('public/', '', $slider->path))` por lo que `path` debería contener `public/...` y la imagen será accesible por: `/storage/sliders/imagen1.jpg`

Consejo: usar un uploader que guarde la imagen y cree el registro DB automáticamente (p. ej. un formulario con controlador `ImageController`).

---

## Rutas importantes (extracto de `routes/web.php`)
- Ruta pública:
  - GET `/` -> HomeController@index
  - GET `/about` -> AboutController@index
  - GET `/contact` -> ContactController@index
  - POST `/send` -> HyPMail::sendEmail (correo)
- Autenticación:
  - Auth::routes()
- Rutas protegidas (necesitan login):
  - resource `/texts` -> TextHomeController
  - resource `/texts/about` -> TextAboutController
  - resource `/texts/contact` -> TextContactController
  - resource `/images` -> ImageController
  - resource `/images/sliders` -> ImageSliderController
  (Las rutas exactas dependen del código de controladores; revisa `routes/web.php` completo)

---

## Cómo comprende la vista el contenido (ejemplo práctico)
En `resources/views/front/index.blade.php` y `resources/views/front/about.blade.php` las plantillas iteren sobre `$texts` o `$sliders`. Muchas secciones seleccionan exactamente el registro por su `id`, p. ej.:

@foreach ($texts as $text)
  @if ($text->id === 10)
    <h2 class="title">{{ $text->title }}</h2>
    <h4 class="title">{{ $text->subtitle }}</h4>
    <p>{{ $text->content }}</p>
  @endif
@endforeach

Por eso, para saber qué cambiar debes:
- Revisar primero qué `id` usan las vistas para cada bloque (ver los `@if ($text->id === N)`).
- Editar el registro con ese id en la tabla correspondiente (`texts_home` o `texts_about`).

---

## Ejemplos prácticos: comandos y consultas

- Crear el storage link:
  php artisan storage:link

- Ejecutar migraciones:
  php artisan migrate

- Actualizar un texto con SQL:
  UPDATE texts_home SET subtitle = 'Subtítulo actualizado', content = 'Contenido modificado' WHERE id = 10;

- Insertar una imagen (SQL):
  INSERT INTO images (filename, location, path, created_at, updated_at) VALUES ('foto.jpg','home','public/img/foto.jpg', NOW(), NOW());

- Eloquent en Tinker:
  php artisan tinker
  >>> \DB::table('texts_home')->where('id',10)->update(['title'=>'Nuevo título']);
  >>> \DB::table('image_sliders')->insert(['filename'=>'s1.jpg','location'=>'slider','path'=>'public/sliders/s1.jpg','created_at'=>now(),'updated_at'=>now()]);

---

## Recomendaciones y buenas prácticas para futuras actualizaciones

1. Evitar depender de ids numéricos en las vistas
   - Añadir una columna `key` o `slug` en las tablas de textos y usarla para buscar (más robusto y legible).
   - Ejemplo de migración para agregar `key`:
     php artisan make:migration add_key_to_texts_home --table=texts_home
     // en la migración: $table->string('key')->nullable()->unique();

2. Crear una interfaz administrativa usable
   - Actualmente hay rutas `resource` protegidas por `auth`. Implementa vistas CRUD completas con validación y manejo de archivos (uploader que guarde en `storage` y cree el registro DB).
   - Considera usar paquetes como Filament o Laravel Nova para acelerar.

3. Manejo de imágenes
   - Usar Intervention/Image para redimensionar/optimizar al subir.
   - Validar tamaño y tipo en los controladores.
   - Guardar `path` con formato consistente (por ejemplo siempre `public/uploads/...`).

4. Internacionalización
   - Si vas a soportar varios idiomas, no mezcles traducción con contenido editable en la base de datos; agrega tablas por idioma o campos `locale`.

5. Versionado de contenido
   - Si necesitas auditar cambios, usa un sistema de versionado como `spatie/laravel-activitylog` o una tabla de historial.

6. Tests y CI
   - Añadir tests básicos (Feature/Unit) que validen que las páginas principales muestran contenido esperado.
   - Añadir pipeline (GitHub Actions) que ejecute composer test/linters.

7. Seguridad
   - Escape siempre datos en las vistas con `{{ }}` (Blade lo hace por defecto).
   - Validar inputs de usuarios y archivos subidos.
   - Controlar acceso a las rutas protegidas con middleware `auth` y roles si es necesario.

---

## Cómo extender la funcionalidad (ideas y pasos)
- Reemplazar las condiciones por id en Blade por consultas por `key`:
  - Crear migración para `key` (ver arriba).
  - Actualizar el código que recupera textos (p. ej. en HomeController) para traer por key:
    $hero = TextHome::where('key','hero')->first();

- Crear un panel de administración con subida automática:
  - Crear formulario con `<input type="file">`.
  - En controlador validar la imagen, guardarla con `$path = $request->file('image')->store('public/uploads');`
  - Insertar registro en DB: `Image::create(['filename' => $fileName, 'path' => $path, 'location' => 'hero']);`

- Añadir caché para consultas que no cambian frecuentemente:
  - Usar `Cache::remember('texts_home', 60, fn() => TextHome::all());`

---

## Problemas comunes y soluciones
- Imagen no se muestra:
  - ¿Ejecutaste `php artisan storage:link`? ¿`path` en BD empieza con `public/` y el archivo existe en `storage/app/public/...`?

- Cambios no se ven:
  - Asegúrate de que la consulta en el controlador realmente lee la tabla correcta y que las vistas usan esos datos.
  - Verifica cache de vistas/config: `php artisan view:clear`, `php artisan config:clear`.

- Migraciones fallan:
  - Revisa la versión de MySQL y longitudes de campos (`string('content', 1500)` puede no ser apropiado); usa `text()` si necesitas más contenido.

---

## Sugerencia de checklist para desplegar cambios al sitio en producción
1. Actualizar código en branch feature y probar localmente.
2. Ejecutar `composer install --no-dev` y `npm run build`.
3. Ejecutar migraciones en staging/production: `php artisan migrate --force`
4. Ejecutar `php artisan storage:link` si es nuevo servidor.
5. Volcar assets/optimizar config: `php artisan config:cache`, `php artisan route:cache`, `php artisan view:cache`.
6. Revisar permisos de `storage`/`bootstrap/cache` en el servidor.

---

## Resumen final y siguientes pasos recomendados
- El proyecto usa la base de datos como fuente principal de contenidos, con vistas que seleccionan registros por id. Esto facilita cambios rápidos en contenido si editas la base de datos.
- Recomendación inmediata: documentar qué `id` corresponde a cada bloque (o mejor, migrar a `key/slug` para mayor claridad).
- Para mejoras: añadir interfaz administrativa, validación de imágenes, optimización y migrar a identificadores semánticos.

Si quieres, puedo:
- Generar una tabla de correspondencia (CSV/Markdown) con los ids usados en `resources/views/front/*.blade.php` y qué texto/imágen representan (haría un análisis automático de todos los `@if ($text->id === N)` en las vistas).
- Proponer la migración para añadir `key`/`slug` y un script para rellenar `key` basados en el id actual.
- Crear ejemplos de controladores y formularios de upload para que subas/gestionas imágenes desde el panel admin.

¿Qué prefieres que haga ahora? Puedo generar la tabla de correspondencia de IDs -> secciones, o un PR/patch con una migración sugerida. 
