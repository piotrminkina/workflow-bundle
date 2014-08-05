<?php

/*
 * This file is part of the PMD package.
 *
 * (c) Piotr Minkina <projekty@piotrminkina.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PMD\Bundle\WorkflowBundle\Process\Instance;

use PMD\Bundle\WorkflowBundle\Process\ProcessInterface;

/**
 * The representation of a single enactment of a process.
 *
 * @author Piotr Minkina <projekty@piotrminkina.pl>
 * @package PMD\Bundle\WorkflowBundle\Process\Instance
 */
interface ProcessInstanceInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $state
     * @return ProcessInstanceInterface
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param ProcessInterface $process
     * @return ProcessInstanceInterface
     */
    public function setProcess(ProcessInterface $process);

    /**
     * @return ProcessInstanceInterface
     */
    public function getProcess();
}
