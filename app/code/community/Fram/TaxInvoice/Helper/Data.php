<?php

class Fram_TaxInvoice_Helper_Data extends Mage_Core_Helper_Abstract
{

    const ADDED_TAX_PERCENT_INVOICE = 'sales_pdf/invoice/put_tax_percent';

    public function isAddedTaxPercent($storeId)
    {
        return Mage::getStoreConfig(self::ADDED_TAX_PERCENT_INVOICE , $storeId);
    }
}