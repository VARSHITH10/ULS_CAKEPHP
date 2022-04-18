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
            <?= $this->Html->link(__('List Orcid Emails'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orcidEmails form content">
            <?= $this->Form->create($orcidEmail) ?>
            <fieldset>
                <legend><?= __('Add Orcid Email') ?></legend>
                <?php
                    echo $this->Form->control('ORCID_USER_ID');
                    echo $this->Form->control('ORCID_BATCH_ID');
                    echo $this->Form->control('QUEUED', ['empty' => true]);
                    echo $this->Form->control('SENT', ['empty' => true]);
                    echo $this->Form->control('CANCELLED', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
