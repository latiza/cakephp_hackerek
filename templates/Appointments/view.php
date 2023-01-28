<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appointments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments view content">
            <h3><?= h($appointment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $appointment->has('customer') ? $this->Html->link($appointment->customer->name, ['controller' => 'Customers', 'action' => 'view', $appointment->customer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Developer') ?></th>
                    <td><?= $appointment->has('developer') ? $this->Html->link($appointment->developer->name, ['controller' => 'Developers', 'action' => 'view', $appointment->developer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appointment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($appointment->date->i18nFormat('yyyy-MMM-dd HH:mm:ss') ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($appointment->created->i18nFormat('yyyy-MMM-dd HH:mm:ss') ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($appointment->modified->i18nFormat('yyyy-MMM-dd HH:mm:ss')) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
