<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public function MembersList($where){
        $data = $this->select()
            ->where($where)
            ->orderBy('sid', 'asc')
            ->get();
        return $data;

    }
}
