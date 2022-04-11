<?php

namespace App\PCloud\Schema\Output;

use App\PCloud\Schema\Core\OutputSchemaTrait;
use DateTime;

class UserInfoScheme
{
    use OutputSchemaTrait;

    protected ?bool $cryptoSetup = null;
    protected ?int $plan = null;
    protected ?bool $cryptoSubscription = null;
    protected ?int $userId = null;
    protected ?int $result = null;
    protected ?int $publicLinkQuota = null;
    protected ?DateTime $premiumExpires = null;
    protected ?string $email = null;
    protected ?int $trashRevRetentionDays = null;
    protected ?string $auth = null;
    protected ?bool $emailVerified = null;
    protected ?bool $usedPubLinkBranding = null;
    protected ?string $currency = null;
    protected ?bool $agreedWithPp = null;
    protected ?bool $hasPassword = null;
    protected ?int $quota = null;
    protected ?bool $cryptoLifetime = null;
    protected ?bool $premium = null;
    protected ?bool $premiumLifetime = null;
    protected ?bool $business = null;
    protected ?int $usedQuota = null;
    protected ?string $language = null;
    protected ?bool $hasPaidRelocation = null;
    protected ?DateTime $registered = null;
    protected ?array $journey = null;
    protected ?array $planParams = null;

    /**
     * @return bool|null
     */
    public function getCryptoSetup(): ?bool
    {
        return $this->cryptoSetup;
    }

