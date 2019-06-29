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

namespace Bitbucket\Api\Repositories\Users;

/**
 * The diffs stats api class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class DiffStats extends AbstractUsersApi
{
    /**
     * @param string $spec
     * @param array  $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function download(string $spec, array $params = [])
    {
        $path = $this->buildDiffStatssPath($spec);

        return $this->get($path, $params);
    }

    /**
     * Build the diff stats path from the given parts.
     *
     * @param string[] $parts
     *
     * @throws \Bitbucket\Exception\InvalidArgumentException
     *
     * @return string
     */
    protected function buildDiffStatssPath(string ...$parts)
    {
        return static::buildPath('repositories', $this->username, $this->repo, 'diffstats', ...$parts);
    }
}
