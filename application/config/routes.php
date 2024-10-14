<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Main_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['list_berita'] = 'Main_Controller/list_berita';
$route['galeri'] = 'Main_Controller/galeri';
$route['kontak'] = 'Main_Controller/kontak';
$route['struktur_organisasi'] = 'Main_Controller/struktur_organisasi';
$route['sejarah'] = 'Main_Controller/sejarah';
$route['visi_misi'] = 'Main_Controller/visi_misi';
$route['tupoksi'] = 'Main_Controller/tupoksi';
$route['layanan'] = 'Main_Controller/layanan';
$route['layanan_pengaduan'] = 'Main_Controller/layanan_pengaduan';
$route['layanannonperizinan'] = 'Main_Controller/layanannonperizinan';
$route['detail_berita_beranda/(:any)'] = 'Main_Controller/detail_berita_slug/$1';
$route['download_dokumen'] = 'Main_Controller/download_dokumen';

$route['admin'] = 'Main_Controller/admin';
$route['login'] = 'Main_Controller/login';
$route['logout'] = 'Main_Controller/logout';
$route['tambah_berita'] = 'Berita_Controller/tambah_berita';
$route['daftar_berita'] = 'Berita_Controller/daftar_berita';
$route['submit_berita'] = 'Berita_Controller/submit_berita';
$route['detail_berita/(:any)'] = 'Berita_Controller/detail_berita/$1';
$route['edit_berita/(:any)'] = 'Berita_Controller/edit_berita/$1';
$route['submit_edit_berita/(:any)'] = 'Berita_Controller/submit_edit_berita/$1';
$route['hapus_berita/(:any)'] = 'Berita_Controller/hapus_berita/$1';

$route['tambah_galeri'] = 'Galeri_Controller/tambah_galeri';
$route['daftar_galeri'] = 'Galeri_Controller/daftar_galeri';
$route['submit_galeri'] = 'Galeri_Controller/submit_galeri';
$route['detail_galeri/(:any)'] = 'Galeri_Controller/detail_galeri/$1';
$route['edit_galeri/(:any)'] = 'Galeri_Controller/edit_galeri/$1';
$route['submit_edit_galeri/(:any)'] = 'Galeri_Controller/submit_edit_galeri/$1';
$route['hapus_galeri/(:any)'] = 'Galeri_Controller/hapus_galeri/$1';

$route['slug'] ='Berita_Controller/input_slug';

$route['tambah_dokumen'] = 'Download_Controller/tambah_dokumen';
$route['submit_dokumen'] = 'Download_Controller/submit_dokumen';
$route['daftar_dokumen'] = 'Download_Controller/daftar_dokumen';


$route['tambah_layanan'] = 'Layanan_Controller/tambah_layanan';
$route['submit_layanan'] = 'Layanan_Controller/submit_layanan';
$route['daftar_layanan'] = 'Layanan_Controller/daftar_layanan';



