<?php

namespace Modules\Core;

use Module\Auth\Repositories\ActivationRepositoryInterface;
use Module\Auth\Repositories\ReminderRepositoryInterface;

class Duyog
{
    /**
     * The Activations repository.
     *
     * @var \Module\Auth\Repositories\ActivationRepositoryInterface
     */
    protected $activations;

    /**
     * The Reminders repository.
     *
     * @var \Module\Auth\Repositories\ReminderRepositoryInterface
     */
    protected $reminders;


    

    /**
     * Returns the activations repository.
     *
     * @return \Module\Auth\Repositories\ActivationRepositoryInterface
     */
    public function getActivationRepository()
    {
        return $this->activations;
    }

    /**
     * Sets the activations repository.
     *
     * @param  \Module\Auth\Repositories\ActivationRepositoryInterface  $activations
     * @return void
     */
    public function setActivationRepository(ActivationRepositoryInterface $activations)
    {
        $this->activations = $activations;
    }

    /**
     * Returns the reminders repository.
     *
     * @return \Module\Auth\Repositories\ReminderRepositoryInterface
     */
    public function getReminderRepository()
    {
        return $this->reminders;
    }

    /**
     * Sets the reminders repository.
     *
     * @param  \Module\Auth\Repositories\ReminderRepositoryInterface  $reminders
     * @return void
     */
    public function setReminderRepository(ReminderRepositoryInterface $reminders)
    {
        $this->reminders = $reminders;
    }
}