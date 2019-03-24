<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orden
 *
 * @ORM\Table(name="orden")
 * @ORM\Entity
 */
class Orden
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="n_ot", type="integer", nullable=false)
     */
    private $nOt;

    /**
     * @var string
     *
     * @ORM\Column(name="farm_name", type="string", length=100, nullable=false)
     */
    private $farmName;

    /**
     * @var int
     *
     * @ORM\Column(name="wtg", type="integer", nullable=false)
     */
    private $wtg;

    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=100, nullable=false)
     */
    private $cliente;

    /**
     * @var string
     *
     * @ORM\Column(name="sc", type="string", length=50, nullable=false)
     */
    private $sc;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", length=100, nullable=false)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisor", type="string", length=100, nullable=false)
     */
    private $supervisor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ini", type="date", nullable=false)
     */
    private $fechaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="date", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="mm", type="string", length=10, nullable=false)
     */
    private $mm;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=false)
     */
    private $pais;

    /**
     * @var int
     *
     * @ORM\Column(name="p_kwh", type="integer", nullable=false)
     */
    private $pKwh;

    /**
     * @var float
     *
     * @ORM\Column(name="h_lineaok", type="float", precision=10, scale=0, nullable=false)
     */
    private $hLineaok;

    /**
     * @var float
     *
     * @ORM\Column(name="h_tok", type="float", precision=10, scale=0, nullable=false)
     */
    private $hTok;

    /**
     * @var string
     *
     * @ORM\Column(name="e_grua", type="string", length=50, nullable=false)
     */
    private $eGrua;

    /**
     * @var string
     *
     * @ORM\Column(name="t1", type="string", length=50, nullable=false)
     */
    private $t1;

    /**
     * @var string
     *
     * @ORM\Column(name="t1_empresa", type="string", length=50, nullable=false)
     */
    private $t1Empresa;

    /**
     * @var int
     *
     * @ORM\Column(name="t1_codigo", type="integer", nullable=false)
     */
    private $t1Codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="t2", type="string", length=50, nullable=false)
     */
    private $t2;

    /**
     * @var string
     *
     * @ORM\Column(name="t2_empresa", type="string", length=50, nullable=false)
     */
    private $t2Empresa;

    /**
     * @var int
     *
     * @ORM\Column(name="t2_codigo", type="integer", nullable=false)
     */
    private $t2Codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="t3", type="string", length=50, nullable=false)
     */
    private $t3;

    /**
     * @var string
     *
     * @ORM\Column(name="t3_empresa", type="string", length=50, nullable=false)
     */
    private $t3Empresa;

    /**
     * @var int
     *
     * @ORM\Column(name="t3_codigo", type="integer", nullable=false)
     */
    private $t3Codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="t4", type="string", length=50, nullable=false)
     */
    private $t4;

    /**
     * @var string
     *
     * @ORM\Column(name="t4_empresa", type="string", length=50, nullable=false)
     */
    private $t4Empresa;

    /**
     * @var int
     *
     * @ORM\Column(name="t4_codigo", type="integer", nullable=false)
     */
    private $t4Codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="a_n_pala", type="string", length=50, nullable=false)
     */
    private $aNPala;

    /**
     * @var float
     *
     * @ORM\Column(name="a_p_pala", type="float", precision=10, scale=0, nullable=false)
     */
    private $aPPala;

    /**
     * @var string
     *
     * @ORM\Column(name="a_planta", type="string", length=10, nullable=false)
     */
    private $aPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="a_p_final", type="string", length=10, nullable=false)
     */
    private $aPFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="a_t_intervencion", type="string", length=50, nullable=false)
     */
    private $aTIntervencion;

    /**
     * @var string
     *
     * @ORM\Column(name="b_n_pala", type="string", length=50, nullable=false)
     */
    private $bNPala;

    /**
     * @var float
     *
     * @ORM\Column(name="b_p_pala", type="float", precision=10, scale=0, nullable=false)
     */
    private $bPPala;

    /**
     * @var string
     *
     * @ORM\Column(name="b_planta", type="string", length=50, nullable=false)
     */
    private $bPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="b_p_final", type="string", length=50, nullable=false)
     */
    private $bPFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="b_t_intervencion", type="string", length=50, nullable=false)
     */
    private $bTIntervencion;

    /**
     * @var string
     *
     * @ORM\Column(name="c_n_pala", type="string", length=50, nullable=false)
     */
    private $cNPala;

    /**
     * @var float
     *
     * @ORM\Column(name="c_p_pala", type="float", precision=10, scale=0, nullable=false)
     */
    private $cPPala;

    /**
     * @var string
     *
     * @ORM\Column(name="c_planta", type="string", length=50, nullable=false)
     */
    private $cPlanta;

    /**
     * @var string
     *
     * @ORM\Column(name="c_p_final", type="string", length=50, nullable=false)
     */
    private $cPFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="c_t_intervencion", type="string", length=50, nullable=false)
     */
    private $cTIntervencion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNOt(): ?int
    {
        return $this->nOt;
    }

    public function setNOt(int $nOt): self
    {
        $this->nOt = $nOt;

        return $this;
    }

    public function getFarmName(): ?string
    {
        return $this->farmName;
    }

    public function setFarmName(string $farmName): self
    {
        $this->farmName = $farmName;

        return $this;
    }

    public function getWtg(): ?int
    {
        return $this->wtg;
    }

    public function setWtg(int $wtg): self
    {
        $this->wtg = $wtg;

        return $this;
    }

    public function getCliente(): ?string
    {
        return $this->cliente;
    }

    public function setCliente(string $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getSc(): ?string
    {
        return $this->sc;
    }

    public function setSc(string $sc): self
    {
        $this->sc = $sc;

        return $this;
    }

    public function getResponsable(): ?string
    {
        return $this->responsable;
    }

    public function setResponsable(string $responsable): self
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getSupervisor(): ?string
    {
        return $this->supervisor;
    }

    public function setSupervisor(string $supervisor): self
    {
        $this->supervisor = $supervisor;

        return $this;
    }

    public function getFechaIni(): ?\DateTimeInterface
    {
        return $this->fechaIni;
    }

    public function setFechaIni(\DateTimeInterface $fechaIni): self
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getMm(): ?string
    {
        return $this->mm;
    }

    public function setMm(string $mm): self
    {
        $this->mm = $mm;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getPKwh(): ?int
    {
        return $this->pKwh;
    }

    public function setPKwh(int $pKwh): self
    {
        $this->pKwh = $pKwh;

        return $this;
    }

    public function getHLineaok(): ?float
    {
        return $this->hLineaok;
    }

    public function setHLineaok(float $hLineaok): self
    {
        $this->hLineaok = $hLineaok;

        return $this;
    }

    public function getHTok(): ?float
    {
        return $this->hTok;
    }

    public function setHTok(float $hTok): self
    {
        $this->hTok = $hTok;

        return $this;
    }

    public function getEGrua(): ?string
    {
        return $this->eGrua;
    }

    public function setEGrua(string $eGrua): self
    {
        $this->eGrua = $eGrua;

        return $this;
    }

    public function getT1(): ?string
    {
        return $this->t1;
    }

    public function setT1(string $t1): self
    {
        $this->t1 = $t1;

        return $this;
    }

    public function getT1Empresa(): ?string
    {
        return $this->t1Empresa;
    }

    public function setT1Empresa(string $t1Empresa): self
    {
        $this->t1Empresa = $t1Empresa;

        return $this;
    }

    public function getT1Codigo(): ?int
    {
        return $this->t1Codigo;
    }

    public function setT1Codigo(int $t1Codigo): self
    {
        $this->t1Codigo = $t1Codigo;

        return $this;
    }

    public function getT2(): ?string
    {
        return $this->t2;
    }

    public function setT2(string $t2): self
    {
        $this->t2 = $t2;

        return $this;
    }

    public function getT2Empresa(): ?string
    {
        return $this->t2Empresa;
    }

    public function setT2Empresa(string $t2Empresa): self
    {
        $this->t2Empresa = $t2Empresa;

        return $this;
    }

    public function getT2Codigo(): ?int
    {
        return $this->t2Codigo;
    }

    public function setT2Codigo(int $t2Codigo): self
    {
        $this->t2Codigo = $t2Codigo;

        return $this;
    }

    public function getT3(): ?string
    {
        return $this->t3;
    }

    public function setT3(string $t3): self
    {
        $this->t3 = $t3;

        return $this;
    }

    public function getT3Empresa(): ?string
    {
        return $this->t3Empresa;
    }

    public function setT3Empresa(string $t3Empresa): self
    {
        $this->t3Empresa = $t3Empresa;

        return $this;
    }

    public function getT3Codigo(): ?int
    {
        return $this->t3Codigo;
    }

    public function setT3Codigo(int $t3Codigo): self
    {
        $this->t3Codigo = $t3Codigo;

        return $this;
    }

    public function getT4(): ?string
    {
        return $this->t4;
    }

    public function setT4(string $t4): self
    {
        $this->t4 = $t4;

        return $this;
    }

    public function getT4Empresa(): ?string
    {
        return $this->t4Empresa;
    }

    public function setT4Empresa(string $t4Empresa): self
    {
        $this->t4Empresa = $t4Empresa;

        return $this;
    }

    public function getT4Codigo(): ?int
    {
        return $this->t4Codigo;
    }

    public function setT4Codigo(int $t4Codigo): self
    {
        $this->t4Codigo = $t4Codigo;

        return $this;
    }

    public function getANPala(): ?string
    {
        return $this->aNPala;
    }

    public function setANPala(string $aNPala): self
    {
        $this->aNPala = $aNPala;

        return $this;
    }

    public function getAPPala(): ?float
    {
        return $this->aPPala;
    }

    public function setAPPala(float $aPPala): self
    {
        $this->aPPala = $aPPala;

        return $this;
    }

    public function getAPlanta(): ?string
    {
        return $this->aPlanta;
    }

    public function setAPlanta(string $aPlanta): self
    {
        $this->aPlanta = $aPlanta;

        return $this;
    }

    public function getAPFinal(): ?string
    {
        return $this->aPFinal;
    }

    public function setAPFinal(string $aPFinal): self
    {
        $this->aPFinal = $aPFinal;

        return $this;
    }

    public function getATIntervencion(): ?string
    {
        return $this->aTIntervencion;
    }

    public function setATIntervencion(string $aTIntervencion): self
    {
        $this->aTIntervencion = $aTIntervencion;

        return $this;
    }

    public function getBNPala(): ?string
    {
        return $this->bNPala;
    }

    public function setBNPala(string $bNPala): self
    {
        $this->bNPala = $bNPala;

        return $this;
    }

    public function getBPPala(): ?float
    {
        return $this->bPPala;
    }

    public function setBPPala(float $bPPala): self
    {
        $this->bPPala = $bPPala;

        return $this;
    }

    public function getBPlanta(): ?string
    {
        return $this->bPlanta;
    }

    public function setBPlanta(string $bPlanta): self
    {
        $this->bPlanta = $bPlanta;

        return $this;
    }

    public function getBPFinal(): ?string
    {
        return $this->bPFinal;
    }

    public function setBPFinal(string $bPFinal): self
    {
        $this->bPFinal = $bPFinal;

        return $this;
    }

    public function getBTIntervencion(): ?string
    {
        return $this->bTIntervencion;
    }

    public function setBTIntervencion(string $bTIntervencion): self
    {
        $this->bTIntervencion = $bTIntervencion;

        return $this;
    }

    public function getCNPala(): ?string
    {
        return $this->cNPala;
    }

    public function setCNPala(string $cNPala): self
    {
        $this->cNPala = $cNPala;

        return $this;
    }

    public function getCPPala(): ?float
    {
        return $this->cPPala;
    }

    public function setCPPala(float $cPPala): self
    {
        $this->cPPala = $cPPala;

        return $this;
    }

    public function getCPlanta(): ?string
    {
        return $this->cPlanta;
    }

    public function setCPlanta(string $cPlanta): self
    {
        $this->cPlanta = $cPlanta;

        return $this;
    }

    public function getCPFinal(): ?string
    {
        return $this->cPFinal;
    }

    public function setCPFinal(string $cPFinal): self
    {
        $this->cPFinal = $cPFinal;

        return $this;
    }

    public function getCTIntervencion(): ?string
    {
        return $this->cTIntervencion;
    }

    public function setCTIntervencion(string $cTIntervencion): self
    {
        $this->cTIntervencion = $cTIntervencion;

        return $this;
    }


}
