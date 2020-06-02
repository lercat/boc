<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $guarded = [];

    public function profilImage()
    {
        $imagePath = ($this->image) ?  $this->image : 'profil/P7C5dHSxvqAaqkwl2Aq0KTolYPQJAUKCy13upSgo.png';
        return '/storage/' . $imagePath;

    }

    /* un profil peut avoir plusieurs followers*/
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
