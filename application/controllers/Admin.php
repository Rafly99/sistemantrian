<?php

defined('BASEPATH') or exit('No direct script access allowed');
require_once dirname(APPPATH) . '/vendor/mike42/escpos-php/autoload.php'; // Lokasi autoload file pustaka escpos-php
require_once dirname(APPPATH) . '/vendor/autoload.php'; //lokasi library dompdf
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;
use Dompdf\Dompdf;
use Dompdf\Options;

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('auth_model');
        if (!$this->auth_model->current_user()) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['dashboard'] = $this->Admin_model->dashboard();
        $this->load->view('home');
        $data['judul'] = "Home";
    }
    public function dashboard()
    {
        $data['konten'] = "content/dashboard";
        $data['judul'] = "Dashboard";

        $data['dashboard'] = $this->Admin_model->dashboard();
        $data['filter'] = $this->Admin_model->filter();
        $data['data_hari_ini'] = $this->Admin_model->data_today();
        $data['user'] = $this->Admin_model->karyawan();
        $this->load->view('layout/master', $data);
    }
    public function karyawan()
    {
        $data['konten'] = "content/karyawan";
        $data['judul'] = "Dashboard";

        $data['karyawan'] = $this->Admin_model->karyawan();
        $this->load->view('layout/master', $data);
    }

    public function antrian()
    {
        $this->load->view('content/update_costumer');
    }

    public function tambah_data()
    {
        $this->load->view('content/tambah_costumer');
    }

    public function print()
    {
        $this->Admin_model->dashboard();
        date_default_timezone_set('Asia/Jakarta');

        $nama = $this->input->post('nama');
        $telp = $this->input->post('telp');
        $alamat = $this->input->post('alamat');
        $loket = $this->input->post('loket_id');
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        $tanggal_sekarang = date("Y-m-d");
        $antrian_query = $this->db->query("SELECT max(no_antrian) as nomor FROM costumer WHERE created_at='$tanggal_sekarang'");
        $antrian_result = $antrian_query->row_array();
        $nomor_antrian = $antrian_result['nomor'];

        $urutan = (int)substr($nomor_antrian, 1, 3);
        $urutan++;
        $huruf = "A";
        $nomor_antrian_baru = $huruf . sprintf("%02s", $urutan);

        $data = array(
            'nama' => $nama,
            'telp' => $telp,
            'alamat' => $alamat,
            'no_antrian' => $nomor_antrian_baru,
            'loket_id' => 1
        );

        $insert_result = $this->db->insert('costumer', $data);

        if ($insert_result) {
            $this->session->set_flashdata('input', 'sukses');
            
        }else {
            $this->session->set_flashdata('input', 'sukses');
            redirect('admin/tambah_data');
        }
        // if ($insert_result) {
        //     $this->session->set_flashdata('input', 'sukses');
        //     redirect('admin/antrian');
        // } else {
        //     $this->session->set_flashdata('input', 'gagal');
        //     redirect('admin/tambah_data');
        // }
        
        // //print nomor antrian
        // $connector = new NetworkPrintConnector("192.168.1.100", 9100); //alamat dan port printer
        // $printer = new Printer($connector);

        // //cetak nomor antrian
        // $printer->text($nomor_antrian_baru);

        // //menambahkan baris kosong dan potong kertas
        // $printer->feed();
        // $printer->cut();

        // //tutup koneksi ke printer
        // $printer->close();

        //simpan PDF no Antrian
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        //buat konten pdf
        $pdf_content = "Nama : ". $nama . "No Telp : ". $telp . "Nomor Antrian : " . $nomor_antrian_baru;


        $dompdf->loadHtml($pdf_content); //load konten ke dompdf
        $dompdf->setPaper('A5', 'portrait'); //atur ukuran kertas
        $dompdf->render(); //render konten PDF
        $pdf_filename = 'nomor_antrian_' . date('YmdHis') . '.pdf'; //simpan pdf ke file
        $outputFilePath = 'assets/pdf/' . $pdf_filename;
        file_put_contents($outputFilePath, $dompdf->output());

        redirect('admin/antrian');
    }

    public function update()
    {
        $this->Admin_model->dashboard();
        date_default_timezone_set('Asia/Jakarta');

        // Reset nomor antrian jika tanggal berubah
        $tanggal_sekarang = date("Y-m-d");
        $antrian_query = $this->db->query("SELECT max(no_antrian) as nomor FROM costumer WHERE created_at = '$tanggal_sekarang'");
        $antrian_result = $antrian_query->row_array();
        $nomor_antrian = $antrian_result['nomor'];

        $urutan = (int)substr($nomor_antrian, 1, 3);
        $urutan++;
        $huruf = "A";
        $nomor_antrian_baru = $huruf . sprintf("%02s", $urutan);

        $telp = $this->input->post('telp');
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

        //cek no telp apakah sudah terdaftar
        $existing_customer = $this->db->get_where('costumer', ['telp' => $telp])->row();

        if ($existing_customer) {
            // Update data yang sudah ada
            $data = array(
                'no_antrian' => $nomor_antrian_baru,
                'created_at' => $tanggal,
                'loket_id' => 1
            );
            $this->db->where('telp', $telp);
            $this->db->update('costumer', $data);
            //session popup
            $this->session->set_flashdata('update', 'sukses');
            
        } else {
            redirect('admin/tambah_data');
        }
        // //print nomor antrian
        // $connector = new NetworkPrintConnector("192.168.1.100", 9100); //alamat dan port printer
        // $printer = new Printer($connector);

        // //cetak nomor antrian
        // $printer->text($nomor_antrian_baru);

        // //menambahkan baris kosong dan potong kertas
        // $printer->feed();
        // $printer->cut();

        // //tutup koneksi ke printer
        // $printer->close();

        //simpan PDF no Antrian
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        //buat konten pdf
        $pdf_content = "Tanggal: ".$tanggal ." Nomor Antrian : " . $nomor_antrian_baru;

        $dompdf->loadHtml($pdf_content); //load konten ke dompdf
        $dompdf->setPaper('A5', 'portrait'); //atur ukuran kertas
        $dompdf->render(); //render konten PDF
        $pdf_filename = 'nomor_antrian_' . date('YmdHis') . '.pdf'; //simpan pdf ke file
        $outputFilePath = 'assets/pdf/' . $pdf_filename;
        file_put_contents($outputFilePath, $dompdf->output());

        redirect('admin/antrian');
    }

    public function user()
    {
        $data['konten'] = "content/user";
        $data['judul'] = "Dashboard";

        $data['user'] = $this->Admin_model->user();
        $this->load->view('layout/master', $data);
    }

    public function getAntrian(Request $request){
        $queueNumber = $request->input('no_antrian');

        return response()->json(['no_antrian' => $queueNumber]);
    }

}
