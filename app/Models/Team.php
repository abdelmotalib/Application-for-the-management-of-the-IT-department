<?php

namespace App\Models;
use App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'teamLeader_id',
        'members'
    ];

    /**
     * Get the leader associated with the team.
     */


    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function leader()
    {
        return $this->belongsTo(TeamLeader::class);
    }

    
    /**
     * Get the member for the team.
     */
    public function members()
    {
        return $this->hasMany(TeamMember::class);
    }



}