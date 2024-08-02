<?php 

namespace App\Http\Controllers;


use BotMan\BotMan\BotMan;
use Illuminate\Support\Facades\Validator;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        // Immediately start the OnboardingConversation
        $botman->hears('hi', function(BotMan $bot) {
            $bot->startConversation(new OnboardingConversation());
        });

        // Listen for incoming messages
        $botman->listen();
    }
}

class OnboardingConversation extends Conversation
{
    protected $name;
    protected $email;

    public function askName()
    {
        $this->ask('Enter your name?', function(Answer $answer) {
            $this->name = $answer->getText();
            $this->askEmail();
        });
    }

    public function askEmail()
    {
        $this->ask('Enter your email address?', function(Answer $answer) {
            $validator = Validator::make(['email' => $answer->getText()], [
                'email' => 'email',
            ]);

            if ($validator->fails()) {
                return $this->repeat('That doesn\'t look like a valid email. Please enter a valid email.');
            }

            $this->email = $answer->getText();
            $this->say('Thanks!');
            $question = Question::create('Choose the topic:')
                ->addButtons([
                    Button::create('Billing questions')->value('Billin_ questions'),
                    Button::create('Support topics')->value('Support_topics'),
                    Button::create('Technical questions')->value('Technical_questions'),
                ]);
            if($question == "Billing questions"){
                $this->say('What type of question do you have?');
            }elseif($question == "Support topics"){
                $this->say('Choose the topic');
            }elseif($question == "Technical questions"){
                $this->say("Please follow this link to the chat with our technical expert - https://expertsquad.com/sign-in/");
            }
        });
    }

    public function askFurtherQuestions()
    {
        $this->ask('Do you have any other questions?', function(Answer $answer) {
            $this->say('Thank you for your question: ' . $answer->getText());
            // Handle the user's additional questions here
        });
    }

    public function run()
    {
        $this->askName();
    }
}
