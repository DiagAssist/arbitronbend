<?php
namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;



/**
* @ORM\Entity()
* @ORM\Table(name="t_users"),
*      uniqueConstraints={@ORM\UniqueConstraint(name="users_email_unique",columns={"email"})}
* )
*/

class User implements UserInterface
{
  protected $plainPassword;
   /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;


    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string")
     */
    protected $nom;

    /**
     * @ORM\Column(type="string")
     */
    protected $prenom;

    /**
     * @ORM\Column(type="string")
     */
    protected $nomOrganisation;

    /**
     * @ORM\Column(type="integer")
     */
    protected $tel;

    /**
     * @ORM\Column(type="integer")
     */
    protected $telPro;

    /**
     * @ORM\Column(type="string")
     */
    protected $emailPro;

    /**
     * @ORM\Column(type="string")
     */
    protected $aproposArbitre;

    /**
     * @ORM\Column(type="blob")
     */
    protected $cvArbitre;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idPriv;




    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getNomOrganisation()
    {
        return $this->nomOrganisation;
    }

    public function setNomOrganisation($nomOrganisation)
    {
        $this->nomOrganisation = $nomOrganisation;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getTelPro()
    {
        return $this->telPro;
    }

    public function setTelPro($telPro)
    {
        $this->telPro = $telPro;
    }

    public function getEmailPro()
    {
        return $this->emailPro;
    }

    public function setEmailPro($emailPro)
    {
        $this->emailPro = $emailPro;
    }

    public function getAproposArbitre()
    {
        return $this->aproposArbitre;
    }

    public function setAproposArbitre($aproposArbitre)
    {
        $this->aproposArbitre = $aproposArbitre;
    }

    public function getCVArbitre()
    {
        return $this->cvArbitre;
    }

    public function setCVArbitre($cvArbitre)
    {
        $this->cvArbitre = $cvArbitre;
    }

    public function getIdPriv()
    {
        return $this->idPriv;
    }

    public function setIdPriv($idPriv)
    {
        $this->idPriv = $idPriv;
    }

    public function eraseCredentials()
    {
       // Suppression des données sensibles
       $this->plainPassword = null;
    }

/**************************************************************/
   public function getRoles()
   {
       return [];
   }

   public function getSalt()
   {
       return null;
   }

   public function getUsername()
   {
       return $this->email;
   }
/*************************************************************/

}
