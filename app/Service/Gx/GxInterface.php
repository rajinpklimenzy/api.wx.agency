<?php

namespace app\Service\Gx;
interface GxInterface
{
    public function getKirimList();
    public function deleteEmail($email);
    public function getKirimListCount();
}
