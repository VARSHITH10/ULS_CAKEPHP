<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatch $orcidBatch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orcid Batch'), ['action' => 'edit', $orcidBatch->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orcid Batch'), ['action' => 'delete', $orcidBatch->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $orcidBatch->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orcid Batch'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orcid Batch'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatch view content">
            <h3><?= h($orcidBatch->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NAME') ?></th>
                    <td><?= h($orcidBatch->NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('SUBJECT') ?></th>
                    <td><?= h($orcidBatch->SUBJECT) ?></td>
                </tr>
                <tr>
                    <th><?= __('FROM NAME') ?></th>
                    <td><?= h($orcidBatch->FROM_NAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('FROM ADDR') ?></th>
                    <td><?= h($orcidBatch->FROM_ADDR) ?></td>
                </tr>
                <tr>
                    <th><?= __('REPLY TO') ?></th>
                    <td><?= h($orcidBatch->REPLY_TO) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($orcidBatch->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('ORCID BATCH CREATOR ID') ?></th>
                    <td><?= $this->Number->format($orcidBatch->ORCID_BATCH_CREATOR_ID) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('BODY') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($orcidBatch->BODY)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
