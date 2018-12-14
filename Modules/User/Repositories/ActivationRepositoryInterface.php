<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\UserInterface;

interface ActivationRepositoryInterface
{
    /**
     * Create a new activation record and code.
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @return \Modules\Auth\Entities\ActivationInterface
     */
    public function create(UserInterface $user);

    /**
     * Checks if a valid activation for the given user exists.
     *
     * @param  \Modules\User\Entities\UserInterface $user
     * @param  string  $code
     * @return \Modules\Auth\Entities\ActivationInterface|bool
     */
    public function exists(UserInterface $user, $code = null);

    /**
     * Completes the activation for the given user.
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @param  string  $code
     * @return bool
     */
    public function complete(UserInterface $user, $code);

    /**
     * Checks if a valid activation has been completed.
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @return Modules\Auth\Entities\ActivationInterface|bool
     */
    public function completed(UserInterface $user);

    /**
     * Remove an existing activation (deactivate).
     *
     * @param  Modules\User\Entities\UserInterface  $user
     * @return bool|null
     */
    public function remove(UserInterface $user);

    /**
     * Remove expired activation codes.
     *
     * @return int
     */
    public function removeExpired();
}
