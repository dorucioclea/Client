<?php

declare(strict_types=1);

/*
 * This file is part of Bitbucket API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\Api\Repositories\Issues;

/**
 * The vote class.
 *
 * @author Graham Campbell <graham@alt-thre.com>
 */
class Vote extends AbstractIssuesApi
{
    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function check(array $params = [])
    {
        $path = $this->buildVotePath();

        return $this->get($path, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function vote(array $params = [])
    {
        $path = $this->buildVotePath();

        return $this->put($path, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function retract(array $params = [])
    {
        $path = $this->buildVotePath();

        return $this->delete($path, $params);
    }

    /**
     * Build the vote path from the given parts.
     *
     * @param string[] $parts
     *
     * @throws \Bitbucket\Exception\InvalidArgumentException
     *
     * @return string
     */
    protected function buildVotePath(string ...$parts)
    {
        return static::buildPath('repositories', $this->username, 'issues', $this->issue, 'vote', ...$parts);
    }
}