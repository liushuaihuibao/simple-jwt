<?php
/**
 * User: qbhy
 * Date: 2018/5/28
 * Time: 下午1:06
 */

namespace Qbhy\SimpleJwt\EncryptAdapters;

use Qbhy\SimpleJwt\AbstractEncrypter;

class CryptEncrypter extends AbstractEncrypter
{
    public function signature(string $signatureString): string
    {
        return crypt($signatureString, $this->secret);
    }

    public function alg(): string
    {
        return 'php-crypt';
    }

}