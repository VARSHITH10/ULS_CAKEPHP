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
            <?= $this->Html->link(__('Edit Orcid Batch Group'), ['action' => 'edit', $orcidBatchGroup->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Batch Group'), ['action' => 'delete', $orcidBatchGroup->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchGroup->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Batch Groups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Batch Group'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchGroups view content">
            <h3><?= h($orcidBatchGroup->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidBatchGroup->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('GROUP DEFINITION') ?></th>
                    <td><?= h($orcidBatchGroup->GROUP_DEFINITION) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMPLOYEE DEFINITION') ?></th>
                    <td><?= h($orcidBatchGroup->EMPLOYEE_DEFINITION) ?></td>
                </tr>
                <tr>
                    <th><?= __('STUDENT DEFINITION') ?></th>
                    <td><?= h($orcidBatchGroup->STUDENT_DEFINITION) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchGroup->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CACHE CREATION DATE') ?></th>
                    <td><?= h($orcidBatchGroup->CACHE_CREATION_DATE) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
