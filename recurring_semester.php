<?php

class Semester
{
    public $semesters;

    function getCurrentSemester()
    {
        foreach ($this->semesters as $semesters){
            $start = strtotime($semesters['start']);
            $end = strtotime($semesters['end']);
            $now = strtotime(date('Y-m-d'));
            if ($now > $start && $now < $end) {
                return $semesters['semester'];
            }
        }
    }
}

//TODO pas input semester, pastikan ada validasi bahwa start dan end yg baru tidak masuk di salah satu periode yang sudah ada
$semesters = [
    ['semester' => 'Gasal 2020/2021', 'start' => '2020-9-20', 'end' => '2021-1-31'],
    ['semester' => 'Genap 2020/2021', 'start' => '2021-02-01', 'end' => '2021-09-19'],
    ['semester' => 'Gasal 2021/2022', 'start' => '2021-09-20', 'end' => '2022-01-31'],
    ['semester' => 'Genap 2021/2022', 'start' => '2022-2-1', 'end' => '2022-8-30']
];

$semester = new Semester;
$semester->semesters = $semesters;
echo $semester->getCurrentSemester();