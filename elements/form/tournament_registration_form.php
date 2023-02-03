<?php
defined('C5_EXECUTE') or die("Access Denied.");

/** @var Concrete\Core\Attribute\Form\Control\View\View $view */
/** @var Concrete\Core\Entity\Attribute\Key\Key $key */
?>

<div class="mb-3 my-custom-class"
     data-express-field-handle="<?= h($key->getAttributeKeyHandle()); ?>"
     data-attribute-type-handle="<?= h($key->getAttributeTypeHandle()); ?>"
>
    <?php if ($view->supportsLabel()) { ?>
        <label class="form-label" for="<?=$view->getControlID()?>"><?=$view->getLabel()?></label>
    <?php } ?>

    <?php if ($view->isRequired()) { ?>
        <span class="text-muted small"><?=t('Required')?></span>
    <?php } ?>

    <?php $view->renderControl()?>
</div>
