<?php

namespace Modules\User\Repositories;

use Closure;

interface UserRepositoryInterface
{
    /**
     * Finds a user by the given primary key.
     *
     * @param  int  $id
     * @return \Modules\User\Entities\UserInterface
     */
    public function findById($id);

    /**
     * Finds a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Modules\User\Entities\UserInterface
     */
    public function findByCredentials(array $credentials);

    /**
     * Finds a user by the given persistence code.
     *
     * @param  string  $code
     * @return \Modules\User\Entities\UserInterface
     */
    public function findByPersistenceCode($code);

    /**
     * Records a login for the given user.
     *
     * @param  \Modules\User\Entities\UserInterface  $user
     * @return \Modules\User\Entities\UserInterface|bool
     */
    public function recordLogin(UserInterface $user);

    /**
     * Records a logout for the given user.
     *
     * @param  \Modules\User\Entities\UserInterface  $user
     * @return \Modules\User\Entities\UserInterface|bool
     */
    public function recordLogout(UserInterface $user);

    /**
     * Validate the password of the given user.
     *
     * @param  \Modules\User\Entities\UserInterface  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(UserInterface $user, array $credentials);

    /**
     * Validate if the given user is valid for creation.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validForCreation(array $credentials);

    /**
     * Validate if the given user is valid for updating.
     *
     * @param  \Modules\User\Entities\UserInterface|int  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validForUpdate($user, array $credentials);

    /**
     * Creates a user.
     *
     * @param  array  $credentials
     * @param  \Closure  $callback
     * @return \Modules\User\Entities\UserInterface
     */
    public function create(array $credentials, Closure $callback = null);

    /**
     * Updates a user.
     *
     * @param  \Modules\User\Entities\UserInterface|int  $user
     * @param  array  $credentials
     * @return \Modules\User\Entities\UserInterface
     */
    public function update($user, array $credentials);
}
