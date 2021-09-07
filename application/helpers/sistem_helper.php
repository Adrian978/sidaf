<?php

function getjumbulan($bulan){
    $ci=& get_instance();
    $q = $ci->db->query("SELECT * FROM rekap where bulan='$bulan'")->num_rows();
    return $q;
}
