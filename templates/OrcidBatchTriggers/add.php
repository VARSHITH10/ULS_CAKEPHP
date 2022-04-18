<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchTrigger $orcidBatchTrigger
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orcid Batch Triggers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchTriggers form content">
            <?= $this->Form->create($orcidBatchTrigger) ?>
            <fieldset>
                <legend><?= __('Add Orcid Batch Trigger') ?></legend>
                <?php
                    echo $this->Form->control('NAME');
                    echo $this->Form->control('ORCID_STATUS_TYPE_ID');
                    echo $this->Form->control('ORCID_BATCH_ID');
                    echo $this->Form->control('TRIGGER_DELAY');
                    echo $this->Form->control('ORCID_BATCH_GROUP_ID');
                    echo $this->Form->control('BEGIN_DATE', ['empty' => true]);
                    echo $this->Form->control('REQUIRE_BATCH_ID');
                    echo $this->Form->control('MINIMUM_REPEAT');
                    echo $this->Form->control('MAXIMUM_REPEAT');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
