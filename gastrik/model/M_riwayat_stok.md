**Nama Model** : M_riwayat_stok
**Nama Tabel** : riwayat_stok

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
      <td>id_transaksi</td>
      <td>unsigned int</td>
      <td>primary, Auto Increment</td>
      <td></td>
    </tr>
    <tr>
      <td>id_user</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>kode_transaksi</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>barang</td>
      <td>varchar(50)</td>
      <td></td>
      <td>value: kompor/bahan-bakar</td>
    </tr>
    <tr>
      <td>jumlah</td>
      <td>unsigned int</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>status</td>
      <td>int(3)</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

Dengan mengacu tabel database di atas, buat model codeigniter di bawah ini:
```php
/*
 * Fungsi untuk menyisipkan data baru
 *
 * @param $data array
 */
function insert($data);

/*
 * Fungsi untuk menampilkan data dari tabel riwayat_stok
 * dengan kode_transaksi=$kode_transaksi
 *    DAN id_user=$id_user
 *    DAN barang=$barang
 *
 * @param $kode_transaksi int
 * @param $id_user int
 * @param $barang string
 *
 * @return object or false
 */
function lists($kode_transaksi,$id_user,$barang='kompor');

/*
 * Fungsi untuk memperbarui data
 *
 * @param $id_transaksi int ID Transaksi
 * @param $data array Data baru
 */
function update($id_transaksi, $data);

/*
 * Fungsi untuk menghapus baris data
 *
 * @param $id_transaksi int ID Transaksi
 */
function delete($id_transaksi);
```
