<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatisticRepository")
 */
class Statistic
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dartCount;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $checkoutChances;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t6;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t7;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t8;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t9;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s10;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d10;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t10;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s11;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d11;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t11;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s12;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d12;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t12;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s13;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d13;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t13;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s14;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d14;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t14;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s16;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d16;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t16;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s17;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d17;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t17;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s18;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d18;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t18;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s19;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d19;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t19;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s20;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d20;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_t20;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_s25;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stat_d25;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="statistics")
     * @ORM\JoinColumn(nullable=false)
     */
    private $player;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDartCount(): ?int
    {
        return $this->dartCount;
    }

    public function setDartCount(?int $dartCount): self
    {
        $this->dartCount = $dartCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCheckoutChances()
    {
        return $this->checkoutChances;
    }

    /**
     * @param mixed $checkoutChances
     */
    public function setCheckoutChances($checkoutChances): void
    {
        $this->checkoutChances = $checkoutChances;
    }

    /**
     * @return mixed
     */
    public function getStatS1()
    {
        return $this->stat_s1;
    }

    /**
     * @param mixed $stat_s1
     */
    public function setStatS1($stat_s1): void
    {
        $this->stat_s1 = $stat_s1;
    }

    /**
     * @return mixed
     */
    public function getStatD1()
    {
        return $this->stat_d1;
    }

    /**
     * @param mixed $stat_d1
     */
    public function setStatD1($stat_d1): void
    {
        $this->stat_d1 = $stat_d1;
    }

    /**
     * @return mixed
     */
    public function getStatT1()
    {
        return $this->stat_t1;
    }

    /**
     * @param mixed $stat_t1
     */
    public function setStatT1($stat_t1): void
    {
        $this->stat_t1 = $stat_t1;
    }

    /**
     * @return mixed
     */
    public function getStatS2()
    {
        return $this->stat_s2;
    }

    /**
     * @param mixed $stat_s2
     */
    public function setStatS2($stat_s2): void
    {
        $this->stat_s2 = $stat_s2;
    }

    /**
     * @return mixed
     */
    public function getStatD2()
    {
        return $this->stat_d2;
    }

    /**
     * @param mixed $stat_d2
     */
    public function setStatD2($stat_d2): void
    {
        $this->stat_d2 = $stat_d2;
    }

    /**
     * @return mixed
     */
    public function getStatT2()
    {
        return $this->stat_t2;
    }

    /**
     * @param mixed $stat_t2
     */
    public function setStatT2($stat_t2): void
    {
        $this->stat_t2 = $stat_t2;
    }

    /**
     * @return mixed
     */
    public function getStatS3()
    {
        return $this->stat_s3;
    }

    /**
     * @param mixed $stat_s3
     */
    public function setStatS3($stat_s3): void
    {
        $this->stat_s3 = $stat_s3;
    }

    /**
     * @return mixed
     */
    public function getStatD3()
    {
        return $this->stat_d3;
    }

    /**
     * @param mixed $stat_d3
     */
    public function setStatD3($stat_d3): void
    {
        $this->stat_d3 = $stat_d3;
    }

    /**
     * @return mixed
     */
    public function getStatT3()
    {
        return $this->stat_t3;
    }

    /**
     * @param mixed $stat_t3
     */
    public function setStatT3($stat_t3): void
    {
        $this->stat_t3 = $stat_t3;
    }

    /**
     * @return mixed
     */
    public function getStatS4()
    {
        return $this->stat_s4;
    }

    /**
     * @param mixed $stat_s4
     */
    public function setStatS4($stat_s4): void
    {
        $this->stat_s4 = $stat_s4;
    }

    /**
     * @return mixed
     */
    public function getStatD4()
    {
        return $this->stat_d4;
    }

    /**
     * @param mixed $stat_d4
     */
    public function setStatD4($stat_d4): void
    {
        $this->stat_d4 = $stat_d4;
    }

    /**
     * @return mixed
     */
    public function getStatT4()
    {
        return $this->stat_t4;
    }

    /**
     * @param mixed $stat_t4
     */
    public function setStatT4($stat_t4): void
    {
        $this->stat_t4 = $stat_t4;
    }

    /**
     * @return mixed
     */
    public function getStatS5()
    {
        return $this->stat_s5;
    }

    /**
     * @param mixed $stat_s5
     */
    public function setStatS5($stat_s5): void
    {
        $this->stat_s5 = $stat_s5;
    }

    /**
     * @return mixed
     */
    public function getStatD5()
    {
        return $this->stat_d5;
    }

    /**
     * @param mixed $stat_d5
     */
    public function setStatD5($stat_d5): void
    {
        $this->stat_d5 = $stat_d5;
    }

    /**
     * @return mixed
     */
    public function getStatT5()
    {
        return $this->stat_t5;
    }

    /**
     * @param mixed $stat_t5
     */
    public function setStatT5($stat_t5): void
    {
        $this->stat_t5 = $stat_t5;
    }

    /**
     * @return mixed
     */
    public function getStatS6()
    {
        return $this->stat_s6;
    }

    /**
     * @param mixed $stat_s6
     */
    public function setStatS6($stat_s6): void
    {
        $this->stat_s6 = $stat_s6;
    }

    /**
     * @return mixed
     */
    public function getStatD6()
    {
        return $this->stat_d6;
    }

    /**
     * @param mixed $stat_d6
     */
    public function setStatD6($stat_d6): void
    {
        $this->stat_d6 = $stat_d6;
    }

    /**
     * @return mixed
     */
    public function getStatT6()
    {
        return $this->stat_t6;
    }

    /**
     * @param mixed $stat_t6
     */
    public function setStatT6($stat_t6): void
    {
        $this->stat_t6 = $stat_t6;
    }

    /**
     * @return mixed
     */
    public function getStatS7()
    {
        return $this->stat_s7;
    }

    /**
     * @param mixed $stat_s7
     */
    public function setStatS7($stat_s7): void
    {
        $this->stat_s7 = $stat_s7;
    }

    /**
     * @return mixed
     */
    public function getStatD7()
    {
        return $this->stat_d7;
    }

    /**
     * @param mixed $stat_d7
     */
    public function setStatD7($stat_d7): void
    {
        $this->stat_d7 = $stat_d7;
    }

    /**
     * @return mixed
     */
    public function getStatT7()
    {
        return $this->stat_t7;
    }

    /**
     * @param mixed $stat_t7
     */
    public function setStatT7($stat_t7): void
    {
        $this->stat_t7 = $stat_t7;
    }

    /**
     * @return mixed
     */
    public function getStatS8()
    {
        return $this->stat_s8;
    }

    /**
     * @param mixed $stat_s8
     */
    public function setStatS8($stat_s8): void
    {
        $this->stat_s8 = $stat_s8;
    }

    /**
     * @return mixed
     */
    public function getStatD8()
    {
        return $this->stat_d8;
    }

    /**
     * @param mixed $stat_d8
     */
    public function setStatD8($stat_d8): void
    {
        $this->stat_d8 = $stat_d8;
    }

    /**
     * @return mixed
     */
    public function getStatT8()
    {
        return $this->stat_t8;
    }

    /**
     * @param mixed $stat_t8
     */
    public function setStatT8($stat_t8): void
    {
        $this->stat_t8 = $stat_t8;
    }

    /**
     * @return mixed
     */
    public function getStatS9()
    {
        return $this->stat_s9;
    }

    /**
     * @param mixed $stat_s9
     */
    public function setStatS9($stat_s9): void
    {
        $this->stat_s9 = $stat_s9;
    }

    /**
     * @return mixed
     */
    public function getStatD9()
    {
        return $this->stat_d9;
    }

    /**
     * @param mixed $stat_d9
     */
    public function setStatD9($stat_d9): void
    {
        $this->stat_d9 = $stat_d9;
    }

    /**
     * @return mixed
     */
    public function getStatT9()
    {
        return $this->stat_t9;
    }

    /**
     * @param mixed $stat_t9
     */
    public function setStatT9($stat_t9): void
    {
        $this->stat_t9 = $stat_t9;
    }

    /**
     * @return mixed
     */
    public function getStatS10()
    {
        return $this->stat_s10;
    }

    /**
     * @param mixed $stat_s10
     */
    public function setStatS10($stat_s10): void
    {
        $this->stat_s10 = $stat_s10;
    }

    /**
     * @return mixed
     */
    public function getStatD10()
    {
        return $this->stat_d10;
    }

    /**
     * @param mixed $stat_d10
     */
    public function setStatD10($stat_d10): void
    {
        $this->stat_d10 = $stat_d10;
    }

    /**
     * @return mixed
     */
    public function getStatT10()
    {
        return $this->stat_t10;
    }

    /**
     * @param mixed $stat_t10
     */
    public function setStatT10($stat_t10): void
    {
        $this->stat_t10 = $stat_t10;
    }

    /**
     * @return mixed
     */
    public function getStatS11()
    {
        return $this->stat_s11;
    }

    /**
     * @param mixed $stat_s11
     */
    public function setStatS11($stat_s11): void
    {
        $this->stat_s11 = $stat_s11;
    }

    /**
     * @return mixed
     */
    public function getStatD11()
    {
        return $this->stat_d11;
    }

    /**
     * @param mixed $stat_d11
     */
    public function setStatD11($stat_d11): void
    {
        $this->stat_d11 = $stat_d11;
    }

    /**
     * @return mixed
     */
    public function getStatT11()
    {
        return $this->stat_t11;
    }

    /**
     * @param mixed $stat_t11
     */
    public function setStatT11($stat_t11): void
    {
        $this->stat_t11 = $stat_t11;
    }

    /**
     * @return mixed
     */
    public function getStatS12()
    {
        return $this->stat_s12;
    }

    /**
     * @param mixed $stat_s12
     */
    public function setStatS12($stat_s12): void
    {
        $this->stat_s12 = $stat_s12;
    }

    /**
     * @return mixed
     */
    public function getStatD12()
    {
        return $this->stat_d12;
    }

    /**
     * @param mixed $stat_d12
     */
    public function setStatD12($stat_d12): void
    {
        $this->stat_d12 = $stat_d12;
    }

    /**
     * @return mixed
     */
    public function getStatT12()
    {
        return $this->stat_t12;
    }

    /**
     * @param mixed $stat_t12
     */
    public function setStatT12($stat_t12): void
    {
        $this->stat_t12 = $stat_t12;
    }

    /**
     * @return mixed
     */
    public function getStatS13()
    {
        return $this->stat_s13;
    }

    /**
     * @param mixed $stat_s13
     */
    public function setStatS13($stat_s13): void
    {
        $this->stat_s13 = $stat_s13;
    }

    /**
     * @return mixed
     */
    public function getStatD13()
    {
        return $this->stat_d13;
    }

    /**
     * @param mixed $stat_d13
     */
    public function setStatD13($stat_d13): void
    {
        $this->stat_d13 = $stat_d13;
    }

    /**
     * @return mixed
     */
    public function getStatT13()
    {
        return $this->stat_t13;
    }

    /**
     * @param mixed $stat_t13
     */
    public function setStatT13($stat_t13): void
    {
        $this->stat_t13 = $stat_t13;
    }

    /**
     * @return mixed
     */
    public function getStatS14()
    {
        return $this->stat_s14;
    }

    /**
     * @param mixed $stat_s14
     */
    public function setStatS14($stat_s14): void
    {
        $this->stat_s14 = $stat_s14;
    }

    /**
     * @return mixed
     */
    public function getStatD14()
    {
        return $this->stat_d14;
    }

    /**
     * @param mixed $stat_d14
     */
    public function setStatD14($stat_d14): void
    {
        $this->stat_d14 = $stat_d14;
    }

    /**
     * @return mixed
     */
    public function getStatT14()
    {
        return $this->stat_t14;
    }

    /**
     * @param mixed $stat_t14
     */
    public function setStatT14($stat_t14): void
    {
        $this->stat_t14 = $stat_t14;
    }

    /**
     * @return mixed
     */
    public function getStatS15()
    {
        return $this->stat_s15;
    }

    /**
     * @param mixed $stat_s15
     */
    public function setStatS15($stat_s15): void
    {
        $this->stat_s15 = $stat_s15;
    }

    /**
     * @return mixed
     */
    public function getStatD15()
    {
        return $this->stat_d15;
    }

    /**
     * @param mixed $stat_d15
     */
    public function setStatD15($stat_d15): void
    {
        $this->stat_d15 = $stat_d15;
    }

    /**
     * @return mixed
     */
    public function getStatT15()
    {
        return $this->stat_t15;
    }

    /**
     * @param mixed $stat_t15
     */
    public function setStatT15($stat_t15): void
    {
        $this->stat_t15 = $stat_t15;
    }

    /**
     * @return mixed
     */
    public function getStatS16()
    {
        return $this->stat_s16;
    }

    /**
     * @param mixed $stat_s16
     */
    public function setStatS16($stat_s16): void
    {
        $this->stat_s16 = $stat_s16;
    }

    /**
     * @return mixed
     */
    public function getStatD16()
    {
        return $this->stat_d16;
    }

    /**
     * @param mixed $stat_d16
     */
    public function setStatD16($stat_d16): void
    {
        $this->stat_d16 = $stat_d16;
    }

    /**
     * @return mixed
     */
    public function getStatT16()
    {
        return $this->stat_t16;
    }

    /**
     * @param mixed $stat_t16
     */
    public function setStatT16($stat_t16): void
    {
        $this->stat_t16 = $stat_t16;
    }

    /**
     * @return mixed
     */
    public function getStatS17()
    {
        return $this->stat_s17;
    }

    /**
     * @param mixed $stat_s17
     */
    public function setStatS17($stat_s17): void
    {
        $this->stat_s17 = $stat_s17;
    }

    /**
     * @return mixed
     */
    public function getStatD17()
    {
        return $this->stat_d17;
    }

    /**
     * @param mixed $stat_d17
     */
    public function setStatD17($stat_d17): void
    {
        $this->stat_d17 = $stat_d17;
    }

    /**
     * @return mixed
     */
    public function getStatT17()
    {
        return $this->stat_t17;
    }

    /**
     * @param mixed $stat_t17
     */
    public function setStatT17($stat_t17): void
    {
        $this->stat_t17 = $stat_t17;
    }

    /**
     * @return mixed
     */
    public function getStatS18()
    {
        return $this->stat_s18;
    }

    /**
     * @param mixed $stat_s18
     */
    public function setStatS18($stat_s18): void
    {
        $this->stat_s18 = $stat_s18;
    }

    /**
     * @return mixed
     */
    public function getStatD18()
    {
        return $this->stat_d18;
    }

    /**
     * @param mixed $stat_d18
     */
    public function setStatD18($stat_d18): void
    {
        $this->stat_d18 = $stat_d18;
    }

    /**
     * @return mixed
     */
    public function getStatT18()
    {
        return $this->stat_t18;
    }

    /**
     * @param mixed $stat_t18
     */
    public function setStatT18($stat_t18): void
    {
        $this->stat_t18 = $stat_t18;
    }

    /**
     * @return mixed
     */
    public function getStatS19()
    {
        return $this->stat_s19;
    }

    /**
     * @param mixed $stat_s19
     */
    public function setStatS19($stat_s19): void
    {
        $this->stat_s19 = $stat_s19;
    }

    /**
     * @return mixed
     */
    public function getStatD19()
    {
        return $this->stat_d19;
    }

    /**
     * @param mixed $stat_d19
     */
    public function setStatD19($stat_d19): void
    {
        $this->stat_d19 = $stat_d19;
    }

    /**
     * @return mixed
     */
    public function getStatT19()
    {
        return $this->stat_t19;
    }

    /**
     * @param mixed $stat_t19
     */
    public function setStatT19($stat_t19): void
    {
        $this->stat_t19 = $stat_t19;
    }

    /**
     * @return mixed
     */
    public function getStatS20()
    {
        return $this->stat_s20;
    }

    /**
     * @param mixed $stat_s20
     */
    public function setStatS20($stat_s20): void
    {
        $this->stat_s20 = $stat_s20;
    }

    /**
     * @return mixed
     */
    public function getStatD20()
    {
        return $this->stat_d20;
    }

    /**
     * @param mixed $stat_d20
     */
    public function setStatD20($stat_d20): void
    {
        $this->stat_d20 = $stat_d20;
    }

    /**
     * @return mixed
     */
    public function getStatT20()
    {
        return $this->stat_t20;
    }

    /**
     * @param mixed $stat_t20
     */
    public function setStatT20($stat_t20): void
    {
        $this->stat_t20 = $stat_t20;
    }

    /**
     * @return mixed
     */
    public function getStatS25()
    {
        return $this->stat_s25;
    }

    /**
     * @param mixed $stat_s25
     */
    public function setStatS25($stat_s25): void
    {
        $this->stat_s25 = $stat_s25;
    }

    /**
     * @return mixed
     */
    public function getStatD25()
    {
        return $this->stat_d25;
    }

    /**
     * @param mixed $stat_d25
     */
    public function setStatD25($stat_d25): void
    {
        $this->stat_d25 = $stat_d25;
    }

    public function getPlayer(): ?User
    {
        return $this->player;
    }

    public function setPlayer(?User $player): self
    {
        $this->player = $player;

        return $this;
    }
}
