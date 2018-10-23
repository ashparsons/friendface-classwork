<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
//use App\Entity\UserProfile;

class Avatar //extends UserProfile
{
   /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a JPG file.")
     * @Assert\File(mimeTypes={ "application/jpg" })
     */
    private $avatar;

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    } 
}

?>