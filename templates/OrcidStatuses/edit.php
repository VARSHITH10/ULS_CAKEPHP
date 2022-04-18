<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidStatus $orcidStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orcidStatus->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orcidStatus->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orcid Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidStatuses form content">
            <?= $this->Form->create($orcidStatus) ?>
            <fieldset>
                <legend><?= __('Edit Orcid Status') ?></legend>
                <?php
                    echo $this->Form->control('ORCID_USER_ID');
                    echo $this->Form->control('ORCID_STATUS_TYPE_ID');
                    echo $this->Form->control('STATUS_TIMESTAMP', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
