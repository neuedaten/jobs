<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Neuedaten.Jobs',
            'Joblist',
            'Jobs - List'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Neuedaten.Jobs',
            'Jobshow',
            'Job - Show'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('jobs', 'Configuration/TypoScript', 'Jobs');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_job', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_contact', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_contact.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_contact');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_location', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_field', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_field.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_field');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_level', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_level.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_level');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_jobs_domain_model_content', 'EXT:jobs/Resources/Private/Language/locallang_csh_tx_jobs_domain_model_content.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jobs_domain_model_content');

    }
);
