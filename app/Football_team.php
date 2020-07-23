<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Football_team extends Model
{
    
    public $timestamps = false;

    protected $primaryKey = 'football_teams_id';
    
    protected $guarded = array('football_teams_id');

    public static $rules = array(
        'football_teams_name' =>'required|string|max:100',
        'football_teams_memo' =>'max:255',
    );

    public function getData()
    {
        return $this->football_teams_id . ': ' . $this->football_teams_name . ' (' . $this->football_teams_memo . ')';
    }

    public function teams_player()
    {
        return $this->hasMany('App\Teams_player','football_teams_id','football_teams_id');
    }
}
