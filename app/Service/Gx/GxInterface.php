<?php

namespace App\Service\Gx;
interface GxInterface
{
    public function getKirimList();
    public function deleteEmail($email);
    public function getKirimListCount();
}
