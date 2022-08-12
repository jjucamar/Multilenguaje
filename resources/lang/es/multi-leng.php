<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        
    ],
       /*
    |--------------------------------------------------------------------------
    | Personalizados
    |--------------------------------------------------------------------------
    |
    |
    */
    'home' => 'Inicio',
    'Crew Cut' => 'Corte Especial',
    'Hair Cut' => 'Servicios',
    'Regular Hair Cut' => 'Corte Regular',
    'Shampoo + Cut' => 'Lavar y cortar',
    'Beard Trim with Razor' => 'Recorte de barba con navaja',
    'Hair Color' => 'Teñir',
    'About' => 'Acerca de ',
    'Contact' => 'Contactenos',
    'check in' => 'Registrarse',
    'log in' => 'Ingresar',
    'My data' => 'Mis datos',
    'Go out' => 'Salir',
    'Select how you want to enter' => 'Seleccione como desea entrar',
    'Secretary' => 'Secretaria',
    'Login' => 'Inicio de sesión',
    'Get into' => 'Ingresar al sistema',
    'Professional' => 'Padres/Madres',
    'Client' => 'Cliente',
    'Administrator' => 'Administrador',
    'David Nail' => 'JJUCAMAR',
    'Error with Email and/or Password' =>'Error con el Email y/o la Contraseña',
    'Hairdressing'=>'JJUCAMAR',
    'Manicure David' => 'JJUCAMAR SOFT',
    'Beginning' => 'Inicio',
    'Table' => 'Hijos',
    'Id' => 'Id',
    'Names and Surnames' => 'Nombres y Apellidos',
    'Identification Document'=>'Documento Personal',
    'Phone'=>'Telefono',
    'Actions'=> 'Acciones',

    /*   Index */
    'Call us 24/7' => 'Llámenos 24/7 nos pondremos en contacto con usted lo antes posible',

    /*  descuentos.blade.php */
   'Appoint a Haircut Today and' => 'Hagase un corte de pelo hoy y',
   'Get 25% discount' => 'Obtenga un 25% de descuento',
   'Make an Appointment' => 'Separe su cita',

    /*   Desgloce */
    'Our services'=> 'Nuestros servicios estan realizados por autenticos profesionales con su titulacion y mucha experiencia.',
   
    /*  Hijos */
   'Table Manager' => 'Gestor de Hijos',
   'Add the table' => 'Agregar Hijo',
   'List of children' => 'Listado de hijos',
   'Save' => 'Guardar',
   'Delete' => 'Eliminar',
   'Enter new table' => 'Ingrese nuevo hijo',
   'Enter Age' => 'Ingrese la edad',
   'Enter the Weight' => 'Ingrese el Peso',
   'enter the Height' => 'Ingrese la Altura',
   'Son the Name' => 'Nombre del Hijo',
  
   
     /*  Profesionales */
     'Professional Manager' => 'Gestion de Professionales',
     'New Professional' => 'Nuevo Profesional',
     'Select' =>  'Seleccionar...',
     'Feminine' => 'Femenino' ,
     'Male' => 'Masculino',
     'Names and Surnames' => 'Nombres y Apellidos',
     'Sex' => 'Sexo',
     'Email' => 'Correo Electrónico',
     'Password' => 'Contraseña',
     'Make' => 'Crear',
     'Cancel' => 'Cancelar',
     'The email already exists' => 'El Correo Electrónico yá existe',

     'Search' => 'Buscar',

   /*   Comidas  */

     'Food'=> 'Comidas',
     'Eat'=> 'Ingestas',
     'List of Children' => 'Listado de Hijos',
     'List of Meals' => 'Listado de Comidas',
     'Enter new Food' => 'Ingrese nueva Comida',
     'Add the Food' => 'Agregar Comida',
     'Show Meals' => 'Mostrar Comidas',
     'Food Manager' => 'Gestor de Comidas',
     'Enter the Food' => 'Entrar lo que comió',
     'Enter Intake' =>  'Ingresar Ingesta',
     'Enter Name Son' => 'Seleccione el Nombre del Hijo',
     'Quantity' => 'Cantidad',
     'Measure' => 'Medida',
     'Kind of food' => 'Tipo de Comida',
     'Breakfast' => 'Desayuno',
     'lunch snack' => 'Merienda de la Mañana',
     'lunch' => 'Comida',
     'Afternoon snack'=> 'Merienda de la Tarde',
     'Dinner' => 'Cena',
     'Extra' => 'Extra',
     'Date' => 'Fecha',
     'Image' => 'Imagen',
     'Upload Image' => 'Subir Imagen',
     'Submit' => 'Enviar',
     

     

];