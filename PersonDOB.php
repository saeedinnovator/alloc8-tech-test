<?php

class PersonDOB extends DateTime {
    
    public function getAge() {
        $current_date = new DateTime();
        $interval = $this->diff($current_date);
        return $interval->y;
    }

    public function getPlainTextAge() {
        $age = $this->getAge();
        if ($age < 17) {
            return 'Young';
        } elseif ($age >= 18 && $age <= 60) {
            return 'Adult';
        } else {
            return 'Senior';
        }
    }

    public function countWeekDays($weekday) {
        $current_date = new DateTime();
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($this, $interval, $current_date);
        $no_of_weekdays = 0;
        foreach ($period as $value) {
            if ($value->format('l') === $weekday) {
                $no_of_weekdays++;
            }
        }
        return $no_of_weekdays;
    }
}