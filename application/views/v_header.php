<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
     if(!empty($berita)){
        $slug;
        foreach ($berita->result() as $row) :
            $slug = $row->slug;

        endforeach;      
        if($this->uri->segment(2) == $slug){
            ?>
            <meta property="og:title" content="<?php echo $row->judul ?>" />
            <meta property="og:description" content="<?php echo $row->judul ?>" />
            <meta property="og:image" content="<?php echo base_url();?>upload-documents/<?php echo $row->gambar ?>" />
            
            <?php
        }
    }
    else{
        ?>
            <meta property="og:image" content="<?php echo base_url();?>assets/images/logo-tanbu.png " width="100px" heigth = "100px" />
        <?php
    }
    ?>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawsome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <title>Kecamatan Simpang Empat - Kabupaten Tanah Bumbu</title>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/logo-tanbu.png">
</head>