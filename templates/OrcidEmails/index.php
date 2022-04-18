<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidEmail[]|\Cake\Collection\CollectionInterface $orcidEmails
 */
?>
<div class="orcidEmails index content">
    <?= $this->Html->link(__('New Orcid Email'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orcid Emails') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('ORCID_USER_ID') ?></th>
                    <th><?= $this->Paginator->sort('ORCID_BATCH_ID') ?></th>
                    <th><?= $this->Paginator->sort('QUEUED') ?></th>
                    <th><?= $this->Paginator->sort('SENT') ?></th>
                    <th><?= $this->Paginator->sort('CANCELLED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidEmails as $orcidEmail): ?>
                <tr>
                    <td><?= $this->Number->format($orcidEmail->ID) ?></td>
                    <td><?= $this->Number->format($orcidEmail->ORCID_USER_ID) ?></td>
                    <td><?= $this->Number->format($orcidEmail->ORCID_BATCH_ID) ?></td>
                    <td><?= h($orcidEmail->QUEUED) ?></td>
                    <td><?= h($orcidEmail->SENT) ?></td>
                    <td><?= h($orcidEmail->CANCELLED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidEmail->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcidEmail->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcidEmail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidEmail->ID)]) ?>
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
