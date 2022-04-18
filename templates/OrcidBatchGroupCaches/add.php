<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchGroupCache $orcidBatchGroupCache
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Orcid Batch Group Caches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidBatchGroupCaches form content">
            <?= $this->Form->create($orcidBatchGroupCache) ?>
            <fieldset>
                <legend><?= __('Add Orcid Batch Group Cache') ?></legend>
                <?php
                    echo $this->Form->control('ORCID_BATCH_GROUP_ID');
                    echo $this->Form->control('ORCID_USER_ID');
                    echo $this->Form->control('DEPRECATED', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
