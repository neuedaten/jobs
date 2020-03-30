<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Neuedaten.Jobs',
            'Joblist',
            [
                'Job' => 'list'
            ],
            // non-cacheable actions
            [
                'Job' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Neuedaten.Jobs',
            'Jobshow',
            [
                'Job' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Job' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        joblist {
                            iconIdentifier = jobs-plugin-joblist
                            title = LLL:EXT:jobs/Resources/Private/Language/locallang_db.xlf:tx_jobs_joblist.name
                            description = LLL:EXT:jobs/Resources/Private/Language/locallang_db.xlf:tx_jobs_joblist.description
                            tt_content_defValues {
                                CType = list
                                list_type = jobs_joblist
                            }
                        }
                        jobshow {
                            iconIdentifier = jobs-plugin-jobshow
                            title = LLL:EXT:jobs/Resources/Private/Language/locallang_db.xlf:tx_jobs_jobshow.name
                            description = LLL:EXT:jobs/Resources/Private/Language/locallang_db.xlf:tx_jobs_jobshow.description
                            tt_content_defValues {
                                CType = list
                                list_type = jobs_jobshow
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'jobs-plugin-joblist',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:jobs/Resources/Public/Icons/user_plugin_joblist.svg']
			);
		
			$iconRegistry->registerIcon(
				'jobs-plugin-jobshow',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:jobs/Resources/Public/Icons/user_plugin_jobshow.svg']
			);
		
    }
);
