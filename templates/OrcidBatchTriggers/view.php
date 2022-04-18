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
            <?= $this->Html->link(__('Edit Orcid Batch Trigger'), ['action' => 'edit', $orcidBatchTrigger->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Batch Trigger'), ['action' => 'delete', $orcidBatchTrigger->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchTrigger->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Batch Triggers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Batch Trigger'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchTriggers view content">
            <h3><?= h($orcidBatchTrigger->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidBatchTrigger->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID STATUS TYPE ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->ORCID_STATUS_TYPE_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID BATCH ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->ORCID_BATCH_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('TRIGGER DELAY') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->TRIGGER_DELAY) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID BATCH GROUP ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->ORCID_BATCH_GROUP_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('REQUIRE BATCH ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->REQUIRE_BATCH_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('MINIMUM REPEAT') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->MINIMUM_REPEAT) ?></td>
                </tr>
                <tr>
                    <th><?= __('MAXIMUM REPEAT') ?></th>
                    <td><?= $this->Number->format($orcidBatchTrigger->MAXIMUM_REPEAT) ?></td>
                </tr>
                <tr>
                    <th><?= __('BEGIN DATE') ?></th>
                    <td><?= h($orcidBatchTrigger->BEGIN_DATE) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
