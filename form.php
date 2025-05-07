<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("view/KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class FormMahasiswa implements KontrakView
{
    private $prosesmahasiswa; // Presenter yang dapat berinteraksi langsung dengan view
    private $tpl;
    private $data;
    private $id;

    function __construct($id = null)
    {
        //konstruktor
        $this->prosesmahasiswa = new ProsesMahasiswa();
        $this->id = $id;
        
        // Jika ada ID berarti mode edit
        if ($this->id) {
            $this->data = $this->prosesmahasiswa->getDataById($this->id);
        }
    }

    function tampil()
    {
        // Membaca template form.html
        $this->tpl = new Template("templates/form.html");
        
        // Set judul form
        $judul = ($this->id) ? "Edit Data Mahasiswa" : "Tambah Data Mahasiswa";
        $this->tpl->replace("DATA_JUDUL", $judul);
        
        // Set nilai form jika mode edit
        if ($this->id) {
            $this->tpl->replace("DATA_ID", $this->id);
            $this->tpl->replace("DATA_NIM", $this->data['nim']);
            $this->tpl->replace("DATA_NAMA", $this->data['nama']);
            $this->tpl->replace("DATA_TEMPAT", $this->data['tempat']);
            $this->tpl->replace("DATA_TL", $this->data['tl']);
            
            // Set radio button gender
            $laki = ($this->data['gender'] == 'Laki-laki') ? 'checked' : '';
            $perempuan = ($this->data['gender'] == 'Perempuan') ? 'checked' : '';
            $this->tpl->replace("DATA_LAKI", $laki);
            $this->tpl->replace("DATA_PEREMPUAN", $perempuan);
            
            $this->tpl->replace("DATA_EMAIL", $this->data['email']);
            $this->tpl->replace("DATA_TELP", $this->data['telp']);
            $this->tpl->replace("DATA_ACTION", "update");
        } else {
            // Mode tambah data
            $this->tpl->replace("DATA_ID", "");
            $this->tpl->replace("DATA_NIM", "");
            $this->tpl->replace("DATA_NAMA", "");
            $this->tpl->replace("DATA_TEMPAT", "");
            $this->tpl->replace("DATA_TL", "");
            $this->tpl->replace("DATA_LAKI", "");
            $this->tpl->replace("DATA_PEREMPUAN", "");
            $this->tpl->replace("DATA_EMAIL", "");
            $this->tpl->replace("DATA_TELP", "");
            $this->tpl->replace("DATA_ACTION", "add");
        }

        // Menampilkan ke layar
        $this->tpl->write();
    }
}

// Proses form
if (isset($_GET['id'])) {
    $form = new FormMahasiswa($_GET['id']);
} else {
    $form = new FormMahasiswa();
}

$form->tampil();
?>