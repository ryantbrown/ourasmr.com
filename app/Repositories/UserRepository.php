<?php namespace Asmr\Repositories;

use Asmr\Models\User, \Hash;
use Illuminate\Contracts\Hashing\Hasher;
use Asmr\Exceptions\InvalidOauthDriverException;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Auth\Guard as Auth;


class UserRepository extends Repository {

    protected $events;
    protected $hasher;
    protected $auth;

    public function __construct(Dispatcher $events, Hasher $hasher, Auth $auth)
    {
        $this->events = $events;
        $this->hasher = $hasher;
        $this->auth = $auth;
    }

    public function currentUser()
    {
        return $this->auth->user();
    }

    public function findByUsernameOrEmail($username, $email)
    {
        return User::where('username', $username)->orWhere('email', $email)->first();
    }

    public function create($data)
    {
        $user = new User;
        $user->email = $data['email'];
        $user->username = isset($data['username']) ?: null;
        $user->password = Hash::make($data['password']);
        $user->save();

        $this->events->fire('user.register', [$user]);

        return $user;
    }

    public function findOrCreate($userData, $driver)
    {
        $dataMethod = 'setData'.ucfirst($driver);

        if(!method_exists($this, $dataMethod))
        {
            throw new InvalidOauthDriverException('The oauth driver "'.ucfirst($driver).'" does not exist');
        }

        $data = $this->{$dataMethod}($userData);

        return $this->findByUsernameOrEmail($data['username'], $data['email'])
            or $user = $this->create($data);
    }

    private function setDataTwitter($data)
    {
        return [
            'username' => $data->nickname,
            'password' => $data->nickname,
            'email' => null
        ];
    }

    private function setDataFacebook($data)
    {
        return [
            'username' => $data->nickname,
            'password' => $data->email,
            'email' => $data->email
        ];
    }
}