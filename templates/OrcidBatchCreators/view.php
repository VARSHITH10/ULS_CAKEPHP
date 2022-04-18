<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchCreator $orcidBatchCreator
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Adminsitrators'), ['action' => 'edit'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Adminsitrators'), ['action' => 'delete'], ['confirm' => __('Are you sure you want to delete # {0}?'), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Adminsitrators'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Adminsitrators'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchCreators view content">
            <h3><?= h($orcidBatchCreator->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidBatchCreator->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidBatchCreator->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('FLAGS') ?></th>
                    <td><?= $this->Number->format($orcidBatchCreator->FLAGS) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
