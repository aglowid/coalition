<?php

return [
	'titles' => [
        "index" => "Products",
        "new" => "New Product",
        "edit" => "Edit Product",
        "delete" => "Delete Product"
    ],
	'fields' => [
        "rfc" => "Rfc",
        "name" => "Name",
        "quantity" => "Quantity",
        "price" => "Price",
        "total" => "Total"
    ],
	'buttons' => [
        "register" => "Register",
        "update" => "Update",
        "cancel" => "Cancel",
        "yes" => "Yes",
        "no" => "No"
    ],
	'notifications' => [
        "register_successful" => "The product has been successfully registered.",
        "update_successful" => "The product has been successfully updated.",
        "activated_successful" => "The product has been successfully activated.",
        "deactivated_successful" => "The product has been successfully deactivated.",
        "delete_successful" => "The product has been successfully deleted.",
        "already_register" => "The product had been registered previously.",
        "no_exists" => "The product does not exist.",
        "delete_confirmation" => "Are you sure, that you will delete selected product?"
    ],
	'validations' => [
        "required" => "This field is required.",
        "email" => "This field is an invalid email.",
        "digits" => "This field only accepts digits.",
        "number" => "This field only accepts numeric values.",
        "minlength" => "the minimum length of the field is {0}.",
        "maxlength" => "the maximum length of the field is {0}."
    ]
];
