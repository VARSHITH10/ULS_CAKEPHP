<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidStatus $orcidStatus
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid Status'), ['action' => 'edit', $orcidStatus->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Status'), ['action' => 'delete', $orcidStatus->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidStatus->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Statuses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Status'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidStatuses view content">
            <h3><?= h($orcidStatus->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidStatus->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID USER ID') ?></th>
                    <td><?= $this->Number->format($orcidStatus->ORCID_USER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID STATUS TYPE ID') ?></th>
                    <td><?= $this->Number->format($orcidStatus->ORCID_STATUS_TYPE_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('STATUS TIMESTAMP') ?></th>
                    <td><?= h($orcidStatus->STATUS_TIMESTAMP) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
