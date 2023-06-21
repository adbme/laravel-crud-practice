<?php



namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newEvent extends Model
{
    use HasFactory;
    protected $table = 't_new_event';
    protected $primaryKey = 'id_new_event';
    protected $fillable = ['name_surname_author_new_event',
        'title_new_event',
        'description_new_event',
        'join_file_new_event',
        'join_link_new_event',
        'date_new_event',
        'hour_new_event',
        'room_new_event',
        'plan_room_new_event',
        'num_disposition_new_event'];

}

