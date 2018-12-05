<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 05.12.18
 * Time: 20:06
 */

namespace App\Others;

use InvalidArgumentException;
use Ramsey\Uuid\Codec\OrderedTimeCodec;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Doctrine\UuidBinaryOrderedTimeType;

class UuidVarbinaryType  extends UuidBinaryOrderedTimeType
{
    /**
     * @var string
     */
    const NAME = 'uuid_varbinary_type';

    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     *
     * @param array                                     $fieldDeclaration
     * @param \Doctrine\DBAL\Platforms\AbstractPlatform $platform
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
        if(isset($fieldDeclaration['length'])){
            return "VARBINARY (".$fieldDeclaration['length'].")";
        }else{
            return "VARBINARY (1024)";
        }
    }

}