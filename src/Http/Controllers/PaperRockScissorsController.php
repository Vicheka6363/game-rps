<?php

namespace Vendor\PaperRockScissorsGame\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaperRockScissorsController extends Controller
{
    public function play()
    {
        return view('paperrockscissorsgame::play');
    }

    public function playGame(Request $request)
    {
        $userChoice = $request->input('choice');
        $computerChoice = $this->generateComputerChoice();
        $result = $this->determineWinner($userChoice, $computerChoice);

        if (Auth::check()) {
            $user = Auth::user();
            $this->updateUserScore($user, $result);
        }

        return view('paperrockscissorsgame::result', [
            'userChoice' => $userChoice,
            'computerChoice' => $computerChoice,
            'result' => $result,
            'score' => Auth::check() ? Auth::user()->score : null,
        ]);
    }

    private function generateComputerChoice()
    {
        $choices = ['rock', 'paper', 'scissors'];
        return $choices[array_rand($choices)];
    }

    private function determineWinner($userChoice, $computerChoice)
    {
        // Game logic to determine the winner
        // Example logic:
        if ($userChoice == $computerChoice) {
            return 'Draw';
        } elseif (
            ($userChoice == 'rock' && $computerChoice == 'scissors') ||
            ($userChoice == 'paper' && $computerChoice == 'rock') ||
            ($userChoice == 'scissors' && $computerChoice == 'paper')
        ) {
            return 'Win';
        } else {
            return 'Lose';
        }
    }

    private function updateUserScore($user, $result)
    {
        // Update user score based on game result
        // Example logic:
        if ($result === 'Win') {
            $user->score += 1;
        } elseif ($result === 'Lose') {
            $user->score -= 1;
        }
        $user->save();
    }
}
