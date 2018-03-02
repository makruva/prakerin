**Nama Model** : M_aduan

**Nama Tabel** : aduan

**Struktur Tabel**
<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tipe Data</th>
      <th>Indeks</th>
      <th>Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id_aduan</td>
      <td>unsigned int</td>
      <td>primary, Auto Increment</td>
      <td></td>
    </tr>
    <tr>
      <td>id_user</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td>ID user yang diadukan</td>
    </tr>
    <tr>
      <td>nama_pelangan</td>
      <td>varchar(100)</td>
      <td></td>
      <td>Nama pelanggan yang mengajukan pengaduan</td>
    </tr>
    <tr>
      <td>email</td>
      <td>varchar(100)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>no_hp</td>
      <td>varchar(20)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>alamat</td>
      <td>text</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>isi_aduan</td>
      <td>text</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>status</td>
      <td>int(1)</td>
      <td></td>
      <td><b>0</b>: belum diproses; <b>1</b>: disetujui, <b>2</b>:ditolak, <b>3</b>:dihapus</td>
    </tr>
    <tr>
      <td>id_petugas</td>
      <td>unsigned int</td>
      <td></td>
      <td>ID petugas yang memproses aduan</td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td>varchar(20)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>ip</td>
      <td>varchar(20)</td>
      <td></td>
      <td>Alamat IP pelanggan yang mengajukan aduan</td>
    </tr>
  </tbody>
</table>



Berdasarkan tabel di atas, buat model di bawah ini:
```php
/**
 * Fungsi untuk menysisipkan data baru
 * @param $data array
 */
function insert($data);

/**
 * Fungsi untuk menampilkan daftar aduan.
 *
 * @param $id_user int IF $id_user==null, tampilkan semua data
 *                      ELSE tampilkan data berdasarkan $id_user
 *
 * @return object or false
 */
function lists($id_user=null);

/**
 * Fungsi untuk menampilkan data detail aduan.
 *
 * @param $id_aduan int
 *
 * @return object or false
 */
function detail($id_aduan);

/**
 * Fungsi untuk memperbarui detail riwayat kredit
 *
 * @param $id_status int
 * @param $new_status int
 * @param $id_petugas int Jika $id_petugas==null, kolom id_petugas tidak diupdate
 */
function change_status($id_aduan,$new_status,$id_petugas=null);
```
