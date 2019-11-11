<?php

namespace Phalcon\Queue\Beanstalk;

use Phalcon\Queue\Beanstalk;
use Phalcon\Queue\Beanstalk\Exception;

/**
 * Phalcon\Queue\Beanstalk\Job
 *
 * Represents a job in a beanstalk queue
 */
class Job
{
    /**
     * @var string
     */
    protected $_id;

    /**
     * @var mixed
     */
    protected $_body;


    protected $_queue;


    /**
     * @return string
     */
    public function getId(): string
    {
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
    }

    /**
     * Phalcon\Queue\Beanstalk\Job
     *
     * @param \Phalcon\Queue\Beanstalk $queue
     * @param string $id
     * @param mixed $body
     */
    public function __construct(\Phalcon\Queue\Beanstalk $queue, string $id, $body)
    {
    }

    /**
     * Removes a job from the server entirely
     *
     * @return bool
     */
    public function delete(): bool
    {
    }

    /**
     * The release command puts a reserved job back into the ready queue (and marks
     * its state as "ready") to be run by any client. It is normally used when the job
     * fails because of a transitory error.
     *
     * @param int $priority
     * @param int $delay
     * @return bool
     */
    public function release(int $priority = 100, int $delay = 0): bool
    {
    }

    /**
     * The bury command puts a job into the "buried" state. Buried jobs are put into
     * a FIFO linked list and will not be touched by the server again until a client
     * kicks them with the "kick" command.
     *
     * @param int $priority
     * @return bool
     */
    public function bury(int $priority = 100): bool
    {
    }

    /**
     * The `touch` command allows a worker to request more time to work on a job.
     * This is useful for jobs that potentially take a long time, but you still
     * want the benefits of a TTR pulling a job away from an unresponsive worker.
     * A worker may periodically tell the server that it's still alive and processing
     * a job (e.g. it may do this on `DEADLINE_SOON`). The command postpones the auto
     * release of a reserved job until TTR seconds from when the command is issued.
     *
     * @return bool
     */
    public function touch(): bool
    {
    }

    /**
     * Move the job to the ready queue if it is delayed or buried.
     *
     * @return bool
     */
    public function kick(): bool
    {
    }

    /**
     * Gives statistical information about the specified job if it exists.
     *
     * @return bool|array
     */
    public function stats()
    {
    }

    /**
     * Checks if the job has been modified after unserializing the object
     */
    public function __wakeup()
    {
    }

}
