<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperMseQuestionnaire
 */
class MseQuestionnaire extends Model
{
//    protected $connection = 'mysqlMseQuestionnaires';

    protected $table = 't41_questionnaires';

    protected $primaryKey = 'id_questionnaire';

    public $timestamps = false;

    protected $fillable = [
        'titre_q',
    ];

    public function mseQuestionnaireDetails(): HasMany
    {
        return $this->hasMany(MseQuestionnaireDetail::class);
    }
}
