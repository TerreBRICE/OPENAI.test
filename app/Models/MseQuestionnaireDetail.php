<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperMseQuestionnaireDetail
 */
class MseQuestionnaireDetail extends Model
{
//    protected $connection = 'mysqlMseQuestionnaires';

    protected $table = 't42_questionnaires_details';

    protected $primaryKey = 'id_detail_q';

    public $timestamps = false;

    protected $fillable = [
        'cle_questionnaire',
        'cle_langue',
        'titre_dq',
        'flag_actif',
    ];

    protected $casts = [
        'flag_actif' => 'boolean'
    ];

    public function mseQuestionnaire(): BelongsTo
    {
        return $this->belongsTo(MseQuestionnaire::class,'cle_questionnaire');
    }
}
