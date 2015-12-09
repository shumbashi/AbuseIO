<?php namespace AbuseIO\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Note
 * @package AbuseIO\Models
 * @property integer $ticket_id
 * @property string $submitter
 * @property string $text
 * @property boolean $hidden
 * @property boolean $viewed
 */
class Note extends Model
{

    use SoftDeletes;

    protected $table    = 'notes';

    protected $fillable = [
        'ticket_id',
        'submitter',
        'text',
        'hidden',
        'viewed',
    ];

    protected $guarded  = [
        'id'
    ];

    /*
     * Validation rules for this model being created
     *
     * @param  \AbuseIO\Models\Note $note
     * @return array $rules
     */
    public static function createRules($note)
    {
        $rules = [
            // TODO : No validation implemented at all?
        ];

        return $rules;
    }

    /*
     * Validation rules for this model being updated
     *
     * @param  \AbuseIO\Models\Note $note
     * @return array $rules
     */
    public static function updateRules($note)
    {
        $rules = [
            // TODO : No validation implemented at all?
        ];

        return $rules;
    }
}
