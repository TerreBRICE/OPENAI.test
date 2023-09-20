<?php

namespace App\Http\Controllers;

use App\Models\MseAnswer;
use App\Models\MseQuestion;
use OpenAI\Laravel\Facades\OpenAI;

class MseQuestionController extends Controller
{
    public function show(int $questionNth)
    {
        $question = MseQuestion::where('cle_detail_q', 5)
            ->where('no_q', $questionNth)
            ->first();

        $answers = MseAnswer::where('cle_detail_q', 5)
            ->where('no_q', $questionNth)
            ->get();

        $data = [];

        $data ['q'] = $question->lib_auto_h;

        foreach ($answers as $answer) {
            $data ['a' . $answer->no_r] = $answer->lib_auto_h;
        }


        return $this->translate($data, 'german');
    }

    public function translate(array $data, string $language)
    {
        $response = OpenAI::completions()->create(
            [
                'model' => 'text-davinci-003',
                'temperature' => 0.7,
                'max_tokens' => 1000,
                'prompt' => 'the following json is a question and 5 possibles answers : '.json_encode($data).'Translate the values and not the keys in '.$language.' and provide your response in json format:',
            ]);

        return $response['choices'][0]['text'];
    }
}
