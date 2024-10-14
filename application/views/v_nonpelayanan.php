<section class="uni-banner">
	<div class="container">
		<div class="uni-banner-text-area">
			<h1>Layanan</h1>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li>Layanan Non Perizinan</li>
			</ul>
		</div>
	</div>
</section>


<section class="blog-details pt-70 pb-100">
	<div class="container">
		<div class="row">
<!-- <ol>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Keterangan Ahli Waris (SKAW)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Keterangan Kematian (SKK)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Keterangan Tidak Mampu (SKTM)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Pernyataan Penguasaan Fisik Bidang Tanah (SPPFBT)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Bantuan Sosial</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Keterangan Pensiun</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Surat Keterangan Pengajuan Pendaftaran TNI/POLRI </span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Legalisasi Proposal</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Persetujuan Kegiatan Kesesuaian Pemanfaatan Ruang (PKKPR)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Tanda Daftar Usaha Pariwisata (TDUP)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Tanda Daftar Gudang (TDG)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Izin Penumpukan Barang (IPB)</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Izin Bongkar Muat</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Bebas Banjir</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Rekomendasi Penelitian Mahasiswa</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Surat Dispensasi Nikah</span></span></span></span></h2>
	</li>
	<li>
	<h2><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:14.0pt"><span style="font-family:&quot;Arial&quot;,sans-serif">Surat Keterangan Kepemilikan Kapal</span></span></span></span></h2>
	</li>
</ol> -->
<div class="container mt-3">
	<h2>Daftar Layanan Non Perizinan</h2>
	<br>
	<br>
	<?php 
	$no = 0;
	foreach ($layanan->result() as $row) : 
		$no++;
		?>
		<h4><a href="#demo<?php echo $no?>" data-bs-toggle="collapse"> <?php echo $no.". "?> <?php echo $row->nama_layanan ?></a></h4>
		<div id="demo<?php echo $no?>" class="collapse">
			<style>
                table, th, td {
  border: 1px solid black;
}
                
            </style>
			<table>
				<tr>
					<td>1.</td>
					<td>Persyaratan  : </td>
					<td><?php echo $row->persyaratan_layanan ?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Prosedur  : </td>
					<td><?php echo $row->prosedur_pelayanan ?></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Jangka Waktu Penyelesaian  : </td>
					<td><?php echo $row->waktu_penyelesaian ?></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Biaya  : </td>
					<td><?php echo $row->biaya_pelayanan ?></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Produk Layanan  : </td>
					<td><?php echo $row->produk_pelayanan ?></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Penanganan Pengaduan  : </td>
					<td><?php echo $row->pengelolaan_pengaduan ?></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Dasar Hukum  : </td>
					<td><?php echo $row->dasar_hukum ?></td>
				</tr>
				<tr>
					<td>8.</td>
					<td>Sarana dan Prasarana : </td>
					<td><?php echo $row->sarpras_fasilitas ?></td>
				</tr>
				<tr>
					<td>9.</td>
					<td>Kompetensi Pelaksana : </td>
					<td><?php echo $row->kompetensi_pelaksana ?></td>
				</tr>
				<tr>
					<td>10.</td>
					<td>Jumlah Pelaksana : </td>
					<td><?php echo $row->jumlah_pelaksana ?></td>
				</tr>
				<tr>
					<td>11.</td>
					<td>Jaminan Pelayanan : </td>
					<td><?php echo $row->jaminan_pelayanan ?></td>
				</tr>
				<tr>
					<td>12.</td>
					<td>Jaminan Keamanan dan Keselamatan Pelayanan : </td>
					<td><?php echo $row->jaminan_keamanan ?></td>
				</tr>
				<tr>
					<td>13.</td>
					<td>Pengawasan Internal : </td>
					<td><?php echo $row->pengawasan_internal ?></td>
				</tr>
				<tr>
					<td>14.</td>
					<td>Evaluasi Kinerja Pelaksana : </td>
					<td><?php echo $row->evaluasi_kinerja ?></td>
				</tr>

			</table>
		</div>
	<?php endforeach;?>
</div>


</div>
</div>
</section>