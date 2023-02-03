<?php defined('C5_EXECUTE') or die("Access Denied.");

/** @var \Concrete\Attribute\Text\Controller $controller */

$attributeKeyHandle = $controller->getAttributeKey()->getAttributeKeyHandle();
$attributeTypeHandle = $controller->getAttributeKey()->getAttributeTypeHandle();

print $form->text(
    $this->field('value'),
    $value,
    [
        'placeholder' => h(t($akTextPlaceholder)),
        'data-express-field-handle' => $attributeKeyHandle,
        'data-attribute-type-handle' => $attributeTypeHandle,
    ]
);
