<?php

return [
	'titles' => [
        "index" => "Products",
        "new" => "Nuevo Product",
        "edit" => "Editar Product",
        "delete" => "Eliminar Product"
    ],
	'fields' => [
        "rfc" => "Rfc",
        "name" => "Name",
        "quantity" => "Quantity",
        "price" => "Price",
        "total" => "Total"
    ],
	'buttons' => [
        "register" => "Registrar",
        "update" => "Modificar",
        "cancel" => "Cancelar",
        "yes" => "SI",
        "no" => "NO"
    ],
	'notifications' => [
        "register_successful" => "El product ha sido registrado correctamente.",
        "update_successful" => "El product ha sido modificado correctamente.",
        "activated_successful" => "El product ha sido activado correctamente.",
        "deactivated_successful" => "El product ha sido desactivado correctamente.",
        "delete_successful" => "El product ha sido eliminado correctamente.",
        "already_register" => "El product ya había sido registrado previamente.",
        "no_exists" => "El product no existe.",
        "delete_confirmation" => "¿Estás seguro que deseas eliminar el product seleccionado?"
    ],
	'validations' => [
        "required" => "El campo es requerido.",
        "email" => "El campo no es un email válido.",
        "digits" => "El campo solo acepta dígitos.",
        "number" => "El campo solo acepta valores numéricos.",
        "minlength" => "El tamaño mínimo del campo es {0}.",
        "maxlength" => "El tamaño máximo del campo es {0}.",
        "min" => "El valor mínimo del campo es {0}.",
        "max" => "El valor máximo del campo es {0}.",
        "range" => "El valor del campo debe estar en el rango {0} - {1}."
    ]
];
