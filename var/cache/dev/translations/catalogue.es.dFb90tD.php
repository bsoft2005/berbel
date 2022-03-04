<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini o la carpeta configurada no existe.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This value should be a multiple of {{ compared_value }}.' => 'Este valor debería ser múltiplo de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Este Código de Identificación Bancaria (BIC) no está asociado con el IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Este valor debería ser un JSON válido.',
    'This collection should contain only unique elements.' => 'Esta colección debería tener exclusivamente elementos únicos.',
    'This value should be positive.' => 'Este valor debería ser positivo.',
    'This value should be either positive or zero.' => 'Este valor debería ser positivo o igual a cero.',
    'This value should be negative.' => 'Este valor debería ser negativo.',
    'This value should be either negative or zero.' => 'Este valor debería ser negativo o igual a cero.',
    'This value is not a valid timezone.' => 'Este valor no es una zona horaria válida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Esta contraseña no se puede utilizar porque está incluida en un listado de contraseñas públicas obtenido gracias a fallos de seguridad de otros sitios y aplicaciones. Por favor utilice otra contraseña.',
    'This value should be between {{ min }} and {{ max }}.' => 'Este valor debería estar entre {{ min }} y {{ max }}.',
    'This value is not a valid hostname.' => 'Este valor no es un nombre de host válido.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El número de elementos en esta colección debería ser múltiplo de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Este valor debería satisfacer al menos una de las siguientes restricciones:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada elemento de esta colección debería satisfacer su propio conjunto de restricciones.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Este valor no es un número de identificación internacional de valores (ISIN) válido.',
    'This value should be a valid expression.' => 'Este valor debería ser una expresión válida.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'This value is not a valid HTML5 color.' => 'Este valor no es un color HTML5 válido.',
    'Please enter a valid birthdate.' => 'Por favor, ingrese una fecha de cumpleaños válida.',
    'The selected choice is invalid.' => 'La opción seleccionada no es válida.',
    'The collection is invalid.' => 'La colección no es válida.',
    'Please select a valid color.' => 'Por favor, seleccione un color válido.',
    'Please select a valid country.' => 'Por favor, seleccione un país válido.',
    'Please select a valid currency.' => 'Por favor, seleccione una moneda válida.',
    'Please choose a valid date interval.' => 'Por favor, elija un intervalo de fechas válido.',
    'Please enter a valid date and time.' => 'Por favor, ingrese una fecha y hora válidas.',
    'Please enter a valid date.' => 'Por favor, ingrese una fecha valida.',
    'Please select a valid file.' => 'Por favor, seleccione un archivo válido.',
    'The hidden field is invalid.' => 'El campo oculto no es válido.',
    'Please enter an integer.' => 'Por favor, ingrese un número entero.',
    'Please select a valid language.' => 'Por favor, seleccione un idioma válido.',
    'Please select a valid locale.' => 'Por favor, seleccione una configuración regional válida.',
    'Please enter a valid money amount.' => 'Por favor, ingrese una cantidad de dinero válida.',
    'Please enter a number.' => 'Por favor, ingrese un número.',
    'The password is invalid.' => 'La contraseña no es válida.',
    'Please enter a percentage value.' => 'Por favor, ingrese un valor porcentual.',
    'The values do not match.' => 'Los valores no coinciden.',
    'Please enter a valid time.' => 'Por favor, ingrese una hora válida.',
    'Please select a valid timezone.' => 'Por favor, seleccione una zona horaria válida.',
    'Please enter a valid URL.' => 'Por favor, ingrese una URL válida.',
    'Please enter a valid search term.' => 'Por favor, ingrese un término de búsqueda válido.',
    'Please provide a valid phone number.' => 'Por favor, proporcione un número de teléfono válido.',
    'The checkbox has an invalid value.' => 'La casilla de verificación tiene un valor inválido.',
    'Please enter a valid email address.' => 'Por favor, ingrese una dirección de correo electrónico válida.',
    'Please select a valid option.' => 'Por favor, seleccione una opción válida.',
    'Please select a valid range.' => 'Por favor, seleccione un rango válido.',
    'Please enter a valid week.' => 'Por favor, ingrese una semana válida.',
    'custom.validator.empty_value' => 'Este valor no debería estar vacío.',
    'custom.validator.start_date_ets' => 'Esta fecha debe ser menor que ETS',
    'custom.validator.start_date_ats' => 'Esta fecha debe ser menor que ATS',
    'custom.validator.exchange_rate_currencies_equal' => 'Las fechas no pueden ser iguales',
    'custom.password.provide_current_password' => 'Debe definir la clave actual',
    'custom.password.provide_new_password' => 'Debe definir la nueva clave',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
    'Too many failed login attempts, please try again later.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo más tarde.',
    'Invalid or expired login link.' => 'Enlace de inicio de sesión inválido o expirado.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minuto.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Demasiados intentos fallidos de inicio de sesión, inténtelo de nuevo en %minutes% minutos.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
    'filter_searchword' => 'Buscar...',
  ),
  'email' => 
  array (
    'registration.message.subject' => 'Registración para Gruas Berbel Partes Diarios',
    'registration.message.welcome' => 'Bienvenido a',
    'registration.message.explanation' => 'Si recibe este correo es porque Gruas Berbel ha registrado este correo para <strong> crear un usuario para usted en el sistema. </strong>',
    'registration.message.next_step' => 'Seleccione el siguiente enlace y siga los pasos correspondientes para finalizar el proceso de registro de usuarios',
    'registration.message.greeting' => 'Atentamente',
    'registration.message.email_empty' => 'El usuario no tiene un correo electrónico configurado',
    'registration.message.send_error' => 'Se produjo un error al intentar enviar el correo electrónico.',
    'recover_password.message.subject' => 'Recuperar contraseña de Gruas Berbel Partes Diarios',
    'recover_password.message.title' => 'Solicitud de recuperación de contraseña',
    'recover_password.message.explanation' => 'Hemos recibido una solicitud de cambio de contraseña para el usuario del sistema Gruas Berbel Partes Diarios',
    'recover_password.message.next_step' => 'Seleccione el siguiente enlace y siga los pasos correspondientes para finalizar el proceso de restablecimiento de contraseña',
    'recover_password.message.greeting' => 'Atentamente',
    'recover_password.message.user_not_found' => 'No tenemos este usuario registrado con el correo electrónico ingresado.',
    'recover_password.message.send_error' => 'No se pudo enviar el correo electrónico con el código para recuperar la contraseña. Inténtalo de nuevo',
  ),
  'flashes' => 
  array (
    'flash.labels.error' => 'Error',
    'flash.labels.success' => 'Exito',
    'flash.labels.warning' => 'Cuidado',
    'flash.labels.info' => 'Información',
    'flash.common.error_save' => 'Se produjo un error al intentar guardar los datos.',
    'flash.common.error_permission_create' => 'No puedes crear esta entidad',
    'flash.common.error_permission_edit' => 'No puedes editar esta entidad',
    'flash.user.common.not_found' => 'El enlace proporcionado no es válido.',
    'flash.user.change_password.success' => 'La contraseña fue cambiada exitosamente',
    'flash.user.change_password.error' => 'Se produjo un error al intentar cambiar la contraseña.',
    'flash.user.enable_disable.not_disabled' => 'Esta cuenta no puede ser deshabilitada',
    'flash.user.enable_disable.enabled' => 'El usuario se habilitó correctamente',
    'flash.user.enable_disable.disabled' => 'El usuario se deshabilitó correctamente.',
    'flash.user.new.success' => 'Usuario guardado con éxito',
    'flash.user.new.error' => 'Se produjo un error al intentar salvar al usuario.',
    'flash.user.edit.success' => 'Usuario editado con éxito. % linkEntity%',
    'flash.user.edit.error' => 'Se produjo un error al intentar editar el usuario.',
    'flash.user.registration.success' => 'Te registraste con éxito. Ingrese su nueva contraseña para acceder al sistema',
    'flash.user.registration.error' => 'Se produjo un error con el registro. Vuelve a intentarlo más tarde.',
    'flash.user.recover_password.success' => 'El correo electrónico se envió correctamente para recuperar la contraseña',
    'flash.user.recover_password.error' => 'Se produjo un error con la contraseña de recuperación, intente nuevamente más tarde',
    'flash.user.reset_password.success' => 'La contraseña fue cambiada exitosamente',
    'flash.group.new.success' => 'Grupo de permisos guardado correctamente',
    'flash.group.new.error' => 'Se produjo un error al intentar guardar el grupo de permisos',
    'flash.group.edit.success' => 'Grupo de permisos editado con éxito. % linkEntity%',
    'flash.group.edit.error' => 'Se produjo un error al intentar editar el grupo de permisos',
    'flash.group.delete.success' => 'Grupo de permisos eliminado con éxito',
    'flash.group.delete.error' => 'Este grupo está relacionado con otra entidad. No se puede quitar',
    'flash.empleados.new.success' => 'Empleado guardado correctamente',
    'flash.empleados.new.error' => 'Se produjo un error al intentar guardar el empleado',
    'flash.empleados.edit.success' => 'Empleado editado con éxito.',
    'flash.empleados.edit.error' => 'Se produjo un error al intentar editar el empleado',
    'flash.empleados.delete.success' => 'Empleado eliminado con éxito',
    'flash.empleados.delete.error' => 'Este empleado está relacionado con otra entidad. No se puede quitar',
    'flash.areas.new.success' => 'Area guardado correctamente',
    'flash.areas.new.error' => 'Se produjo un error al intentar guardar el area',
    'flash.areas.edit.success' => 'Area editado con éxito.',
    'flash.areas.edit.error' => 'Se produjo un error al intentar editar el area',
    'flash.areas.delete.success' => 'Area eliminada con éxito',
    'flash.areas.delete.error' => 'Este area está relacionado con otra entidad. No se puede quitar',
    'flash.propiedades.new.success' => 'Propiedad guardado correctamente',
    'flash.propiedades.new.error' => 'Se produjo un error al intentar guardar la Propiedad',
    'flash.propiedades.edit.success' => 'Propiedad editado con éxito.',
    'flash.propiedades.edit.error' => 'Se produjo un error al intentar editar la Propiedad',
    'flash.propiedades.delete.success' => 'Propiedad eliminada con éxito',
    'flash.propiedades.delete.error' => 'Esta Propiedad está relacionado con otra entidad. No se puede quitar',
    'flash.hour.new.success' => 'Parte Diario guardado correctamente',
    'flash.hour.new.error' => 'Se produjo un error al intentar guardar el Parte Diario',
    'flash.hour.edit.success' => 'Parte Diario editado con éxito.',
    'flash.hour.edit.error' => 'Se produjo un error al intentar editar el Parte Diario',
    'flash.hour.delete.success' => 'Parte Diario eliminado con éxito',
    'flash.hour.delete.error' => 'Este Parte Diario está relacionado con otra entidad. No se puede quitar',
  ),
  'messages' => 
  array (
    'form.buttons.cancel' => 'Cancelar',
    'form.buttons.save' => 'Guardar',
    'form.buttons.save_continue' => 'Guardar y Continuar',
    'form.buttons.apply' => 'Aplicar',
    'form.buttons.clean' => 'Limpiar',
    'form.buttons.filter' => 'Filtrar',
    'form.buttons.enabled' => 'Habilitado',
    'form.buttons.disabled' => 'Deshabilitado',
    'form.buttons.accept_modal' => 'Si, deseo continuar',
    'form.buttons.pdf' => 'PDF',
    'form.buttons.return' => 'Regresar',
    'form.buttons.access' => 'Acceso',
    'form.buttons.send' => 'Enviar',
    'form.buttons.save_add_user' => 'Guardar y Agregar Usuario',
    'form.buttons.save_add_contact' => 'Guardar y Agregar Contacto',
    'form.info.field_required' => 'Todos los campos con * son obligatorios',
    'form.labels.password' => 'Contraseña',
    'form.labels.current_password' => 'Contraseña',
    'form.labels.new_password' => 'Nueva Contraseña',
    'form.labels.repeat_password' => 'Repetir Contraseña',
    'form.labels.user' => 'Usuario',
    'form.labels.reciever' => 'Para',
    'form.labels.send' => 'ENVIAR',
    'form.labels.re' => 'Reenviar',
    'form.labels.subject' => 'Título',
    'form.labels.body' => 'Cuerpo',
    'form.labels.name' => 'Nombre',
    'form.labels.surname' => 'Apellido',
    'form.labels.email' => 'Email',
    'form.labels.status' => 'Status',
    'form.labels.lastName' => 'Apellido',
    'form.labels.username' => 'Username',
    'form.labels.username_email' => 'Username ó Email',
    'form.labels.admin' => 'Administrador',
    'form.labels.description' => 'Descripción',
    'form.labels.role' => 'Rol',
    'form.labels.groups' => 'Groupos',
    'form.labels.name_last_name' => 'Nombre y Apellido',
    'form.labels.phone' => 'Teléfono',
    'form.labels.fax' => 'Fax',
    'form.labels.from' => 'De',
    'form.labels.to' => 'Para',
    'form.labels.short_name' => 'Alias',
    'form.labels.datetime' => 'Fecha y Hora',
    'form.choices.select' => '--- SELECCIONAR ---',
    'form.choices.all' => 'Todo',
    'form.choices.enabled' => 'Habilitado',
    'form.choices.disabled' => 'Deshabilitado',
    'form.choices.true' => 'Si',
    'form.choices.false' => 'No',
    'form.dates_formats.date_time.datetime_picker_js' => 'Y/M/D HH:mm',
    'form.dates_formats.date_time.php' => 'Y/m/d H:i',
    'form.dates_formats.date.datetime_picker_js' => 'Y/M/D',
    'form.dates_formats.date.php' => 'Y/m/d',
    'form.dates_formats.date.readable_date' => 'd M Y',
    'form.dates_formats.month_day' => 'M d',
    'form.dates_formats.time.datetime_picker_js' => 'HH:mm',
    'form.dates_formats.time.php' => 'H:i',
    'page.common.confirm.delete_record' => 'Borrar registro',
    'page.common.confirm.ask_continue' => 'Confirma borrar ete registro?',
    'page.common.confirm.label' => 'Etiqueta',
    'page.common.confirm.delete_text' => 'Borrar texto',
    'page.list.buttons.view' => 'Vista',
    'page.list.buttons.edit' => 'Edición',
    'page.list.buttons.enable' => 'Habilitar',
    'page.list.buttons.disable' => 'Deshabilitar',
    'page.list.buttons.switch' => 'Cambiar',
    'page.list.buttons.delete' => 'Borrar',
    'page.list.buttons.propiedades' => 'Propiedades',
    'page.list.buttons.work' => 'Cargar Hs',
    'page.list.buttons.report' => 'Reporte',
    'page.list.pagination.show' => 'Mostrar',
    'page.list.pagination.records' => 'registros',
    'page.list.pagination.firstPage' => 'Primera',
    'page.list.pagination.lastPage' => 'Última',
    'page.login.title' => 'Acceso a usuarios',
    'page.login.recover_password' => 'Olvidó su contraseña?',
    'page.login.remember' => 'Recordarme',
    'page.recover_password.title' => 'Olvidó su clave?',
    'page.recover_password.description' => 'Ingrese su correo electrónico y luego le enviaremos un correo electrónico con instrucciones sobre cómo generar una nueva contraseña.',
    'page.recover_password.return_to' => 'Regresar a',
    'page.registration.have_account' => 'Posee una cuenta?',
    'page.registration.enter' => 'Ingresar',
    'page.dashboard.title' => 'Dashboard',
    'page.menu.menu' => 'Menú',
    'page.menu.change_password' => 'Cambiar Contraseña',
    'page.menu.sign_out' => 'Salir',
    'page.menu.user' => 'Usuario',
    'page.menu.group' => 'Grupo',
    'page.menu.empleados' => 'Empleados',
    'page.menu.areas' => 'Areas',
    'page.menu.propiedades' => 'Propiedades',
    'page.user.title.change_password' => 'Cambiar Contraseña',
    'page.user.title.create_password' => 'Crear Contraseña',
    'page.user.title.reset_password' => 'Resetear Contraseña',
    'page.user.title.list' => 'Lista de Usuarios',
    'page.user.title.view' => 'Vista de Usuario',
    'page.user.title.edit' => 'Edición de Usuario',
    'page.user.title.new' => 'Nuevo Usuario',
    'page.user.labels.name' => 'Nombre',
    'page.user.labels.username' => 'Apellido',
    'page.user.labels.email' => 'Email',
    'page.user.labels.groups' => 'Grupos',
    'page.user.labels.status' => 'Status',
    'page.user.labels.phone' => 'Telefono',
    'page.user.labels.address' => 'Direccion',
    'page.user.labels.city' => 'Ciudad',
    'page.user.labels.state' => 'Provincia',
    'page.user.labels.cuil' => 'Cuil',
    'page.user.labels.ingreso' => 'Fecha Ingreso',
    'page.user.buttons.add' => 'Agregar Usuario',
    'page.user.confirm.label_enable' => 'Habilitar usuario',
    'page.user.confirm.label_disable' => 'Deshabilitar usuario',
    'page.user.confirm.body_enable' => 'Ha seleccionado el usuario para habilitar',
    'page.user.confirm.body_disable' => 'Ha seleccionado el usuario para deshabilitar',
    'page.group.title.list' => 'Lista de Grupos',
    'page.group.title.view' => 'Vista de Grupo',
    'page.group.title.edit' => 'Edición de Grupo',
    'page.group.title.new' => 'Nuevo Grupo',
    'page.group.labels.name' => 'Nombre',
    'page.group.labels.description' => 'Descripción',
    'page.group.buttons.add' => 'Agregar Grupo',
    'page.empleados.title.list' => 'Lista de Empleados',
    'page.empleados.title.view' => 'Vista de Empleado',
    'page.empleados.title.edit' => 'Edición de Empleado',
    'page.empleados.title.new' => 'Nuevo Empleado',
    'page.empleados.title.hour' => 'Parte Diario',
    'page.empleados.labels.name' => 'Nombre',
    'page.empleados.labels.description' => 'Descripción',
    'page.empleados.labels.phone' => 'Telefono',
    'page.empleados.labels.address' => 'Direccion',
    'page.empleados.labels.email' => 'Email',
    'page.empleados.buttons.add' => 'Agregar Empleado',
    'page.areas.title.list' => 'Lista de Areas',
    'page.areas.title.view' => 'Vista de Areas',
    'page.areas.title.edit' => 'Edición de Areas',
    'page.areas.title.new' => 'Nuevo Areas',
    'page.areas.labels.name' => 'Nombre',
    'page.areas.labels.status' => 'Estado',
    'page.areas.buttons.add' => 'Agregar Areas',
    'page.propiedades.title.list' => 'Lista de Propiedades',
    'page.propiedades.title.view' => 'Vista de Propiedad',
    'page.propiedades.title.edit' => 'Edición de Propiedad',
    'page.propiedades.title.new' => 'Nuevo Propiedad',
    'page.propiedades.labels.name' => 'Nombre',
    'page.propiedades.labels.value' => 'Valor',
    'page.propiedades.buttons.add' => 'Agregar Propiedad',
  ),
));


return $catalogue;
