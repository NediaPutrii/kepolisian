<?php 
    require '../model/fungsi.php';

     $laporan = lihat("SELECT * FROM detailpenduduk INNER JOIN laporan ON detailpenduduk.no_lapkejadian=laporan.no_lapkejadian INNER JOIN penduduk ON detailpenduduk.nik=penduduk.nik INNER JOIN detailstatus ON detailstatus.nik=detailpenduduk.nik INNER JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status order by detailpenduduk.nik 
    	");

?>
