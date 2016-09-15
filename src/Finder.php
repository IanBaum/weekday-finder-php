<?php
    class Finder
    {
      private $month;
      private $date;
      private $year;
      private

      function find_day()
      {
        $month = $this->month;
        $date = $this->date;
        $year = $this->year;

        $weekdays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
        $months_list = ['january', 'febuary', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
        $months_values = [6, 2, 2, 5, 0, 3, 5, 1, 4, 6, 2, 4];
        $year_codes = [2000, 2001, 2002, 2003];

        

        $day_of_week = $months + $date + $year_codes[""];
      }
    }
 ?>

<!-- Month Code + Date + Year Code = Day of Week Code
May + 1 + 2000 = ?
0 + 1 + 0 = 1
while (total > 6){
  total -= 7;
} -->
