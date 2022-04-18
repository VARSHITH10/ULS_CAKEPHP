<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidStatusType $orcidStatusType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid Status Type'), ['action' => 'edit', $orcidStatusType->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Status Type'), ['action' => 'delete', $orcidStatusType->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidStatusType->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Status Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Status Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidStatusTypes view content">
            <h3><?= h($orcidStatusType->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidStatusType->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidStatusType->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('SEQ') ?></th>
                    <td><?= $this->Number->format($orcidStatusType->SEQ) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
