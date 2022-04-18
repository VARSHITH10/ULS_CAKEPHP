<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchGroupCache[]|\Cake\Collection\CollectionInterface $orcidBatchGroupCaches
 */
?>
<div class="orcidBatchGroupCaches index content">
    <?= $this->Html->link(__('New Orcid Batch Group Cache'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orcid Batch Group Caches') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ORCID_BATCH_GROUP_ID') ?></th>
                    <th><?= $this->Paginator->sort('ORCID_USER_ID') ?></th>
                    <th><?= $this->Paginator->sort('DEPRECATED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidBatchGroupCaches as $orcidBatchGroupCache): ?>
                <tr>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ID) ?></td>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ORCID_BATCH_GROUP_ID) ?></td>
                    <td><?= $this->Number->format($orcidBatchGroupCache->ORCID_USER_ID) ?></td>
                    <td><?= h($orcidBatchGroupCache->DEPRECATED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidBatchGroupCache->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcidBatchGroupCache->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcidBatchGroupCache->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatchGroupCache->ID)]) ?>
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
