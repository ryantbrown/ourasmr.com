<?php namespace Asmr\Repositories;

use Asmr\Models\Folder;
use Illuminate\Contracts\Events\Dispatcher;


class FolderRepository extends Repository {

    protected $events;
    protected $users;

    public function __construct(Dispatcher $events, UserRepository $users)
    {
        $this->events = $events;
        $this->users = $users;
    }

    public function find($id)
    {
        return Folder::find($id);
    }

    public function create(Array $data)
    {
        $folder = new Folder;
        $folder->name = $data['name'];
        $folder->parent_id = isset($data['parent_id']) ?: 0;
        $folder->save();

        return $folder;
    }

    public function update($id, Array $data)
    {
        $folder = $this->find($id);

        foreach($data as $key => $val)
        {
            $folder->{$key} = $val;
        }

        $folder->save();

        return $folder;

    }

    public function delete($id)
    {
        Folder::destroy($id);
    }

}