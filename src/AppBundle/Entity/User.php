<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;
use DateTime;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use Symfony\Component\Validator\Constraints as Assert;

use FOS\UserBundle\Model\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
        /**
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         */
        protected $nom;

        /**
         * @ORM\Column(type="string", length=255,  nullable=true)
         *
         *
         */
        protected $prenom;


        /**
         * @ORM\Column(type="string", length=20, nullable=true)
         *
         *
         */
        protected $tel;

        /**
         * @ORM\Column(type="string", length=20, nullable=true)
         *
         *
         */
        protected $pays;

        /**
         * @ORM\Column(type="string", length=20, nullable=true)
         *
         * 
         */
        protected $langue;

        /**
         * @return mixed
         */
        public function getPays()
        {
            return $this->pays;
        }

        /**
         * @param mixed $pays
         */
        public function setPays($pays)
        {
            $this->pays = $pays;
        }

        /**
         * @return mixed
         */
        public function getLangue()
        {
            return $this->langue;
        }

        /**
         * @param mixed $langue
         */
        public function setLangue($langue)
        {
            $this->langue = $langue;
        }


        /**
         * @ORM\Column(type="string", length=1, nullable=true)
         *
         */
        protected $sexe;



        /**
         * @var Assert\DateTime
         *
         * @ORM\Column(name="firstLogin", type="datetime")
         */
        protected $firstLogin;


        /**
         * One user has One adresse.
         * @OneToOne(targetEntity="Adresse",cascade={"persist"})
         * @JoinColumn(name="adresse_id", referencedColumnName="id")
         */
        protected $adresse;


        /**
         * One user has One photo.
         * @OneToOne(targetEntity="Photo",cascade={"persist"})
         * @JoinColumn(name="photo_id", referencedColumnName="id")
         */
        protected $photo;
    
        public function __construct()
        {
            parent::__construct();
            // your own logic
            $this->firstLogin = new DateTime();
        }



    /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $nom
         */
        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getTel()
        {
            return $this->tel;
        }

        /**
         * @param mixed $tel
         */
        public function setTel($tel)
        {
            $this->tel = $tel;
        }

        /**
         * @return mixed
         */
        public function getSexe()
        {
            return $this->sexe;
        }

        /**
         * @param mixed $sexe
         */
        public function setSexe($sexe)
        {
            $this->sexe = $sexe;
        }

        /**
         * @return Assert\DateTime
         */
        public function getFirstLogin()
        {
            return $this->firstLogin;
        }

        /**
         * @param Assert\DateTime $firstLogin
         */
        public function setFirstLogin($firstLogin)
        {
            $this->firstLogin = $firstLogin;
        }

        /**
         * @return mixed
         */
        public function getAdresse()
        {
            return $this->adresse;
        }

        /**
         * @param mixed $adresse
         */
        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }

        public function setEmail($email)
        {
            $email = is_null($email) ? '' : $email;
            parent::setEmail($email);
            $this->setUsername($email);

            return $this;
        }
   





    
    

    /**
     * Set photo
     *
     * @param \AppBundle\Entity\Photo $photo
     *
     * @return User
     */
    public function setPhoto(\AppBundle\Entity\Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \AppBundle\Entity\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
