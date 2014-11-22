<?php namespace Asmr\Repositories;

use Asmr\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Asmr\Exceptions\InvalidOauthDriverException;

class UserRepository extends Repository {

    public function findByUsernameOrEmail($username, $email)
    {
        return User::where('username', $username)->orWhere('email', $email)->first();
    }

    public function create($data)
    {
        $user = new User;
        $user->email = $data['email'];
        $user->username = isset($data['username']) ? $data['username'] : null;
        $user->password = is_null($data['password']) ? null : \Hash::make($data['password']);
        $user->save();

        \Event::fire('user.register', [$user]);

        return $user;
    }

    public function findOrCreate($userData, $driver)
    {
        $dataMethod = 'setData'.ucfirst($driver);

        if(!method_exists($this, $dataMethod))
        {
            throw new InvalidOauthDriverException('That oauth driver does not exist');
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