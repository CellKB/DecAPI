<?php

/**
 * Spanish translation strings for generic Twitch-related errors.
 */
return [
    /**
     * Related to chat * Relacionado al chat
     */
    'no_chat_rules' => ':channel no tiene ninguna regla de chat configurada.',
    'error_occurred_chat_clusters' => 'Ocurrió un error recuperando grupos de chat.',
    'error_retrieving_chat_users' => 'Hubo un error recuperando los usuarios de channel: ',
    'empty_chat_user_list' => 'La lista de usuarios está vacía.',
    'channel_missing_subemotes' => 'Este canal no tiene emotes de suscriptor.',

    /**
     * Related to followers * Relacionado a los seguidores
     */
    'cannot_follow_self' => 'Un usuario no puede seguirse a sí mismo.',
    'error_followers' => 'Hubo un error recuperando los usuarios de :channel',
    'follow_not_found' => ':user no sigue a :channel',
    'no_followers' => 'No tienes ningún seguidor :(',
    'invalid_api_data' => 'Twitch API ha devuelto datos inválidos.',
    'unable_get_following' => 'No se han podido obtener los datos para el usuario especificado.',
    'end_following_list' => 'Fin de la lista de seguidores.',

    /**
     * Help articles * Artículos de ayuda
     */
    'help_articles' => 'Artículos de ayuda',
    'help_available_list' => 'Lista de artículos de ayuda disponibles con encabezados: :url',
    'help_no_results' => 'No se encontraron resultados.',

    /**
     * Media (highlights, VODs, uploads)
     */
    'no_highlights' => ':channel no ha guardado momentos destacados.',
    'no_uploads' => ':channel no tiene videos subidos.',
    'no_vods' => ':channel no tiene VODs disponibles.',
    'invalid_limit_parameter' => 'Parámetro "limit" especificado es inválido. Mínimo :min, máximo :max.',
    'invalid_offset_parameter' => 'Parámetro "offset" específicado es inválido. Mínimo :min.',
    'end_of_video_list' => '¡Haz alcanzado el final de la lista de videos!',
    'invalid_minutes_parameter' => 'Cantidad inválida de minutos especificado :min',
    'vodreplay_minutes_too_high' => 'Los minutos (:min) especificados es mayor que la longitud del VOD.',

    /**
     * Hosting
     */
    'no_hosts' => 'Actualmente nadie es anfitrión de :channel',
    'multiple_hosts' => ':channels y :amount más|:channels y :amount más',

    /**
     * Multi
     */
    'multi_invalid_service' => 'El servicio especificado es inválido - Servicios disponibles :services',
    'multi_empty_list' => 'Tienes que especificar para cuáles streams quieres crear un multi enlace (lista separada por espacios).',

    /**
     * Stream
     */
    'stream_offline' => ':channel está fuera de línea',
    'stream_get_error' => 'No ha sido posible obtener la información del stream para :channel',

    /**
     * Subscriber-related stuff
     */
    'sub_invalid_action' => 'La acción especificada es inválida. Acciones disponibles: :actions',
    'sub_needs_authentication' => '%s necesita autentificarse para usar %sSub (%s sub): %s',
    'sub_count_too_high' => 'La cuenta especificada (%d) es mayor que el total de suscriptores (%d)',
    'subage_needs_authentication' => '%s necesita autentificarse para usar subage (duración de la suscripción): %s',
    'subcount_missing_channel' => 'Usa ?channel=CHANNEL_NAME o /twitch/subcount/CHANNEL_NAME para obtener el número de suscriptores.',
    'subcount_needs_authentication' => '%s necesita autentificarse para usar subcount: %s',
    'subcount_generic_error' => 'No se ha podido obtener el número de suscriptores para el canal: :channel',
    'subpoints_missing_channel' => 'Favor de especificar un nombre de canal al final del URL - Ejemplo: /twitch/subpoints/CHANNEL_NAME',
    'subpoints_needs_authentication' => '%s necesita autentificarse para usar los puntos de suscriptor: %s',
    'subpoints_generic_error' => 'No se han podido obtener los puntos de suscriptor para el canal: :channel',

    /**
     * Authentication
     */
    'auth_missing_scopes' => 'Al token OAuth le falta el alcance requerido:',

    /**
     * Teams
     */
    'teams_missing_identifier' => 'El identificador de equipo está vacío',

    /**
     * User
     */
    'user_not_found' => 'No se encontró al usuario: :user',

    /**
     * API deprecation
     */
    'api_removed_by_twitch' => '[Deprecated] Esta API se ha removido de Twitch.',
];
