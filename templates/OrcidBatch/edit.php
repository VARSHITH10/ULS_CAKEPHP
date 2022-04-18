<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatch $orcidBatch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orcidBatch->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatch->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orcid Batch'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatch form content">
            <?= $this->Form->create($orcidBatch) ?>
            <fieldset>
                <legend><?= __('Edit Orcid Batch') ?></legend>
                <?php
                    echo $this->Form->control('NAME');
                    echo $this->Form->control('SUBJECT');
                    echo $this->Form->control('BODY');
                    echo $this->Form->control('FROM_NAME');
                    echo $this->Form->control('FROM_ADDR');
                    echo $this->Form->control('REPLY_TO');
                    echo $this->Form->control('ORCID_BATCH_CREATOR_ID');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
