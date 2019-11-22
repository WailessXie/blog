<?php


namespace App\Tools;


class Archive
{
    /**
     * @desc 按时间归档函数实现
     * @param array $arrData 传入需要归档类所需参数
     * @return array
     * @author mengdejun
     */
    public function ArchivesDocument($arrData)
    {
        $rv = array();
        foreach ($arrData as $index => $value) {
            $archivesTime = date("Y-m", strtotime($value->archive_time));
            $archivesDate = date("m-d",strtotime($value->archive_time));
            $rv [$archivesTime] [$archivesDate][] = $value;
        }
        return $rv;
    }
}