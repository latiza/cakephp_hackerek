<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Developer $developer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Developer'), ['action' => 'edit', $developer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Developer'), ['action' => 'delete', $developer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $developer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Developers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Developer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="developers view content">
            <h3><?= h($developer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($developer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($developer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($developer->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($developer->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('On Vacation') ?></th>
                    <td><?= $developer->on_vacation ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Appointments') ?></h4>
                <?php if (!empty($developer->appointments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Customer') ?></th>
                            <th><?= __('Developer Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($developer->appointments as $appointments) : ?>
                        <tr>
                            <td><?= h($appointments->id) ?></td>
                            <td><?= $this->Html->link($this->Format->getName($appointments->customer_id, 'customers') , ['controller' => 'customers', 'action' => 'view', $appointments->customer_id, 'customers'])?></td>
                            <td><?= h($appointments->developer_id) ?></td>
                            <td><?= h($appointments->date) ?></td>
                            <td><?= h($appointments->created) ?></td>
                            <td><?= h($appointments->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
