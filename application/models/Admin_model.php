<?php

class Admin_model extends CI_Model
{
    public function aturJadwal()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'jadwal' => time()
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pendaftaran_vaksin1', $data);
    }
}