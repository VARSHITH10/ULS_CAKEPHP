<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrcidBatchCreator[]|\Cake\Collection\CollectionInterface $orcidBatchCreators
 */
?>
<div class="Adminstrators index content">
    <?= $this->Html->link(__('New Adminstrators'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Adminstrators') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Enabled') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orcidBatchCreators as $orcidBatchCreator): ?>
                    
                <tr>
                    
                    <td><?= h($orcidBatchCreator->NAME) ?></td>
                    <td><?php 
                       if ($orcidBatchCreator->FLAGS ===  1) {
                        echo "YES";
                      }
                      else { 
                        echo 'NO';
                      }
			          ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orcidBatchCreator->ID]) ?>
                    <?php
                        if($orcidBatchCreator->FLAGS ===  1) {
                            echo $this->Form->postLink(__('Disable'), ['action' => 'disable', $orcidBatchCreator->ID], ['confirm' => __('Are you sure you want to disable # {0}?', $orcidBatchCreator->NAME)]);
                        }
                        else {
                            echo $this->Form->postLink(__('Enable'), ['action' => 'enable', $orcidBatchCreator->ID], ['confirm' => __('Are you sure you want to enable # {0}?', $orcidBatchCreator->NAME)]);
                        }
                        ?>
            
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
