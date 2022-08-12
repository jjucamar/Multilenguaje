<p align="center">
<img width="270" alt="image" src="https://user-images.githubusercontent.com/46644645/184310166-1a2638e7-c751-4f55-9d80-6f95f6d402fe.png">
</p>


## Definir lenguajes a utlizar

Primero debemos definir, que lenguajes vamos a utlizar para nuestra aplicación. Aunque regularmente suele ser español e inglés. En este ejemplo crearemos 4 traducciones: En Euskeras, Ingles, Español e Italiano.

## Creando directorios para lenguajes

Ahora crearemos nuestro directorio de traducciones, para ello crearemos 3 carpetas en nuestro directorio /resources/lang/ (Si requieres más lenguajes deberás crear nuevas carpetas de los lenguajes a utlizar)
 

La primera se llamará "en", la segunda "es"  la tercera "ita" y la cuarta "eus" . Es probable que la carpeta "en" y "es" ya se encuentren creadas, por lo que solo debemos crear la carpeta "ita" y la carpeta "eus".
 

### Creando traducciones para Euskeras

 Crearemos una copia del el archivo /resources/lang/es/multi-leng.php en /resources/lang/eus/. Nuestro nuevo archivo conservará las mismas "alias" y el mismo nombre, sólo cambiará el valor de la traducción a esukeras:

<img width="540" alt="image" src="https://user-images.githubusercontent.com/46644645/184312284-c04cd66e-4216-473c-a8a4-9457455c450b.png">



### Creando traducciones para español

Crearemos un nuevo archivo en /resources/lang/es el cuál llamaremos multi-leng.php Este archivo contendrá todas las traducciones en el lenguaje español. Cada traducción está asociada a un "alias" por el cuál será llamado en nuestras blades.

Recomendación: Los nombres de los archivos de traducción deben corresponder a un módulo/vista especifica , esto para no perder el orden de nuestro diccionario y no llenar un solo archivo con todas las traducciones.

Nuestro archivo multi-leng.php queda de la siguiente manera: 
 

<img width="757" alt="image" src="https://user-images.githubusercontent.com/46644645/184306676-f253f642-df4d-4962-befe-9e0bc47d8f9a.png">

### Creando traducciones para inglés

Crearemos una copia del el archivo /resources/lang/es/multi-leng.php en /resources/lang/en/. Nuestro nuevo archivo conservará las mismas "alias" y el mismo nombre, sólo cambiará el valor de la traducción a Inglés:

<img width="756" alt="image" src="https://user-images.githubusercontent.com/46644645/184306955-3b7d1f32-65dc-4c66-a498-e4f9bfd1347c.png">


### Creando traducciones para italiano

 Crearemos una copia del el archivo /resources/lang/es/multi-leng.php en /resources/lang/ita/. Nuestro nuevo archivo conservará las mismas "alias" y el mismo nombre, sólo cambiará el valor de la traducción a italiano:

<img width="756" alt="image" src="https://user-images.githubusercontent.com/46644645/184307214-a5e2a263-e169-45c3-a830-0ee20111b178.png">



## Mostrando traducciones en nuestra blade

Ahora que tenemos definidos nuestros lenguajes podemos mostrarlos, el lenguaje predeterminado depende de la confuguración establecida en app/config/app.php. (Este valor también puede ser cambiado en tiempo de ejecución).


'locale' => 'es',

<img width="744" alt="image" src="https://user-images.githubusercontent.com/46644645/184307397-23d94456-5803-41b7-bbee-1bab5a5cc759.png">


Dicho esto, la llamada en nuestra blade(home.blade.php) se hace con una función llamada trans('') esta función recibe algunos parametros: 

trans(['archivo_de_traduccion'].['alias'])

<img width="320" alt="image" src="https://user-images.githubusercontent.com/46644645/184307583-4799e3c3-4d22-4587-b071-151314bf5c8c.png">


Por lo tanto nuestra llamada queda de la siguiente forma:


  <a href="#" class="underline text-gray-900 dark:text-white">
      {{ trans('multi-leng.Select how you want to enter') }}
  </a>


<img width="530" alt="image" src="https://user-images.githubusercontent.com/46644645/184307866-214f18ed-3997-401b-8e1c-34da1fcf52a2.png">


## Cambiando de idiomas en tiempo de ejecución.

