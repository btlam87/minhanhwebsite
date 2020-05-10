<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SlideRepository")
 * @Vich\Uploadable()
 */
class Slide
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Thumb;

    /**
     * @Vich\UploadableField(mapping = "sliderthumb", fileNameProperty="thumb")
     */
    private $thumbFile;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

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
        return $this->Thumb;
    }

    public function setThumb(string $Thumb): self
    {
        $this->Thumb = $Thumb;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
