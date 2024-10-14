<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>Download Dokumen</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Download Dokumen</li>
            </ul>
        </div>
    </div>
</section>


<section class="blog-details pt-70 pb-100">
    <div class="container">

                <?php 
            $no = 1;

        ?>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama Dokumen </th>
                <th>Link Download</th>
            </thead>
            <?php foreach ($dokumen->result() as $row) : ?>
            <tr>
                <td><?php echo $no++;?></td>
                <th><?php echo $row->nama_dokumen ?></th>
                <th><a href="<?php echo base_url();?>/upload-documents/dokumen/<?php echo $row->file ?>">Download File</th>
            </tr>
             <?php endforeach;?>
        </table>
    </div>
</section>