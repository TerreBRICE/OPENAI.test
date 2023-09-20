<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperMseAnswer
 */
class MseAnswer extends Model
{
//    protected $connection = 'mysqlMseQuestionnaires';

    protected $table = 't44_reponses';

    protected $primaryKey = 'id_reponse';

    public $timestamps = false;

    protected $fillable = [
        'cle_detail_q',
        'no_q',
        'no_r',
        'lib_auto_h',
        'lib_auto_f',
        'lib_miroir_h',
        'lib_miroir_f',
    ];

    public function mseQuestionnaireDetail(): BelongsTo
    {
        return $this->belongsTo(MseQuestionnaireDetail::class, 'cle_detail_q');
    }
}
