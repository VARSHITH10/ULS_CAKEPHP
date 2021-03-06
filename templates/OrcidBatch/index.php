<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatch[]|\Cake\Collection\CollectionInterface $orcidBatch
 */
?>
<div class="orcidBatch index content">
    <?= $this->Html->link(__('New Orcid Batch'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orcid Batch') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('NAME') ?></th>
                    <th><?= $this->Paginator->sort('SUBJECT') ?></th>
                    <th><?= $this->Paginator->sort('FROM_NAME') ?></th>
                    <th><?= $this->Paginator->sort('FROM_ADDR') ?></th>
                    <th><?= $this->Paginator->sort('REPLY_TO') ?></th>
                    <th><?= $this->Paginator->sort('ORCID_BATCH_CREATOR_ID') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidBatch as $orcidBatch): ?>
                <tr>
                    <td><?= $this->Number->format($orcidBatch->ID) ?></td>
                    <td><?= h($orcidBatch->NAME) ?></td>
                    <td><?= h($orcidBatch->SUBJECT) ?></td>
                    <td><?= h($orcidBatch->FROM_NAME) ?></td>
                    <td><?= h($orcidBatch->FROM_ADDR) ?></td>
                    <td><?= h($orcidBatch->REPLY_TO) ?></td>
                    <td><?= $this->Number->format($orcidBatch->ORCID_BATCH_CREATOR_ID) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidBatch->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcidBatch->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcidBatch->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatch->ID)]) ?>
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
