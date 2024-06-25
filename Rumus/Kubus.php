<?php

namespace Rumus;

class Kubus
{
  function volumeA($sisi)
  {
    $volume = pow($sisi, 3);
    return $volume;
  }

  function luas($sisi)
  {
    $luas = 6 * ($sisi * $sisi);
    return $luas;
  }

  function keliling($sisi)
  {
    $keliling = 12 * $sisi;
    return $keliling;
  }
}
