<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItemGroup(
    'tt_content',
    'CType',
    'rlt3_pure_package',
    'LLL:EXT:rlt3_pure_package/Resources/Private/Language/locallang_be.xlf:content_element.group.rlt3_pure_package',
    'after:default',
);
