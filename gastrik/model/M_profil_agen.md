**Nama Tabel** : profil_agen

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
      <td>id_profil</td>
      <td>unsigned int</td>
      <td>primary, Auto Increment</td>
      <td></td>
    </tr>
    <tr>
      <td>id_distributor</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>id_agen</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>id_keagenan</td>
      <td>varchar</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>nama</td>
      <td>varchar(50)</td>
      <td></td>
      <td>Nama lengkap Agen</td>
    </tr>
    <tr>
      <td>nik</td>
      <td>varchar(20)</td>
      <td></td>
      <td>No. Induk Kependudukan</td>
    </tr>
    <tr>
      <td>alamat</td>
      <td>text</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>provinsi</td>
      <td>int(3)</td>
      <td></td>
      <td>Kode provinsi dalam angka</td>
    </tr>
    <tr>
      <td>kabupaten</td>
      <td>int</td>
      <td></td>
      <td>Kode Kabupaten/Kota dalam angka</td>
    </tr>
    <tr>
      <td>kecamatan</td>
      <td>int</td>
      <td></td>
      <td>Kode kecamatan dalam angka</td>
    </tr>
    <tr>
      <td>kodepos</td>
      <td>varchar(6)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>kontak</td>
      <td>varchar</td>
      <td></td>
      <td>No telp/HP</td>
    </tr>
    <tr>
      <td>tanggal_daftar</td>
      <td>varchar</td>
      <td></td>
      <td>Tanggal daftar, format: Y/m/d</td>
    </tr>
  </tbody>
</table>

Dengan mengacu tabel database di atas, buat model codeigniter di bawah ini:
```php
/**
 * Fungsi untuk menysisipkan data baru
 * @param $data int
 */
function insert($data);

/**
 * Fungsi untuk menampilkan detail profil agen
 * yang memiliki id_agen=$id_agen
 * @param $id_agen int
 * @return object or false
 */
function detail($id_agen);

/**
 * Fungsi untuk memperbarui detail profil agen
 * yang memiliki id_agen=$id_agen
 * @param $id_agen int
 * @return object or false
 */
function update($id_agen,$data);

/**
 * Fungsi untuk menghapus baris profil agen
 * yang memiliki id_agen=$id_agen
 * @param $id_agen int
 * @return object or false
 */
function delete($id_agen);
```
