<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($customer->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($customer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($customer->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Zip') ?></th>
                    <td><?= h($customer->zip) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($customer->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($customer->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $customer->has('service') ? $this->Html->link($customer->service->name, ['controller' => 'Services', 'action' => 'view', $customer->service->id]) : '' ?></td>
                </tr>
                
            </table>
            <div class="related">
                <h4><?= __('Related Appointments') ?></h4>
                <?php if (!empty($customer->appointments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            
                            <th><?= __('Developer Id') ?></th>
                            <th><?= __('Date') ?></th>
                            
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->appointments as $appointments) : ?>
                        <tr>
                            
                        <td><?= $this->Html->link($this->Format->getName($appointments->developer_id, 'developers') , ['controller' => 'Developers', 'action' => 'view', $appointments->developer_id, 'developers'])?></td>
                            <td><?= h($appointments->date->i18nFormat('yyyy-MMM-dd HH:mm:ss')) ?></td>
                            
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
            <div class="related">
                <h4><?= __('Related Invoices') ?></h4>
                <?php if (!empty($customer->invoices)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Services') ?></th>
                            <th><?= __('Due Date') ?></th>
                            <th><?= __('Created') ?></th>
                           
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($customer->invoices as $invoices) : ?>
                        <tr>
                            <td><?= h($invoices->id) ?></td>
                            
                            <td><?= h($invoices->amount) ?> Ft</td>
                            <td><?= h($invoices->services) ?></td>
                            <td><?= h($invoices->due_date->i18nFormat('yyyy-MMM-dd HH:mm:ss')) ?></td>
                            <td><?= h($invoices->created->i18nFormat('yyyy-MMM-dd HH:mm:ss')) ?></td>
                            
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
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
