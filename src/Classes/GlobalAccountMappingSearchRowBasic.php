<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-07-07 11:24:43 AM CDT
 */

namespace NetSuite\Classes;

class GlobalAccountMappingSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $accountingBook;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectCustomField[]
     */
    public $customDimension;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $destinationAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $effectiveDate;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $endDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $sourceAccount;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnCustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "class" => "SearchColumnSelectField[]",
        "customDimension" => "SearchColumnSelectCustomField[]",
        "department" => "SearchColumnSelectField[]",
        "destinationAccount" => "SearchColumnSelectField[]",
        "effectiveDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "sourceAccount" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
