<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       Spanish language file)
|
|       Traducción Spanish(ES) -> KANONimpresor
|       (http://www.kanonimpresor.com), 2025
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Enviar correo con restricciones especificadas por un plugin opcional';
		break;
	case 'debug' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Solo para desarrolladores. Actualmente no utilizado';
		break;
	case 'saved' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Selecciona y usa una plantilla guardada para enviar un correo masivo. Elimina las plantillas obsoletas';
		break;
	case 'pending' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Lista de correos masivos programados para enviar, con su estado actual. El planificador de correos procesará estos emails 
		respetando las fechas de envío mínimas/máximas configuradas';
		break;
	case 'held' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Lista de correos preparados para enviar pero aún no liberados';
		break;
	case 'sent' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Lista de correos masivos completados. Permite ver resultados del envío.<br />';
		break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Crea un correo: asigna un título significativo y selecciona destinatarios. Puedes guardarlo como plantilla o enviarlo inmediatamente.<br />';
		$text .= 'Las direcciones pueden provenir de plugins (como newsletter), eliminándose duplicados al enviar.<br />';
		$text .= 'Los adjuntos se seleccionan de la lista de descargas válidas.<br />';
		$text .= 'El correo puede enviarse en texto plano (menos riesgo de spam) o HTML (generando automáticamente versión texto). 
				Opcionalmente se añaden estilos del tema o plantillas predefinidas.';
		break;
	case 'recipients' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Muestra todos los destinatarios/potenciales de un correo con su estado actual';
		break;
	case 'prefs' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = '<b>Configuración de correos masivos</b><br />
		El correo de prueba usa la configuración actual. Para verificar registros MX, envía un test a: <i>check-auth@verifier.port25.com</i>. 
		Asegúrate primero de que la dirección de correo del sitio es correcta.<br /><br />';
		$text .= '<b>Método de envío</b><br />
		Usa SMTP siempre que sea posible. Configura según tu servidor de correo.<br /><br />';
		$text .= '<b>Formato predeterminado</b><br />
		Los correos pueden ser texto plano (más universal) o HTML (mejor apariencia pero mayor riesgo de filtrado). En HTML se añade versión texto automáticamente.<br /><br />';
		$text .= '<b>Control de envíos masivos</b><br />
		Los valores dependen de tu hosting y volumen de envíos. Valores cero vacían la cola rápidamente. Recomendado: menos de 500 emails/hora.<br /><br />';
		$text .= '<b>Correos rebotados</b><br />
		Especifica una dirección para recibir notificaciones de fallos. Si controlas el servidor, usa el script de procesamiento automático vía planificador. 
		Alternativamente, configura una cuenta POP3 (usar TLS solo si es requerido).<br /><br />';
		$text .= '<b>Fuentes de direcciones</b><br />
		Selecciona qué plugins pueden aportar direcciones de correo.<br /><br />';
		$text .= '<b>Registro</b><br />
		Crea un archivo de log en el directorio del sistema (debes borrarlo periódicamente). La opción "solo registro" muestra destinatarios sin enviar. 
		La opción "con errores" falla 1 de cada 7 emails para pruebas.';
		break;
	case 'maint' :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Funciones de mantenimiento para la base de datos de correos';
		break;
	default :
		$caption = "Ayuda:<br />
			# Correo Electrónico - e-Mail";
		$text = 'Opción no documentada';
  }

$ns->tablerender($caption, $text);
