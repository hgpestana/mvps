<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Escola
 *
 * @ORM\Table(name="escola")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EscolaRepository")
 */
class Escola
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="morada", type="text", nullable=true)
     */
    private $morada;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=8, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="localidade", type="string", length=50, nullable=true)
     */
    private $localidade;

    /**
     * @var string
     *
     * @ORM\Column(name="freguesia", type="string", length=50, nullable=true)
     */
    private $freguesia;

    /**
     * @var string
     *
     * @ORM\Column(name="concelho", type="string", length=50, nullable=true)
     */
    private $concelho;

    /**
     * @var string
     *
     * @ORM\Column(name="distrito", type="string", length=50, nullable=true)
     */
    private $distrito;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="nif", type="string", length=11, unique=true)
     */
    private $nif;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=13, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="telemovel", type="string", length=13, nullable=true)
     */
    private $telemovel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=50, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=50, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=50, nullable=true)
     */
    private $skype;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Escola
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set morada
     *
     * @param string $morada
     *
     * @return Escola
     */
    public function setMorada($morada)
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get morada
     *
     * @return string
     */
    public function getMorada()
    {
        return $this->morada;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Escola
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set localidade
     *
     * @param string $localidade
     *
     * @return Escola
     */
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;

        return $this;
    }

    /**
     * Get localidade
     *
     * @return string
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * Set freguesia
     *
     * @param string $freguesia
     *
     * @return Escola
     */
    public function setFreguesia($freguesia)
    {
        $this->freguesia = $freguesia;

        return $this;
    }

    /**
     * Get freguesia
     *
     * @return string
     */
    public function getFreguesia()
    {
        return $this->freguesia;
    }

    /**
     * Set concelho
     *
     * @param string $concelho
     *
     * @return Escola
     */
    public function setConcelho($concelho)
    {
        $this->concelho = $concelho;

        return $this;
    }

    /**
     * Get concelho
     *
     * @return string
     */
    public function getConcelho()
    {
        return $this->concelho;
    }

    /**
     * Set distrito
     *
     * @param string $distrito
     *
     * @return Escola
     */
    public function setDistrito($distrito)
    {
        $this->distrito = $distrito;

        return $this;
    }

    /**
     * Get distrito
     *
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Escola
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Escola
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Escola
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set telemovel
     *
     * @param string $telemovel
     *
     * @return Escola
     */
    public function setTelemovel($telemovel)
    {
        $this->telemovel = $telemovel;

        return $this;
    }

    /**
     * Get telemovel
     *
     * @return string
     */
    public function getTelemovel()
    {
        return $this->telemovel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Escola
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Escola
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Escola
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Escola
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }
}

