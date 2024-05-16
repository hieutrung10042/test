<?php
    $start = 0;
    $end = 100;
    $countSoChan = 0;
    $countSoLe = 0;
    $resultSochan = null;
    $resultSoLe = null;
    for( $i=$start;$i<=$end;$i++)
    {
        if($i%2==0)
        {
            $resultSochan.=$i.'<br>';
            $countSoChan ++;
        }
        else
        {
            $resultSoLe.=$i.'<br>';
            $countSoLe++;
        }
    }
    if($countSoChan >0)
        {
            echo " Tìm thấy". $countSoChan."số chẵn là<br>".$resultSochan;
        }
    else
    {
        echo "Không tìm thấy số nào";
    }
    if($countSoLe >0)
    {
        echo " Tìm thấy". $countSoLe."số chẵn là".$resultSoLe;

    }
else
{
    echo "Không tìm thấy số nào";
}