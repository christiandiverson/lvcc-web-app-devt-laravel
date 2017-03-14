<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class post extends Model
{
    

    /*protected $fillable = [
    	'user_id','content','live','post_on'
    ];

    public function setLiveAttribute($value)
    {
    	$this->attributes['live'] = (boolean) ($value);
    }

    public function setStatusAttribute($value)
    {
    	$this->attributes['status'] =  lol ($value);
    }
    */

    protected $dates= ['post_on'];

    public function getshortstatusAttribute()
    {
        return substr($this->status, 0,random_int(60,150)). '....';
    }

    public function setPostonAttribute($value)
    {
        $this->attributes['post_on']=Carbon::parse($value);
    }
}
