<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FootericonsRepository")
 * @Vich\Uploadable()
 */
class Footericons
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thumb;

    /**
     * @Vich\UploadableField(mapping = "iconsthumb", fileNameProperty="thumb")
     */
    private $thumbFile;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $link;


    //added
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    public function __construct()
    {
        $this->status = true;
        $this->updatedate = new \DateTime();
    }

    public function getThumbFile()
    {
        return $this->thumbFile;
    }

    public function setThumbFile($thumbFile): void
    {
        $this->thumbFile = $thumbFile;
        if($thumbFile)
        {
            $this->updatedate = new \DateTime();
        }
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUpdatedate(): ?\DateTimeInterface
    {
        return $this->updatedate;
    }

    public function setUpdatedate(\DateTimeInterface $updatedate): self
    {
        $this->updatedate = $updatedate;

        return $this;
    }
   //added end



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThumb(): ?string
    {
        return $this->thumb;
    }

    public function setThumb(string $thumb): self
    {
        $this->thumb = $thumb;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }
    public function __Tostring()
    {
        return $this->thumb;
    }
}
