<?php

namespace Brain\Games\Even;

use function Brain\Games\Cli\setUser;
use function cli\line;
use function cli\prompt;

const MIN_NUMBER = 1;
const MAX_NUMBER = 1000;
const ROUNDS = 3;

function even()
{
    $userName = setUser();
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < ROUNDS; $i += 1) {
        $numToShow = mt_rand(MIN_NUMBER, MAX_NUMBER);
        line("Question: %s", $numToShow);
        $answer = prompt('Your answer');
        $correctAnswer = isEven($numToShow) ? 'yes' : 'no';
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            return;
        }
    }
    line('Congratulations, %s!', $userName);
}

function isEven($number)
{
    return $number % 2 === 0;
}