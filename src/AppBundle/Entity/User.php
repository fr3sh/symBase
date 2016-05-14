<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać Imię.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Imię jest zbyt krótka.",
     *     maxMessage="Imię jest zbyt długie.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $imie;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać Nazwisko.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Nazwisko jest zbyt krótka.",
     *     maxMessage="Nazwisko jest zbyt długie.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nazwisko;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać Fimrę.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="Firma jest zbyt krótka.",
     *     maxMessage="Firma jest zbyt długa.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $firma;

    /**
     * @ORM\Column(type="integer",name="nip", nullable=false)
     *
     * @Assert\NotBlank(message="Proszę podać Fimrę.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=10,
     *     max=10,
     *     minMessage="Firma jest zbyt krótka.",
     *     maxMessage="Firma jest zbyt długa.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nip;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać ulicę.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="Ulica jest zbyt krótka.",
     *     maxMessage="Ulica jest zbyt długa.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $ulica;

    /**
     * @ORM\Column(type="integer",name="nrdomu", nullable=false)
     *
     * @Assert\NotBlank(message="Proszę podać numer domu.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=1,
     *     max=5,
     *     minMessage="Numer jest zbyt krótki.",
     *     maxMessage="Numer jest zbyt długi.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nrdomu;

    /**
     * @ORM\Column(type="integer",name="nrmieszkania", nullable=true)
     *
     */
    protected $nrmieszkania;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać kod pocztowy.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Kod pocztowy jest zbyt krótki.",
     *     maxMessage="Kod pocztowy jest zbyt długi.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $kod;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać miasto.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=2,
     *     max=255,
     *     minMessage="Miasto jest zbyt krótkie.",
     *     maxMessage="Miasto jest zbyt długie.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $miasto;

    /**
     * @ORM\Column(type="integer",name="nrtelefonu", nullable=false)
     *
     * @Assert\NotBlank(message="Proszę podać numer telefonu.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=7,
     *     max=11,
     *     minMessage="Numer telefonu jest zbyt krótki.",
     *     maxMessage="Numer telefonu jest zbyt długi.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nrtelefonu;

    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $abonament;

    public function getImie() {
        return $this->imie;
    }

    public function getNazwisko() {
        return $this->nazwisko;
    }

    public function getFirma() {
        return $this->firma;
    }

    public function getNip() {
        return $this->nip;
    }

    public function getUlica() {
        return $this->ulica;
    }

    public function getNrdomu() {
        return $this->nrdomu;
    }

    public function getNrmieszkania() {
        return $this->nrmieszkania;
    }

    public function getKod() {
        return $this->kod;
    }

    public function getMiasto() {
        return $this->miasto;
    }

    public function getNrtelefonu() {
        return $this->nrtelefonu;
    }

    public function getAbonament() {
        return $this->abonament;
    }

    public function setImie($imie) {
        $this->imie = $imie;
    }

    public function setNazwisko($nazwisko) {
        $this->nazwisko = $nazwisko;
    }

    public function setFirma($firma) {
        $this->firma = $firma;
    }

    public function setNip($nip) {
        $this->nip = $nip;
    }

    public function setUlica($ulica) {
        $this->ulica = $ulica;
    }

    public function setNrdomu($nrdomu) {
        $this->nrdomu = $nrdomu;
    }

    public function setNrmieszkania($nrmieszkania) {
        $this->nrmieszkania = $nrmieszkania;
    }

    public function setKod($kod) {
        $this->kod = $kod;
    }

    public function setMiasto($miasto) {
        $this->miasto = $miasto;
    }

    public function setNrtelefonu($nrtelefonu) {
        $this->nrtelefonu = $nrtelefonu;
    }

    public function setAbonament($abonament) {
        $this->abonament = $abonament;
    }

    
    public function __construct() {
        parent::__construct();
        // your own logic
    }

}
