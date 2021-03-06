<?php

return [

    'company' => [
        'name' => 'Nombre',
        'email' => 'Correo electrónico',
        'phone' => 'Teléfono',
        'address' => 'Dirección',
        'logo' => 'Logo',
    ],
    'localisation' => [
        'tab' => 'Localización',
        'date' => [
            'format' => 'Formato de Fecha',
            'separator' => 'Separador de fecha',
            'dash' => 'Guión (-)',
            'dot' => 'Punto (.)',
            'comma' => 'Coma (,)',
            'slash' => 'Barra (/)',
            'space' => 'Espacio ( )',
        ],
        'timezone' => 'Zona horaria',
        'percent' => [
            'title' => 'Posición Porcentaje (%)',
            'before' => 'Antes del Número',
            'after' => 'Después del número',
        ],
    ],
    'invoice' => [
        'tab' => 'Factura',
        'prefix' => 'Prefijo de número',
        'digit' => 'Número de dígitos',
        'next' => 'Siguiente número',
        'logo' => 'Logo',
    ],
    'default' => [
        'tab' => 'Por defecto',
        'account' => 'Cuenta Predeterminada',
        'currency' => 'Moneda Predeterminada',
        'tax' => 'Impuesto Predeterminado',
        'payment' => 'Método de pago Predeterminado',
        'language' => 'Idioma Predeterminado',
    ],
    'email' => [
        'protocol' => 'Protocolo',
        'php' => 'PHP Mail',
        'smtp' => [
            'name' => 'SMTP',
            'host' => 'SMTP Host',
            'port' => 'Puerto SMTP',
            'username' => 'Nombre de usuario SMTP',
            'password' => 'Contraseña SMTP',
            'encryption' => 'Seguridad SMTP',
            'none' => 'Ninguna',
        ],
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Ruta de acceso de sendmail',
        'log' => 'Registrar Correos',
    ],
    'scheduling' => [
        'tab' => 'Programación',
        'send_invoice' => 'Enviar Recordatorio de Factura',
        'invoice_days' => 'Enviar después del vencimiento',
        'send_bill' => 'Enviar Recordatorio de Recibo',
        'bill_days' => 'Enviar Antes del Vencimiento',
        'cron_command' => 'Comando Cron',
        'schedule_time' => 'Hora de ejecución',
    ],
    'appearance' => [
        'tab' => 'Apariencia',
        'theme' => 'Tema',
        'light' => 'Claro',
        'dark' => 'Oscuro',
        'list_limit' => 'Registros por página',
        'use_gravatar' => 'Usar Gravatar',
    ],
    'system' => [
        'tab' => 'Sistema',
        'session' => [
            'lifetime' => 'Duración de la sesión (minutos)',
            'handler' => 'Gestor de sesiones',
            'file' => 'Archivo',
            'database' => 'Base de datos',
        ],
        'file_size' => 'Tamaño Máximo (MB)',
        'file_types' => 'Tipos de Archivo Permitidos',
    ],

];
