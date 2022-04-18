<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchGroupCache $orcidBatchGroupCache
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid Batch Group Cache'), ['action' => 'edit', $orcidBatchGroupCache->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Batch Group Cache'), ['action' => 'delete', $orcidBatchGroupCache->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchGroupCache->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Batch Group Caches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Batch Group Cache'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchGroupCaches view content">
            <h3><?= h($orcidBatchGroupCache->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID BATCH GROUP ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ORCID_BATCH_GROUP_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID USER ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ORCID_USER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('DEPRECATED') ?></th>
                    <td><?= h($orcidBatchGroupCache->DEPRECATED) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