Cuando un usuario clickea sobre nuestro menú de idiomas, es necesario que nuestra web se traduzca de inmediatamente en el lenguaje seleccionado, por lo que debemos cambiar el idioma en tiempo de ejecución. Para ello Laravel cuenta con una función:

App::setLocale('es');

<img width="198" alt="image" src="https://user-images.githubusercontent.com/46644645/184308238-2e14657e-2dfe-40e2-af9f-d9e27e10c6c4.png">


Esta función recibe como parametro el lenguaje el cual se usará para nuestra aplicación (eus,es,en,ita). 
Lo que haremos ahora es cuando se seleccione un idioma, guardaremos el lenguaje en una variable de sesión y mediante un middleware verificaremos en que lenguaje se encuentra nuestra aplicación y cambiarla en tiempo de ejecución en caso de que sea requerido.
Nuestra ruta en /routes/web.php para el cambio de lenguaje quedaría de la siguiente forma: 


Route::get('/lang/{language}', function ($language) {
    Session::put('language',$language);
    return redirect()->back();
})->name('language');

<img width="741" alt="image" src="https://user-images.githubusercontent.com/46644645/184308387-df19a5db-4492-4c1b-a89e-634afa929716.png">




En home.blade.php la llamada a esta ruta quedaría de la siguiente manera: 

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <a class="nav-link" href="{{route('language','es')}}">
                                <img src="images/banderas/espana_icono.png" alt="Castellano" width="25px" height="20px"/>
                            </a>
                             
                            <a class="nav-link" href="{{route('language','en')}}">
                                <img src="images/banderas/reino-unido.png" alt="Ingles" width="25px" height="20px"/>
                            </a>

                            <a class="nav-link" href="{{route('language','eus')}}">
                                <img src="images/banderas/pais-vasco.png" alt="Euskera" width="25px" height="20px"/>
                            </a>

                            <a class="nav-link" href="{{route('language','it')}}">
                                <img src="images/banderas/italia.png" alt="Italiano" width="25px" height="20px"/>
                            </a>
                        </div>


<img width="862" alt="image" src="https://user-images.githubusercontent.com/46644645/184308586-deb8222e-2d2f-480c-9be2-d0ea11a843b5.png">

## Middleware para detectar idioma y traducir automaticamente

Ahora crearemos un middleware para detectar el lenguaje actual y verificar si este ha cambiado. Escribimos en nuestra consola:

php artisan make:middleware CheckLanguage

<img width="396" alt="image" src="https://user-images.githubusercontent.com/46644645/184308762-343fd875-865e-41ba-8f77-87c0f117c650.png">


### Registraremos nuestro nuevo middleware en /app/Http/kernel.php a $middlewareGroups


\App\Http\Middleware\CheckLanguage::class,

<img width="420" alt="image" src="https://user-images.githubusercontent.com/46644645/184308862-8c3bf04c-0808-47c4-a307-2dc72a04cf95.png">

### y en $routeMiddleware:


'translate' => \App\Http\Middleware\CheckLanguage::class,

<img width="626" alt="image" src="https://user-images.githubusercontent.com/46644645/184308980-0c1ea4e2-5fb0-4316-822d-b999e488304f.png">


### La función handle() de nuestro nuevo middleware (/app/Http/Middleware/CheckLanguage.php) contendrá:


public function handle($request, Closure $next)
{
    if (Session::has('language')) {
        if (App::getLocale()!= Session::get('language')) {
         App::setLocale(Session::get('language'));
        }
      }else {
         Session::put('language', 'es');
         App::setLocale('es');
     }
      return $next($request);
}

<img width="741" alt="image" src="https://user-images.githubusercontent.com/46644645/184309160-7d453bfd-92a2-41a1-bb7e-54ff8106603e.png">


No olvides agregar:


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

<img width="741" alt="image" src="https://user-images.githubusercontent.com/46644645/184309308-ddb1e2ea-6d2f-47c0-9514-7c8b7471b1dd.png">



Y todas nuestras rutas deberán contener nuestro middleware, para que esta pueda ser traducida automaticamente:

Route::get('/', function () {
    return view('home');
})->middleware('translate');

<img width="742" alt="image" src="https://user-images.githubusercontent.com/46644645/184309408-afa959b2-0f40-41db-a8e5-c9485ff0c7bd.png">



y ¡Listo!


