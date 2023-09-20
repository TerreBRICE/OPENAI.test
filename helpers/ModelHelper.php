<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\MseAnswer
 *
 * @property int $id_reponse
 * @property int $cle_detail_q
 * @property int $no_q
 * @property int $no_r
 * @property string|null $lib_auto_h
 * @property string|null $lib_auto_f
 * @property string|null $lib_miroir_h
 * @property string|null $lib_miroir_f
 * @property-read \App\Models\MseQuestionnaireDetail $mseQuestionnaireDetail
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereCleDetailQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereIdReponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereLibAutoF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereLibAutoH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereLibMiroirF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereLibMiroirH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereNoQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseAnswer whereNoR($value)
 * @mixin \Eloquent
 */
	class IdeHelperMseAnswer {}
}

namespace App\Models{
/**
 * App\Models\MseQuestion
 *
 * @property int $id_question
 * @property int $cle_detail_q
 * @property int $no_q
 * @property string|null $lib_auto_h
 * @property string|null $lib_auto_f
 * @property string|null $lib_miroir_h
 * @property string|null $lib_miroir_f
 * @property-read \App\Models\MseQuestionnaireDetail $mseQuestionnaireDetail
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereCleDetailQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereIdQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereLibAutoF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereLibAutoH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereLibMiroirF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereLibMiroirH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestion whereNoQ($value)
 * @mixin \Eloquent
 */
	class IdeHelperMseQuestion {}
}

namespace App\Models{
/**
 * App\Models\MseQuestionnaire
 *
 * @property int $id_questionnaire
 * @property string $titre_q
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MseQuestionnaireDetail> $mseQuestionnaireDetails
 * @property-read int|null $mse_questionnaire_details_count
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaire whereIdQuestionnaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaire whereTitreQ($value)
 * @mixin \Eloquent
 */
	class IdeHelperMseQuestionnaire {}
}

namespace App\Models{
/**
 * App\Models\MseQuestionnaireDetail
 *
 * @property int $id_detail_q
 * @property int $cle_questionnaire
 * @property string $cle_langue
 * @property string|null $titre_dq
 * @property bool $flag_actif
 * @property-read \App\Models\MseQuestionnaire $mseQuestionnaire
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail whereCleLangue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail whereCleQuestionnaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail whereFlagActif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail whereIdDetailQ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MseQuestionnaireDetail whereTitreDq($value)
 * @mixin \Eloquent
 */
	class IdeHelperMseQuestionnaireDetail {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

