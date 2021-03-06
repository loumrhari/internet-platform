<? if(!$article->categories_category_id) : ?>
<script>
    // Set default value for categories radiolist
    $jQuery(document).ready(
        function(){
            $jQuery('fieldset[name=categories_category_id] label:first-of-type input:radio').prop('checked', true);
        }
    );
</script>
<? endif ?>

<fieldset>
    <legend><?= translate('Publish') ?></legend>
    <div>
        <label for="published"><?= translate('Published') ?></label>
        <div>
            <input type="checkbox" name="published" value="1" <?= $article->published ? 'checked="checked"' : '' ?> />
        </div>
    </div>
</fieldset>

<fieldset>
    <legend><?= translate('Details') ?></legend>
    <div>
        <label for="date">
            <?= translate('Start on') ?>
        </label>
        <div>
            <input type="date" name="start_on" id="start_on" class="required" value="<?= helper('date.format', array('date'=> $article->start_on, 'format' => 'Y-m-d')) ?>" />
        </div>
    </div>
    <div>
        <label for="date">
            <?= translate('End on') ?>
        </label>
        <div>
            <input type="date" name="end_on" class="required validate-after-date afterElement:'start_on'" value="<?= helper('date.format', array('date'=> $article->end_on, 'format' => 'Y-m-d')) ?>" />
        </div>
    </div>
</fieldset>

<fieldset>
    <legend><?= translate('Category') ?></legend>
    <?= helper('com:categories.radiolist.categories', array('row' => $article, 'uncategorised' => false)) ?>
</fieldset>

<? if($article->isStreetable()) : ?>
<fieldset>
    <legend><?= translate('Streets') ?></legend>
    <?= helper('com:streets.listbox.streets', array('selected' => $article->getStreets()->streets_street_id, 'deselect' => false, 'attribs' => array('multiple' => 'multiple', 'class' => 'select-streets', 'style' => 'width:100%;'))); ?>
    <script data-inline> $jQuery(".select-streets").select2(); </script>
</fieldset>
<? endif ?>