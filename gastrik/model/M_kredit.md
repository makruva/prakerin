**Nama Mode** : M_kredit

**Nama Tabel** : riwayat_kredit

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
      <td>id_riwayat</td>
      <td>unsigned int</td>
      <td>primary, Auto Increment</td>
      <td></td>
    </tr>
    <tr>
      <td>id_penjualan</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td>varchar(15)</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>jumlah_bayar</td>
      <td>varchar(50)</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

Berdasarkan tabel di atas dan tabel **penjualan**, buat model di bawah ini:
```php
/**
 * Fungsi untuk menysisipkan data baru
 * @param $data array
 */
function insert($data);

/**
 * Fungsi untuk menampilkan data riwayat penjualan.
 * Data yang ditampilkan yaitu:
 * - Tanggal
 * - Jumlah bayar
 *
 * @param $id_penjualan int
 *
 * @return object or false
 */
function detail($id_penjualan);

/**
 * Fungsi untuk memperbarui detail riwayat kredit
 *
 * @param $id_riwayat int
 * @param $data array
 */
function update($id_riwayat,$data);

/**
 * Fungsi untuk menghapus baris data
 *
 * @param $id_riwayat int
 */
function delete($id_riwayat);
```
