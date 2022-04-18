<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidUser[]|\Cake\Collection\CollectionInterface $orcidUsers
 */
?>
<div class="row">
     <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('New Orcid User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <h4 class="heading"><?= __('Navigation') ?></h4>
            <?= $this->Html->link(__('Find Orcid User'), ['action' => 'find'], ['class' => 'side-nav-item']) ?>
            <li><?php echo $this->Html->link(__('Home'), '/'); ?></li>
        </div>
     </aside>  
        <div class="orcidUsers index content">
        <?= $this->Html->link(__('New Orcid User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Orcid Users') ?></h3>
        <div class="table-responsive column-80">
        <table>
            <thead>
                <tr>
                    
                    <th><?= $this->Paginator->sort('USERNAME') ?></th>
                    <th><?= $this->Paginator->sort('ORCID') ?></th>
                    <th><?= $this->Paginator->sort('TOKEN') ?></th>
                    <th><?= $this->Paginator->sort('CREATED') ?></th>
                    <th><?= $this->Paginator->sort('MODIFIED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidUsers as $orcidUser): ?>
                <tr>
                    
                    <td><?= h($orcidUser->USERNAME) ?></td>
                    <td><?= h($orcidUser->ORCID) ?></td>
                    <td><?= h($orcidUser->TOKEN) ?></td>
                    <td><?= h($orcidUser->CREATED) ?></td>
                    <td><?= h($orcidUser->MODIFIED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidUser->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orcidUser->ID]) ?>
                        <?= $this->Html->link(__('Opt out'), ['action' => 'optout', $orcidUser->ID],['confirm' => __('Are you sure you want to opt out {0}?', $orcidUser->USERNAME)]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orcidUser->ID], ['confirm' => __('Are you sure you want to delete {0}?', $orcidUser->USERNAME)]) ?>
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

