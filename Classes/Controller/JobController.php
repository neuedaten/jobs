<?php
namespace Neuedaten\Jobs\Controller;


/***
 *
 * This file is part of the "Jobs" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Bastian Schwabe <bas@neuedaten.de>, Neuedaten
 *
 ***/
/**
 * JobController
 */
class JobController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * jobRepository
     * 
     * @var \Neuedaten\Jobs\Domain\Repository\JobRepository
     */
    protected $jobRepository = null;

    /**
     * @param \Neuedaten\Jobs\Domain\Repository\JobRepository $jobRepository
     */
    public function injectJobRepository(\Neuedaten\Jobs\Domain\Repository\JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $jobs = $this->jobRepository->findAll();
        $this->view->assign('jobs', $jobs);
    }

    /**
     * action show
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Job $job
     * @return void
     */
    public function showAction(\Neuedaten\Jobs\Domain\Model\Job $job)
    {
        $this->view->assign('job', $job);
    }
}
