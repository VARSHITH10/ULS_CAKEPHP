<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchGroup[]|\Cake\Collection\CollectionInterface $orcidBatchGroups
 */
?>
<div class="orcidBatchGroups index content">
    <?= $this->Html->link(__('New Orcid Batch Group'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orcid Batch Groups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('NAME') ?></th>
                    <th><?= $this->Paginator->sort('GROUP_DEFINITION') ?></th>
                    <th><?= $this->Paginator->sort('EMPLOYEE_DEFINITION') ?></th>
                    <th><?= $this->Paginator->sort('STUDENT_DEFINITION') ?></th>
                    <th><?= $this->Paginator->sort('CACHE_CREATION_DATE') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidBatchGroups as $orcidBatchGroup): ?>
                <tr>
                    <td><?= $this->Number->format($orcidBatchGroup->ID) ?></td>
                    <td><?= h($orcidBatchGroup->NAME) ?></td>
                    <td><?= h($orcidBatchGroup->GROUP_DEFINITION) ?></td>
                    <td><?= h($orcidBatchGroup->EMPLOYEE_DEFINITION) ?></td>
                    <td><?= h($orcidBatchGroup->STUDENT_DEFINITION) ?></td>
                    <td><?= h($orcidBatchGroup->CACHE_CREATION_DATE) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidBatchGroup->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcidBatchGroup->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcidBatchGroup->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchGroup->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
