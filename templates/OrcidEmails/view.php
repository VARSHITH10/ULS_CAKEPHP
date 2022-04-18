<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidEmail $orcidEmail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid Email'), ['action' => 'edit', $orcidEmail->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Email'), ['action' => 'delete', $orcidEmail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidEmail->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Emails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Email'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidEmails view content">
            <h3><?= h($orcidEmail->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidEmail->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID USER ID') ?></th>
                    <td><?= $this->Number->format($orcidEmail->ORCID_USER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID BATCH ID') ?></th>
                    <td><?= $this->Number->format($orcidEmail->ORCID_BATCH_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('QUEUED') ?></th>
                    <td><?= h($orcidEmail->QUEUED) ?></td>
                </tr>
                <tr>
                    <th><?= __('SENT') ?></th>
                    <td><?= h($orcidEmail->SENT) ?></td>
                </tr>
                <tr>
                    <th><?= __('CANCELLED') ?></th>
                    <td><?= h($orcidEmail->CANCELLED) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
