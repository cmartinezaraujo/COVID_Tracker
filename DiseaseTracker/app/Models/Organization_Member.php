<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization_Member extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Organization_Members';

    protected $fillable = [
            'organization_id', 'member_id', 'role', 'status'
    ];

    /**
     * Cesar: This function establishes the relationship that
     * each organization_member is one user 
     */
    public function user(){
        return $this->hasOne(User::class, 'id', 'member_id');
    }
}
