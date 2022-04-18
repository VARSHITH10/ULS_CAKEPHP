<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchGroup $orcidBatchGroup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orcidBatchGroup->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchGroup->ID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orcid Batch Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchGroups form content">
            <?= $this->Form->create($orcidBatchGroup) ?>
            <fieldset>
                <legend><?= __('Edit Orcid Batch Group') ?></legend>
                <?php
                    echo $this->Form->control('NAME');
                    echo $this->Form->control('GROUP_DEFINITION');
                    echo $this->Form->control('EMPLOYEE_DEFINITION');
                    echo $this->Form->control('STUDENT_DEFINITION');
                    echo $this->Form->control('CACHE_CREATION_DATE', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
