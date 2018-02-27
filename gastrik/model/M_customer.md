**Nama Tabel** : customer

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
      <td>id_cust</td>
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
      <td>nama</td>
      <td>varchar(50)</td>
      <td></td>
      <td>Nama lengkap Agen</td>
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
      <td>jenis_kelamin</td>
      <td>varchar(1)</td>
      <td></td>
      <td>l: laki-laki; p: perempuan</td>
    </tr>
  </tbody>
</table>

Dengan mengacu tabel database di atas, buat model codeigniter di bawah ini:
```php
/*
 * Fungsi untuk menyisipkan data customer baru
 *
 * @param $data array
 */
function insert($data);

/*
 * Fungsi untuk menampilkan data customer berdasarkan id_agen
 *
 * @param $id_agen int
 *
 * return object or false
 */
function get_by_agen($id_agen);

/*
 * Fungsi untuk menampilkan data customer berdasarkan id_distributor
 *
 * @param $id_distributor int
 *
 * return object or false
 */
function get_by_distributor($id_distributor);

/*
 * Fungsi untuk menampilkan semua data customer
 *
 * return object or false
 */
function get_all();

/*
 * Fungsi untuk memperbarui data customer
 *
 * @param $id_cust int ID Customer
 * @param $data array Data baru
 */
function update($id_cust, $data);

/*
 * Fungsi untuk menghapus baris data customer
 *
 * @param $id_cust int ID Customer
 */
function delete($id_cust);
```
