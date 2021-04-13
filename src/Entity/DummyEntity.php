<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DummyEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DummyEntityRepository::class)
 */
class DummyEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $normalBool = false;

    /**
     * @ORM\Column(type="boolean")
     * @ApiProperty(attributes={"openapi_context"={"type"="boolean", "example"="false", "default"="false"}})
     */
    private $forcedBool = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $typedBoolNormal = false;

    /**
     * @ORM\Column(type="boolean")
     * @ApiProperty(attributes={"openapi_context"={"type"="boolean", "example"="false", "default"="false"}})
     */
    private bool $typedBoolForced = false;

    /**
     * @ORM\Column(type="boolean")
     */
    public $publicBool = false;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stringProp = "hello world";

    /**
     * @ORM\Column(type="array")
     */
    private $arrayProp = ['a' => 1, 'b' => 2, 'c' => 'hello'];

    /**
     * @ORM\Column(type="integer")
     */
    private $intProp = 123;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNormalBool(): ?bool
    {
        return $this->normalBool;
    }

    public function setNormalBool(?bool $normalBool): self
    {
        $this->normalBool = $normalBool;

        return $this;
    }

    public function getForcedBool(): ?bool
    {
        return $this->forcedBool;
    }

    public function setForcedBool(?bool $forcedBool): self
    {
        $this->forcedBool = $forcedBool;

        return $this;
    }

    public function getStringProp(): ?string
    {
        return $this->stringProp;
    }

    public function setStringProp(string $stringProp): self
    {
        $this->stringProp = $stringProp;

        return $this;
    }

    public function getArrayProp(): ?array
    {
        return $this->arrayProp;
    }

    public function setArrayProp(array $arrayProp): self
    {
        $this->arrayProp = $arrayProp;

        return $this;
    }

    public function getTypedBoolNormal(): ?bool
    {
        return $this->typedBoolNormal;
    }

    public function setTypedBoolNormal(bool $typedBoolNormal): self
    {
        $this->typedBoolNormal = $typedBoolNormal;

        return $this;
    }

    public function getTypedBoolForced(): ?bool
    {
        return $this->typedBoolForced;
    }

    public function setTypedBoolForced(bool $typedBoolForced): self
    {
        $this->typedBoolForced = $typedBoolForced;

        return $this;
    }

    public function getPublicBool(): ?bool
    {
        return $this->publicBool;
    }

    public function setPublicBool(bool $publicBool): self
    {
        $this->publicBool = $publicBool;

        return $this;
    }

    public function getIntProp(): ?int
    {
        return $this->intProp;
    }

    public function setIntProp(int $intProp): self
    {
        $this->intProp = $intProp;

        return $this;
    }
}
