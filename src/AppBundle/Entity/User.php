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
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $registerIp;
    
     /**
     * @ORM\Column(type="string", length=255)
     *
     */
    protected $lastIp;
    
     /**
     * @ORM\Column(type="integer",name="pesel", nullable=true)
     *
     */
    protected $pesel;
    
    /**
     * @ORM\Column(type="integer",name="nip", nullable=false)
     *
     * @Assert\NotBlank(message="Proszę podać Nip.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=10,
     *     max=10,
     *     minMessage="Nip jest zbyt krutki.",
     *     maxMessage="Nip jest za długi.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $nip;
    
    
     /**
     * @ORM\Column(type="integer",name="regon", nullable=true)
     *
     */
    protected $regon;


    
    

        function getId() {
            return $this->id;
        }

        function getRegon() {
            return $this->regon;
        }

        function getPesel() {
            return $this->pesel;
        }

        function getRegisterIp() {
            return $this->registerIp;
        }

        function getLastIp() {
            return $this->lastIp;
        }

        function getNewsletter() {
            return $this->newsletter;
        }

        function getNotification() {
            return $this->notification;
        }

        function getCreatedById() {
            return $this->createdById;
        }

        function getCreationDate() {
            return $this->creationDate;
        }

        function getModifyById() {
            return $this->modifyById;
        }

        function getModificationDate() {
            return $this->modificationDate;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setRegon($regon) {
            $this->regon = $regon;
        }

        function setPesel($pesel) {
            $this->pesel = $pesel;
        }

        function setRegisterIp($registerIp) {
            $this->registerIp = $registerIp;
        }

        function setLastIp($lastIp) {
            $this->lastIp = $lastIp;
        }

        function setNewsletter($newsletter) {
            $this->newsletter = $newsletter;
        }

        function setNotification($notification) {
            $this->notification = $notification;
        }

        function setCreatedById($createdById) {
            $this->createdById = $createdById;
        }

        function setCreationDate(\DateTime $creationDate) {
            $this->creationDate = $creationDate;
        }

        function setModifyById($modifyById) {
            $this->modifyById = $modifyById;
        }

        function setModificationDate(\DateTime $modificationDate) {
            $this->modificationDate = $modificationDate;
        }

            
     /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;
    
    
     /**
     * @var boolean
     *
     * @ORM\Column(name="newsletter", type="boolean", nullable=false)
     */
    private $newsletter = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notification", type="boolean", nullable=false)
     */
    private $notification = true;
    
       /**
     * @var integer
     *
     * @ORM\Column(name="created_by_id", type="integer", nullable=true)
     */
    private $createdById;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="modify_by_id", type="integer", nullable=true)
     */
    private $modifyById;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification_date", type="datetime", nullable=true)
     */
    private $modificationDate;

    
      /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="Proszę podać ulicę.", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Ulica jest za krótka.",
     *     maxMessage="Za długa nazwa ulicy",
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

//    /**
//     * @var \DateTime
//     *
//     * @ORM\Column(name="last_login", type="datetime", nullable=true)
//     */
//    private $lastLogin;

    
    
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
    
    
//    /**
//     * Set lastLogin
//     *
//     * @param \DateTime $lastLogin
//     *
//     * @return User
//     */
//    public function setLastLogin($lastLogin) {
//        $this->lastLogin = $lastLogin;
//
//        return $this;
//    }
//    
//        /**
//     * Get lastLogin
//     *
//     * @return \DateTime
//     */
//    public function getLastLogin() {
//        return $this->lastLogin;
//    }

     /**
     * Set country
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return User
     */
    public function setCountry(\AppBundle\Entity\Country $country = null) {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry() {
        return $this->country;
    }

    
    public function __construct() {
        parent::__construct();
        // your own logic
    }

}
