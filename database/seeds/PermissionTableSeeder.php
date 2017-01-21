<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'keuangan.kas.tambah_data_kas',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.kas.koreksi_data_kas',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.kas.hapus_data_kas',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tambah_modal.tambah_data_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tambah_modal.koreksi_data_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tambah_modal.hapus_data_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tarik_modal.menambah_data_tarik_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tarik_modal.koreksi_data_tarik_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.tarik_modal.hapus_data_tarik_modal',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.biaya.menambah_data_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.biaya.koreksi_data_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.biaya.hapus_data_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_biaya.menambah_sub_kategori_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_biaya.koreksi_sub_kategori_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_biaya.hapus_sub_kategori_biaya',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.pendapatan.menambah_pendapatan',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.pendapatan.koreksi_pendapatan',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_pendapatan.menambah_data_sub_kategori_pendapatan',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_pendapatan.koreksi_data_sub_kategori_pendapatan',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.sub_kategori_pendapatan.hapus_data_sub_kategori_pendapatan',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.mutasi_saldo.menambah_data_mutasi_saldo',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.mutasi_saldo.koreksi_data_mutasi_saldo',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'keuangan.mutasi_saldo.hapus_data_mutasi_saldo',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'produk.merk_produk.tambah_data_merk_produk',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.customer-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.supplier-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.supplier-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.supplier-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.supplier-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'employee.employee-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'employee.employee-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'employee.employee-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'employee.employee-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product.producttype-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product.producttype-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product.producttype-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.product.producttype-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.warehouse-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.warehouse-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.warehouse-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.warehouse-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.bank-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.bank-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.bank-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.bank-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.truck-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.truck-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.truck-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.truck-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.vendor.truck-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.vendor.truck-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.vendor.truck-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.vendor.truck-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.expense_template-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.expense_template-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.expense_template-edit',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'master.expense_template-delete',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'po.po-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'po.po-revise',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'po.po-payment',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'po.po-copy',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'so.so-create',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'so.so-revise',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'so.so-payment',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'so.so-copy',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'price.todayprice-list',
                'display_name' => '',
                'description' => ''
            ],
            [
                'name' => 'price.todayprice-create',
                'display_name' => '[Today Price] Create New Today Price',
                'description' => 'Create New Today Price'
            ],
            [
                'name' => 'price.pricelevel-list',
                'display_name' => '[Price Level] Display Price Level Listing',
                'description' => 'See only Listing Of Price Level'
            ],
            [
                'name' => 'price.pricelevel-create',
                'display_name' => '[Price Level] Create Price Level',
                'description' => 'Create New Price Level'
            ],
            [
                'name' => 'price.pricelevel-edit',
                'display_name' => '[Price Level] Edit Price Level',
                'description' => 'Edit Price Level'
            ],
            [
                'name' => 'price.pricelevel-delete',
                'display_name' => '[Price Level] Delete Price Level',
                'description' => 'Delete Price Level'
            ],
            [
                'name' => 'warehouse.inflow-input',
                'display_name' => '[Warehouse Inflow] Input Warehouse Inflow',
                'description' => 'Enable Input Warehouse Inflow'
            ],
            [
                'name' => 'warehouse.outflow-input',
                'display_name' => '[Warehouse Outflow] Input Warehouse Outflow',
                'description' => 'Enable Input Warehouse Outflow'
            ],
            [
                'name' => 'warehouse.stockopname',
                'display_name' => '[Warehouse Stock Opname] Input Stock Opname',
                'description' => 'Enable Input Stock Opname'
            ],
            [
                'name' => 'bank.upload',
                'display_name' => '[Bank] Upload Bank Data',
                'description' => 'Enable Upload Bank Data'
            ],
            [
                'name' => 'bank.consolidate',
                'display_name' => '[Bank] Consolidate Bank Data',
                'description' => 'Enable Consolidate Bank Data'
            ],
            [
                'name' => 'bank.giro',
                'display_name' => '[Bank Giro] Display Giro Listing',
                'description' => 'See only Listing Of Giro'
            ],
            [
                'name' => 'bank.giro-create',
                'display_name' => '[Bank Giro] Create Giro',
                'description' => 'Create Giro'
            ],
            [
                'name' => 'bank.giro-edit',
                'display_name' => '[Bank Giro] Edit Giro',
                'description' => 'Edit Giro'
            ],
            [
                'name' => 'bank.giro-delete',
                'display_name' => '[Bank Giro] Delete Giro',
                'description' => 'Delete Giro'
            ],
            [
                'name' => 'customer.confirmation',
                'display_name' => '[Customer] Customer Confirmation',
                'description' => 'Enable Customer Confirmation'
            ],
            [
                'name' => 'customer.payment',
                'display_name' => '[Customer] Customer Payment',
                'description' => 'Enable Customer Payment'
            ],
            [
                'name' => 'customer.approval',
                'display_name' => '[Customer] Customer Approval',
                'description' => 'Enable Customer Approval'
            ],
            [
                'name' => 'truck.maintenance-list',
                'display_name' => '[Truck Maintenance] Display Truck Maintenance Listing',
                'description' => 'See only Listing Of Truck Maintenance'
            ],
            [
                'name' => 'truck.maintenance-create',
                'display_name' => '[Truck Maintenance] Create Truck Maintenance',
                'description' => 'Create New Truck Maintenance'
            ],
            [
                'name' => 'truck.maintenance-edit',
                'display_name' => '[Truck Maintenance] Edit Truck Maintenance',
                'description' => 'Edit Truck Maintenance'
            ],
            [
                'name' => 'truck.maintenance-delete',
                'display_name' => '[Truck Maintenance] Delete Truck Maintenance',
                'description' => 'Delete Truck Maintenance'
            ],
            [
                'name' => 'report.admin-user',
                'display_name' => '[Report] Generate Report User',
                'description' => 'Generate Report User'
            ],
            [
                'name' => 'report.admin-role',
                'display_name' => '[Report] Generate Report Role',
                'description' => 'Generate Report Role'
            ],
            [
                'name' => 'report.admin-store',
                'display_name' => '[Report] Generate Report Store',
                'description' => 'Generate Report Store'
            ],
            [
                'name' => 'report.admin-unit',
                'display_name' => '[Report] Generate Report Unit',
                'description' => 'Generate Report Unit'
            ],
            [
                'name' => 'report.admin-phone_provider',
                'display_name' => '[Report] Generate Report Phone Provider',
                'description' => 'Generate Report Phone Provider'
            ],
            [
                'name' => 'report.admin-settings',
                'display_name' => '[Report] Generate Report Settings',
                'description' => 'Generate Report Settings'
            ],
            [
                'name' => 'report.master-supplier',
                'display_name' => '[Report] Generate Report Supplier',
                'description' => 'Generate Report Supplier'
            ],
            [
                'name' => 'report.master-customer',
                'display_name' => '[Report] Generate Report Customer',
                'description' => 'Generate Report Customer'
            ],
            [
                'name' => 'report.master-product',
                'display_name' => '[Report] Generate Report Product',
                'description' => 'Generate Report Product'
            ],
            [
                'name' => 'report.master-product_type',
                'display_name' => '[Report] Generate Report Product Type',
                'description' => 'Generate Report Product Type'
            ],
            [
                'name' => 'report.master-bank',
                'display_name' => '[Report] Generate Report Bank',
                'description' => 'Generate Report Bank'
            ],
            [
                'name' => 'report.master-warehouse',
                'display_name' => '[Report] Generate Report Warehouse',
                'description' => 'Generate Report Warehouse'
            ],
            [
                'name' => 'report.master-truck',
                'display_name' => '[Report] Generate Report Truck',
                'description' => 'Generate Report Truck'
            ],
            [
                'name' => 'report.master-truck_maintenance',
                'display_name' => '[Report] Generate Report Truck Maintenance',
                'description' => 'Generate Report Truck Maintenance'
            ],
            [
                'name' => 'report.master-vendor_trucking',
                'display_name' => '[Report] Generate Report Vendor Trucking',
                'description' => 'Generate Report Vendor Trucking'
            ],
            [
                'name' => 'report.trx-po',
                'display_name' => '[Report] Generate Report PO',
                'description' => 'Generate Report PO'
            ],
            [
                'name' => 'report.trx-so',
                'display_name' => '[Report] Generate Report Sales',
                'description' => 'Generate Report Sales'
            ],
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
