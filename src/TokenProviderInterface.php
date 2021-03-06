<?php
/**
 * User: qbhy
 * Date: 2018/10/5
 * Time: 下午10:22
 */

namespace Qbhy\SimpleJwt;

interface TokenProviderInterface
{
    public static function fromToken(string $token);

    public function getToken();

    public function buildPayload(): array;

}