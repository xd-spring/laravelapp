<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams_player extends Model
{

    public $timestamps = false;

    protected $primaryKey = 'teams_players_id';    

    protected $guarded = array('teams_players_id');
        
    public static $rules = array(
        'teams_players_name' => 'required|string|max:100',
        'teams_players_number' => 'numeric|between:0,99',
        'teams_players_memo' => 'max:255',
    );   
    
    public function getData()
    {
        return $this->teams_players_name . '(' . $this->teams_players_number . ')'  . $this->teams_players_memo . $this->football_team->football_teams_id;
    }
   
    public function football_team()
    {
        return $this->belongsTo('App\Football_team','football_teams_id','football_teams_id');
    }
}
