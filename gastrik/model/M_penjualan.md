**Nama Model** : M_penjualan
**Nama Tabel** : penjualan

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
      <td>id_penjualan</td>
      <td>unsigned int</td>
      <td>primary, Auto Increment</td>
      <td></td>
    </tr>
    <tr>
      <td>id_pelanggan</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>id_user</td>
      <td>unsigned int</td>
      <td>indeks</td>
      <td></td>
    </tr>
    <tr>
      <td>jumlah</td>
      <td>unsigned int</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>jenis</td>
      <td>varchar(50)</td>
      <td></td>
      <td>kompor, bahan-bakar</td>
    </tr>
    <tr>
      <td>nomor_seri</td>
      <td>text</td>
      <td></td>
      <td>NULL</td>
    </tr>
    <tr>
      <td>metode_pembayaran</td>
      <td>varchar(10)</td>
      <td></td>
      <td>cahs, kredit3, kredit6</td>
    </tr>
    <tr>
      <td>status</td>
      <td>varchar(10)</td>
      <td></td>
      <td>lunas,belum</td>
    </tr>
    <tr>
      <td>tanggal</td>
      <td>varchar(15)</td>
      <td></td>
      <td>Format tanggal: Y/m/d</td>
    </tr>
    <tr>
      <td>total_harga</td>
      <td>varchar(15)</td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

Dengan mengacu tabel database di atas dan tabel **customer**, buat model codeigniter di bawah ini:
```php
/**
 * Fungsi untuk menysisipkan data baru
 * @param $data array
 */
function insert($data);

/**
 * Fungsi untuk menampilkan data penjualan.
 * Data yang ditampilkan yaitu:
 * - No. Penjualan
 * - Tanggal
 * - Nama pelanggan (yg membeli)
 * - Metode pembayaran
 * - Status pembayaran
 * - Jenis barang
 * - Jumlah barang
 * - Total harga
 *
 * @param $id_user int
 *
 * @return object or false
 */
function lists($id_user);

/**
 * Fungsi untuk memperbarui detail penjualan
 *
 * @param $id_penjualan int
 * @param $data array
 */
function update($id_penjualan,$data);

/**
 * Fungsi untuk menghapus baris data
 *
 * @param $id_penjualan int
 */
function delete($id_penjualan);
```
