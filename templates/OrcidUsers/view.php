<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidUser $orcidUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid User'), ['action' => 'edit', $orcidUser->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid User'), ['action' => 'delete', $orcidUser->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidUser->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidUsers view content">
            <h3><?= h($orcidUser->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('USERNAME') ?></th>
                    <td><?= h($orcidUser->USERNAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidUser->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID') ?></th>
                    <td><?= h($orcidUser->ORCID) ?></td>
                </tr>
                <tr>
                    <th><?= __('TOKEN') ?></th>
                    <td><?= h($orcidUser->TOKEN) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidUser->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CREATED') ?></th>
                    <td><?= h($orcidUser->CREATED) ?></td>
                </tr>
                <tr>
                    <th><?= __('MODIFIED') ?></th>
                    <td><?= h($orcidUser->MODIFIED) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMAIL') ?></th>
                    <td><?= h($orcidUser->EMAIL) ?></td>
                </tr>
                <tr>
                    <th><?= __('DEPARTMENT') ?></th>
                    <td><?= h($orcidUser->DEPARTMENT) ?></td>
                </tr>
                <tr>
                    <th><?= __('CURRENT CHECKPOINT') ?></th>
                    <td><?= h($orcidUser->CURRENTCHECKPOINT) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