    /**
     * @param bool|null $cryptoSetup
     * @return UserInfoScheme
     */
    public function setCryptoSetup(?bool $cryptoSetup): UserInfoScheme
    {
        $this->cryptoSetup = $cryptoSetup;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPlan(): ?int
    {
        return $this->plan;
    }

    /**
     * @param int|null $plan
     * @return UserInfoScheme
     */
    public function setPlan(?int $plan): UserInfoScheme
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCryptoSubscription(): ?bool
    {
        return $this->cryptoSubscription;
    }

    /**
     * @param bool|null $cryptoSubscription
     * @return UserInfoScheme
     */
    public function setCryptoSubscription(?bool $cryptoSubscription): UserInfoScheme
    {
        $this->cryptoSubscription = $cryptoSubscription;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     * @return UserInfoScheme
     */
    public function setUserId(?int $userId): UserInfoScheme
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }

    /**
     * @param int|null $result
     * @return UserInfoScheme
     */
    public function setResult(?int $result): UserInfoScheme
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPublicLinkQuota(): ?int
    {
        return $this->publicLinkQuota;
    }

    /**
     * @param int|null $publicLinkQuota
     * @return UserInfoScheme
     */
    public function setPublicLinkQuota(?int $publicLinkQuota): UserInfoScheme
    {
        $this->publicLinkQuota = $publicLinkQuota;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getPremiumExpires(): ?DateTime
    {
        return $this->premiumExpires;
    }

    /**
     * @param DateTime|null $premiumExpires
     * @return UserInfoScheme
     */
    public function setPremiumExpires(?DateTime $premiumExpires): UserInfoScheme
    {
        $this->premiumExpires = $premiumExpires;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return UserInfoScheme
     */
    public function setEmail(?string $email): UserInfoScheme
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTrashRevRetentionDays(): ?int
    {
        return $this->trashRevRetentionDays;
    }

    /**
     * @param int|null $trashRevRetentionDays
     * @return UserInfoScheme
     */
    public function setTrashRevRetentionDays(?int $trashRevRetentionDays): UserInfoScheme
    {
        $this->trashRevRetentionDays = $trashRevRetentionDays;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuth(): ?string
    {
        return $this->auth;
    }

    /**
     * @param string|null $auth
     * @return UserInfoScheme
     */
    public function setAuth(?string $auth): UserInfoScheme
    {
        $this->auth = $auth;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEmailVerified(): ?bool
    {
        return $this->emailVerified;
    }

    /**
     * @param bool|null $emailVerified
     * @return UserInfoScheme
     */
    public function setEmailVerified(?bool $emailVerified): UserInfoScheme
    {
        $this->emailVerified = $emailVerified;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUsedPubLinkBranding(): ?bool
    {
        return $this->usedPubLinkBranding;
    }

    /**
     * @param bool|null $usedPubLinkBranding
     * @return UserInfoScheme
     */
    public function setUsedPubLinkBranding(?bool $usedPubLinkBranding): UserInfoScheme
    {
        $this->usedPubLinkBranding = $usedPubLinkBranding;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return UserInfoScheme
     */
    public function setCurrency(?string $currency): UserInfoScheme
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAgreedWithPp(): ?bool
    {
        return $this->agreedWithPp;
    }

    /**
     * @param bool|null $agreedWithPp
     * @return UserInfoScheme
     */
    public function setAgreedWithPp(?bool $agreedWithPp): UserInfoScheme
    {
        $this->agreedWithPp = $agreedWithPp;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasPassword(): ?bool
    {
        return $this->hasPassword;
    }

    /**
     * @param bool|null $hasPassword
     * @return UserInfoScheme
     */
    public function setHasPassword(?bool $hasPassword): UserInfoScheme
    {
        $this->hasPassword = $hasPassword;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuota(): ?int
    {
        return $this->quota;
    }

    /**
     * @param int|null $quota
     * @return UserInfoScheme
     */
    public function setQuota(?int $quota): UserInfoScheme
    {
        $this->quota = $quota;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCryptoLifetime(): ?bool
    {
        return $this->cryptoLifetime;
    }

    /**
     * @param bool|null $cryptoLifetime
     * @return UserInfoScheme
     */
    public function setCryptoLifetime(?bool $cryptoLifetime): UserInfoScheme
    {
        $this->cryptoLifetime = $cryptoLifetime;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPremium(): ?bool
    {
        return $this->premium;
    }

    /**
     * @param bool|null $premium
     * @return UserInfoScheme
     */
    public function setPremium(?bool $premium): UserInfoScheme
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPremiumLifetime(): ?bool
    {
        return $this->premiumLifetime;
    }

    /**
     * @param bool|null $premiumLifetime
     * @return UserInfoScheme
     */
    public function setPremiumLifetime(?bool $premiumLifetime): UserInfoScheme
    {
        $this->premiumLifetime = $premiumLifetime;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getBusiness(): ?bool
    {
        return $this->business;
    }

    /**
     * @param bool|null $business
     * @return UserInfoScheme
     */
    public function setBusiness(?bool $business): UserInfoScheme
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUsedQuota(): ?int
    {
        return $this->usedQuota;
    }

    /**
     * @param int|null $usedQuota
     * @return UserInfoScheme
     */
    public function setUsedQuota(?int $usedQuota): UserInfoScheme
    {
        $this->usedQuota = $usedQuota;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return UserInfoScheme
     */
    public function setLanguage(?string $language): UserInfoScheme
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getHasPaidRelocation(): ?bool
    {
        return $this->hasPaidRelocation;
    }

    /**
     * @param bool|null $hasPaidRelocation
     * @return UserInfoScheme
     */
    public function setHasPaidRelocation(?bool $hasPaidRelocation): UserInfoScheme
    {
        $this->hasPaidRelocation = $hasPaidRelocation;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getRegistered(): ?DateTime
    {
        return $this->registered;
    }

    /**
     * @param DateTime|null $registered
     * @return UserInfoScheme
     */
    public function setRegistered(?DateTime $registered): UserInfoScheme
    {
        $this->registered = $registered;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getJourney(): ?array
    {
        return $this->journey;
    }

    /**
     * @param array|null $journey
     * @return UserInfoScheme
     */
    public function setJourney(?array $journey): UserInfoScheme
    {
        $this->journey = $journey;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPlanParams(): ?array
    {
        return $this->planParams;
    }

    /**
     * @param array|null $planParams
     * @return UserInfoScheme
     */
    public function setPlanParams(?array $planParams): UserInfoScheme
    {
        $this->planParams = $planParams;
        return $this;
    }
}