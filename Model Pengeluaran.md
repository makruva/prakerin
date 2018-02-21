**Nama Tabel** : Pengeluaran

**Struktur Tabel**
<table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>Tipe Data</th>
      <th>Indeks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>id_pengeluaran</td>
      <td>int</td>
      <td>primary, Auto Increment</td>
    </tr>
    <tr>
      <td>id_toko</td>
      <td>int</td>
      <td>indeks</td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td>varchar</td>
      <td></td>
    </tr>
    <tr>
      <td>jumlah</td>
      <td>varchar</td>
      <td></td>
    </tr>
    <tr>
      <td>keterangan</td>
      <td>text</td>
      <td></td>
    </tr>
    <tr>
      <td>id_user</td>
      <td>int</td>
      <td>indeks</td>
    </tr>
  </tbody>
</table>

Dengan mengacu tabel database di atas, buat model codeigniter di bawah ini:
```php
/**
 * Fungsi untuk menampilkan semua data yang ada pada tabel 'pengeluaran'
 * yang memiliki id_toko=$id_toko
 * @param $id_toko int
 */
function lists($id_toko);

/**
 * Fungsi untuk menyisipkan data baru $data ke tabel 'pengeluaran'
 * @param $data array
 */
function insert($data);

/**
 * Fungsi untuk memperbarui baris data yang ada pada tabel 'pengeluaran'
 * yang memiliki id_pengeluaran=$id_pengeluaran
 * @param $id_pengeluaran int
 * @param $data array
 */
function update($id_pengeluaran,$data);

/**
 * Fungsi untuk menghapus baris data yang ada pada tabel 'pengeluaran'
 * yang memiliki id_pengeluaran=$id_pengeluaran
 * @param $id_pengeluaran int
 */
function delete($id_pengeluaran);
```
