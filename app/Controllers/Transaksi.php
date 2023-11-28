<?php

namespace App\Controllers;

use App\Models\SupplierModel;
use App\Models\TransaksiModel;
use CodeIgniter\API\ResponseTrait;
use TCPDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Transaksi extends BaseController
{
    use ResponseTrait;
    private $transaction;
    public function __construct()
    {
        $this->transaction = new TransaksiModel();
    }

    public function submitTransaction()
    {
        $jsonRequest = $this->request->getJSON();

        // Validate if JSON data is provided
        if (!$jsonRequest) {
            return $this->fail('No JSON data provided.', 400);
        }

        $total_pembayaran = $jsonRequest->total_pembayaran;
        $total_jumlah = $jsonRequest->total_jumlah;
        $supplier_name = $jsonRequest->supplier_name;
        $supplier_id = $jsonRequest->supplier_id;
        $nominal_bayar = $jsonRequest->nominal_bayar;
        $kembalian = $jsonRequest->kembalian;
        $list_data = $jsonRequest->list_data;

        // Insert into 'your_table_transaksi' table
        $transaksiData = [
            'total_harga' => $total_pembayaran,
            'jumlah_barang' => $total_jumlah,
            'supplier_name' => $supplier_name,
            'supplier_id' => $supplier_id,
            'nominal_bayar' => $nominal_bayar,
            'kembalian' => $kembalian,
            'type' => 1,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];

        $transaksiModel = new \App\Models\TransaksiModel();
        $produkModel = new \App\Models\ProductModel();
        $transaksiId = $transaksiModel->insertTransaksi($transaksiData);

        $transaksiDetailModel = new \App\Models\TransaksiDetailModel();

        foreach ($list_data as $data) {
            $detailData = [
                'id_transaksi' => $transaksiId,
                'id_produk' => $data->id_produk,
                'jumlah_barang' => $data->jumlah_barang,
                'total' => $data->total,
                'nama_produk' => $data->produk,
                // Add other fields as needed
            ];

            $currentStock = $produkModel->getCurrentStock($data->id_produk);
            $newStock = $currentStock + $data->jumlah_barang;
            $produkModel->updateStock($data->id_produk, $newStock);
            $transaksiDetailModel->insertTransaksiDetail($detailData);
        }

        return $this->respond(['message' => 'Transaction submitted successfully']);
    }

    public function submitTransactionPenjualan()
    {
        $jsonRequest = $this->request->getJSON();

        // Validate if JSON data is provided
        if (!$jsonRequest) {
            return $this->fail('No JSON data provided.', 400);
        }

        $total_pembayaran = $jsonRequest->total_pembayaran;
        $total_jumlah = $jsonRequest->total_jumlah;
        $customer_id = $jsonRequest->customer_id;
        $nominal_bayar = $jsonRequest->nominal_bayar;
        $customer_name = $jsonRequest->customer_name;
        $kembalian = $jsonRequest->kembalian;
        $list_data = $jsonRequest->list_data;

        // Insert into 'your_table_transaksi' table
        $transaksiData = [
            'total_harga' => $total_pembayaran,
            'jumlah_barang' => $total_jumlah,
            'type' => 2,
            'customer_id' => $customer_id,
            'nominal_bayar' => $nominal_bayar,
            'kembalian' => $kembalian,
            'customer_name' => $customer_name,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ];

        $transaksiModel = new \App\Models\TransaksiModel();
        $produkModel = new \App\Models\ProductModel();
        $transaksiId = $transaksiModel->insertTransaksi($transaksiData);

        $transaksiDetailModel = new \App\Models\TransaksiDetailModel();

        foreach ($list_data as $data) {
            $detailData = [
                'id_transaksi' => $transaksiId,
                'id_produk' => $data->id_produk,
                'nama_produk' => $data->produk,
                'jumlah_barang' => $data->jumlah_barang,
                'total' => $data->total,
                // Add other fields as needed
            ];

            $currentStock = $produkModel->getCurrentStock($data->id_produk);
            $newStock = $currentStock - $data->jumlah_barang;
            $produkModel->updateStock($data->id_produk, $newStock);
            $transaksiDetailModel->insertTransaksiDetail($detailData);
        }

        return $this->respond(['message' => 'Transaction submitted successfully']);
    }

    public function transaksiDetail()
    {
        $id_transaksi = $this->request->getVar('id_transaksi');

        $transaksiModel = new \App\Models\TransaksiDetailModel();
        $details = $transaksiModel->getTransactionDetails($id_transaksi);

        return $this->response->setJSON($details);
    }

    public function reportPenjualan($tgl_awal = null, $tgl_akhir = null)
    {
        helper('currency');
        // Load the session librar

        // Now you can set the session variable


        $session = \Config\Services::session();

        // var_dump($session->get('tgl_awal'));
        // var_dump($session->get('tgl_akhir'));
        // die();

        $session->remove('tgl_awal');
        $session->remove('tgl_akhir');
        $tgl_awal  = $tgl_awal == null ? date('Y-m-01') : $tgl_awal;
        $tgl_akhir = $tgl_akhir == null ? date('Y-m-t') : $tgl_akhir;

        $session->set('tgl_akhir', $tgl_akhir);
        $session->set('tgl_awal',  $tgl_awal);

        $report = $this->transaction->getReportPenjualan($tgl_awal, $tgl_akhir);
        $data = [
            'title' => 'Laporan Penjualan',
            'result' => $report,
            'tanggal' => [
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
            ],
        ];
        return view('page/laporan_penjualan', $data);
    }

    public function filterPenjualan()
    {
        $session = \Config\Services::session();
        $session->set('tgl_akhir', $this->request->getVar('tgl_akhir'));
        $session->set('tgl_awal', $this->request->getVar('tgl_awal'));
        return $this->reportPenjualan($session->get('tgl_awal'), $session->get('tgl_akhir'));
    }

    public function reportPembelian($tgl_awal = null, $tgl_akhir = null)
    {
        helper('currency');
        // Load the session librar

        // Now you can set the session variable


        $session = \Config\Services::session();

        // var_dump($session->get('tgl_awal'));
        // var_dump($session->get('tgl_akhir'));
        // die();

        $session->remove('tgl_awal');
        $session->remove('tgl_akhir');
        $tgl_awal  = $tgl_awal == null ? date('Y-m-01') : $tgl_awal;
        $tgl_akhir = $tgl_akhir == null ? date('Y-m-t') : $tgl_akhir;

        $session->set('tgl_akhir', $tgl_akhir);
        $session->set('tgl_awal',  $tgl_awal);

        $report = $this->transaction->getReportPembelian($tgl_awal, $tgl_akhir);
        $data = [
            'title' => 'Laporan Pembelian',
            'result' => $report,
            'tanggal' => [
                'tgl_awal' => $tgl_awal,
                'tgl_akhir' => $tgl_akhir,
            ],
        ];
        return view('page/laporan_pembelian', $data);
    }
    
    public function filterPembelian()
    {
        $session = \Config\Services::session();
        $session->set('tgl_akhir', $this->request->getVar('tgl_akhir'));
        $session->set('tgl_awal', $this->request->getVar('tgl_awal'));
        return $this->reportPembelian($session->get('tgl_awal'), $session->get('tgl_akhir'));
    }

    public function exportPDFPenjualan()
    {
        helper('currency');
        $session = \Config\Services::session();
        if (isset($_SESSION['tgl_awal'])) {
            $tgl1 = $_SESSION['tgl_awal'];
        } else {
            // Set a default value or handle the absence of the session variable
            $tgl1 =  date('Y-m-01');
        }

        // Repeat the same check for $_SESSION['tgl_akhir']
        if (isset($_SESSION['tgl_akhir'])) {
            $tgl2 = $_SESSION['tgl_akhir'];
        } else {
            // Set a default value or handle the absence of the session variable
            $tgl2 = date('Y-m-t');
        }

        $report = $this->transaction->getReportPenjualan($tgl1, $tgl2);
        $data = [
            'title' => 'Laporan penjualan',
            'result' => $report,
        ];



        $html = view('page/export_pdf_penjualan', $data);
        ob_end_clean(); // Add this line
        $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($html);
        $this->response->setContentType('application/pdf');
        $pdf->Output('laporan-penjualan.pdf', 'I');
    }

    public function exportExcelPenjualan()
    {
        $session = \Config\Services::session();
        $tgl1 = $session->get('tgl_awal');
        $tgl2 = $session->get('tgl_akhir');

        // <th width="5%">No</th>
        // <th width="15%">Nota</th>
        // <th width="20%">Tanggal Transaksi</th>
        // <th width="20%">Customer</th>
        // <th width="15%">Total</th>

        $report = $this->transaction->getReportPenjualan($tgl1, $tgl2);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nota')
            ->setCellValue('C1', 'Tgl Transaksi')
            ->setCellValue('D1', 'Customer')
            ->setCellValue('E1', 'Total');
        $rows = 2;
        $no = 1;
        foreach ($report as $value) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $rows, $no++)
                ->setCellValue('B' . $rows, $value['id_transaksi'])
                ->setCellValue('C' . $rows, $value['tgl_transaksi'])
                ->setCellValue('D' . $rows, $value['customer_name'])
                ->setCellValue('E' . $rows, $value['total']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Laporan-Penjualan';

        header('Content-Typer: application/vnd.openxmlformats-officedocument.spreadsheetml.sheat');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function exportPDFPembelian()
    {
        helper('currency');
        $session = \Config\Services::session();
        if (isset($_SESSION['tgl_awal'])) {
            $tgl1 = $_SESSION['tgl_awal'];
        } else {
            // Set a default value or handle the absence of the session variable
            $tgl1 =  date('Y-m-01');
        }

        // Repeat the same check for $_SESSION['tgl_akhir']
        if (isset($_SESSION['tgl_akhir'])) {
            $tgl2 = $_SESSION['tgl_akhir'];
        } else {
            // Set a default value or handle the absence of the session variable
            $tgl2 = date('Y-m-t');
        }

        $report = $this->transaction->getReportPembelian($tgl1, $tgl2);
        $data = [
            'title' => 'Laporan penjualan',
            'result' => $report,
        ];



        $html = view('page/export_pdf_pembelian', $data);
        ob_end_clean(); // Add this line
        $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($html);
        $this->response->setContentType('application/pdf');
        $pdf->Output('laporan-penjualan.pdf', 'I');
    }

    public function exportExcelPembelian()
    {
        $session = \Config\Services::session();
        $tgl1 = $session->get('tgl_awal');
        $tgl2 = $session->get('tgl_akhir');

        // <th width="5%">No</th>
        // <th width="15%">Nota</th>
        // <th width="20%">Tanggal Transaksi</th>
        // <th width="20%">Customer</th>
        // <th width="15%">Total</th>

        $report = $this->transaction->getReportPembelian($tgl1, $tgl2);
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nota')
            ->setCellValue('C1', 'Tgl Transaksi')
            ->setCellValue('D1', 'Supplier')
            ->setCellValue('E1', 'Total');
        $rows = 2;
        $no = 1;
        foreach ($report as $value) {
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $rows, $no++)
                ->setCellValue('B' . $rows, $value['id_transaksi'])
                ->setCellValue('C' . $rows, $value['tgl_transaksi'])
                ->setCellValue('D' . $rows, $value['supplier_name'])
                ->setCellValue('E' . $rows, $value['total']);
            $rows++;
        }
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Laporan-Penjualan';

        header('Content-Typer: application/vnd.openxmlformats-officedocument.spreadsheetml.sheat');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
