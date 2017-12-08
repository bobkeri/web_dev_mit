<?php

$number  = rand(1, 100);
$guesses = 0;
$won   = false;
$handle  = fopen('php://stdin', 'r');

echo "\nI'm thinking of a number between 1 and 100...\nCan you guess the number?\n\n";

while (!$won)
{
  $guesses++;
  echo 'What is your guess? ';

  $guess = trim(fgets($handle));

  if (preg_match('/\d/', $guess))
  {
    if ($guess > $number)
    {
      echo "\033[0;31mToo high...\033[0m\n";
    }
    elseif ($guess < $number)
    {
      echo "\033[0;31mToo low...\033[0m\n";
    }
    elseif ($guess == $number)
    {
      echo "\033[0;32m\nYou guessed it!\033[0m\n";
      printf('It took you %d ' . ngettext('guess', 'guesses', $guesses) . "!\n",  $guesses);
<?php

    $number  = rand(1, 100);
    $guesses = 0;
    $won   = false;
    $handle  = fopen('php://stdin', 'r');

    echo "\nI'm thinking of a number between 1 and 100...\nCan you guess the number?\n\n";

    while (!$won)
    {
      $guesses++;
      echo 'What is your guess? ';

      $guess = trim(fgets($handle));

      if (preg_match('/\d/', $guess))
      {
        if ($guess > $number)
        {
          echo "\033[0;31mToo high...\033[0m\n";
        }
        elseif ($guess < $number)
        {
          echo "\033[0;31mToo low...\033[0m\n";
        }
        elseif ($guess == $number)
        {
          echo "\033[0;32m\nYou guessed it!\033[0m\n";
          printf('It took you %d ' . ngettext('guess', 'guesses', $guesses) . "!\n",  $guesses);
          exit;
        }
      }
    }

?>