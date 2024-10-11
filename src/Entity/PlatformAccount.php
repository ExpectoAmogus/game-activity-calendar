<?php

namespace App\Entity;

use App\Repository\PlatformAccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatformAccountRepository::class)]
class PlatformAccount
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $platformName;

    #[ORM\Column(type: 'string', length: 255)]
    private string $platformUserId;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $accessToken;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $refreshToken;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'platformAccounts')]
    private ?User $user;

    public function getId(): int
    {
        return $this->id;
    }

    public function getPlatformName(): string
    {
        return $this->platformName;
    }

    public function setPlatformName(string $platformName): void
    {
        $this->platformName = $platformName;
    }

    public function getPlatformUserId(): string
    {
        return $this->platformUserId;
    }

    public function setPlatformUserId(string $platformUserId): void
    {
        $this->platformUserId = $platformUserId;
    }

    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
}
