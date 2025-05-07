**Janji**

Saya Armelia Zahrah Mumtaz dengan NIM 2300801 berjanji mengerjakan TP9 DPBO dengan keberkahan-Nya, maka saya tidak akan melakukan kecurangan sesuai yang telah di spesifikasikan, Aamiin


## Desain Program

Database ini tampaknya merupakan bagian dari sistem informasi mahasiswa dengan nama `db_mvp`. Program ini dirancang untuk mengelola data mahasiswa di institusi pendidikan. 
Database ini memiliki satu tabel utama yaitu `mahasiswa` yang menyimpan informasi personal mahasiswa. Tabel ini memiliki struktur sebagai berikut:

1. `id` - Primary key otomatis yang bertambah untuk identifikasi unik setiap record
2. `nim` - Nomor Induk Mahasiswa
3. `nama` - Nama lengkap mahasiswa
4. `tempat` - Tempat lahir mahasiswa
5. `tl` - Tanggal lahir mahasiswa
6. `gender` - Jenis kelamin mahasiswa (Laki-laki atau Perempuan)
7. `email` - Alamat email mahasiswa
8. `telp` - Nomor telepon mahasiswa


## Alur Program

Alur Program dalam sistem ini terlihat sederhana namun fungsional:

1. **Pendaftaran/Input Data Mahasiswa**:
   - Saat mahasiswa baru mendaftar, sistem akan menyimpan data personal mereka ke dalam tabel `mahasiswa`
   - Setiap mahasiswa mendapatkan `id` unik secara otomatis
   - NIM (Nomor Induk Mahasiswa) diinput sebagai identitas akademik mahasiswa

2. **Penyimpanan Informasi Personal**:
   - Sistem menyimpan informasi identitas dasar mahasiswa (nama, tempat lahir, tanggal lahir, gender)
   - Informasi kontak mahasiswa juga disimpan (email dan nomor telepon)

3. **Penggunaan Data**:
   - Data ini kemungkinan digunakan untuk berbagai keperluan administratif seperti:
     - Pencatatan akademik
     - Komunikasi dengan mahasiswa
     - Pelaporan statistik mahasiswa
     - Manajemen data kependudukan mahasiswa

4. **Pengelolaan Data**:
   - Struktur tabel mendukung operasi CRUD (Create, Read, Update, Delete) standar
   - Admin sistem dapat menambah, melihat, mengedit, dan menghapus data mahasiswa

