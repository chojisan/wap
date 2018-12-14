<?php

namespace Modules\Auth\Repositories;

use Modules\User\Entities\UserInterface;

interface ReminderRepositoryInterface
{
    /**
     * Create a new reminder record and code.
     *
     * @param  Modules\User\Entities\UserInterface $user
     * @return mixed
     */
    public function create(UserInterface $user);

    /**
     * Check if a valid reminder exists.
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @param  string  $code
     * @return bool
     */
    public function exists(UserInterface $user, $code = null);

    /**
     * Complete reminder for the given user.
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @param  string  $code
     * @param  string  $password
     * @return bool
     */
    public function complete(UserInterface $user, $code, $password);

    /**
     * Remove expired reminder codes.
     *
     * @return int
     */
    public function removeExpired();
}
