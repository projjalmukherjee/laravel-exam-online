<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\QuestionAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionAnswerSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $qdata = [
            [
              'question' => "PHP stands for -",
              'question_type' => "PHP",
              'answer_with_options' => json_encode([
                     'options' =>[
                      'a'=> "Hypertext Preprocessor",
                      'b'=> "Pretext Hypertext Preprocessor",
                      'c'=> "Personal Home Processor",
                      'd'=> "None of the above"
                     ],
                     'correct' => 'a'
                    ]),

                ],
            [
                'question' => "Who is known as the father of PHP?",
                'question_type' => "PHP",
                'answer_with_options' => json_encode([
                       'options' =>[
                        'a'=> "Drek Kolkevi",
                        'b'=> "List Barely",
                        'c'=> "Rasmus Lerdrof",
                        'd'=> "None of the above"
                       ],
                       'correct' => 'c'
                      ]),
  
             ],
            [
                'question' => "Variable name in PHP starts with -",
                'question_type' => "PHP",
                'answer_with_options' => json_encode([
                       'options' =>[
                        'a'=> "! (Exclamation)",
                        'b'=> "$ (Dollar)",
                        'c'=> "& (Ampersand)",
                        'd'=> "# (Hash)"
                       ],
                       'correct' => 'b'
                      ]),
  
            ],
            [
                'question' => "What server support Ajax?",
                'question_type' => "Ajax",
                'answer_with_options' => json_encode([
                       'options' =>[
                        'a'=> "WWW",
                        'b'=> "SMTP",
                        'c'=> "HTTP",
                        'd'=> "All of the above"
                       ],
                       'correct' => 'c'
                      ]),
  
             ],
              [
                'question' => "Ajax stands for ______",
                'question_type' => "Ajax",
                'answer_with_options' => json_encode([
                       'options' =>[
                        'a'=> "Asynchronous JavaScript and XML",
                        'b'=> "Asynchronous JSON and XML",
                        'c'=> "Asynchronous Java and XML",
                        'd'=> "Asynchronous JavaScript and XMLHttpRequest"
                       ],
                       'correct' => 'a'
                      ]),
  
                ],
                [
                    'question' => "Ajax is used for creating _____",
                    'question_type' => "Ajax",
                    'answer_with_options' => json_encode([
                            'options' =>[
                            'a'=> "Web applications",
                            'b'=> "Desktop applications",
                            'c'=> "System applications",
                            'd'=> "Both A. and B."
                            ],
                            'correct' => 'a'
                            ]),

                ],
                    
                    [
                        'question' => "Who developed jQuery, and in which year it was first released?",
                        'question_type' => "Jquery",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "John Richard in 2001",
                                'b'=> "Mark Bensman in 2004",
                                'c'=> "John Resig in 2006",
                                'd'=> "None of the above"
                                ],
                                'correct' => 'c'
                                ]),
            
                    ],
                    [
                        'question' => "jQuery is a -",
                        'question_type' => "Jquery",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "JavaScript method",
                                'b'=> "JavaScript library",
                                'c'=> "JSON library",
                                'd'=> "PHP method"
                                ],
                                'correct' => 'b'
                                ]),
            
                    ],
                    [
                        'question' => "Which of the following sign is used as a shortcut for jQuery?",
                        'question_type' => "Jquery",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "the % sign",
                                'b'=> "the & sign",
                                'c'=> "the $ sign",
                                'd'=> "the @ sign"
                                ],
                                'correct' => 'c'
                                ]),
            
                    ],
                    [
                        'question' => "HTML stands for -",
                        'question_type' => "Html",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "HighText Machine Language",
                                'b'=> "HyperText and links Markup Language",
                                'c'=> "HyperText Markup Language",
                                'd'=> "None of these"
                                ],
                                'correct' => 'c'
                                ]),
            
                    ],
                    [
                        'question' => "Which of the following tag is used for inserting the largest heading in HTML?",
                        'question_type' => "Html",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "<h3>",
                                'b'=> "<h1>",
                                'c'=> "<h5>",
                                'd'=> "<h6>"
                                ],
                                'correct' => 'b'
                                ]),
            
                    ],
                    [
                        'question' => "How to create an unordered list (a list with the list items in bullets) in HTML?",
                        'question_type' => "Html",
                        'answer_with_options' => json_encode([
                                'options' =>[
                                'a'=> "<ul>",
                                'b'=> "<ol>",
                                'c'=> "<li>",
                                'd'=> "<i>"
                                ],
                                'correct' => 'b'
                                ]),
            
                    ],


                ];

                foreach($qdata as $data) {

                    QuestionAnswer::create($data);

                }
       
    }
}
