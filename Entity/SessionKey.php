<?php

namespace TeLiXj\PhpbbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'sessions_keys')]
#[ORM\Entity(readOnly: true)]
class SessionKey
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\Column(name: 'key_id', length: 32)]
    private ?string $key = null;

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    #[ORM\ManyToOne(targetEntity: 'User')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'user_id', nullable: false)]
    private ?User $user = null;

    #[ORM\Column(name: 'last_ip', length: 40)]
    private ?string $lastIp = null;

    #[ORM\Column(name: 'last_login')]
    private ?int $lastLogin = null;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getLastIp(): ?string
    {
        return $this->lastIp;
    }

    public function setLastIp(string $lastIp): self
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    public function getLastLogin(): ?int
    {
        return $this->lastLogin;
    }

    public function setLastLogin(int $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }
}
