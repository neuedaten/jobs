<?php
namespace Neuedaten\Jobs\Domain\Model;


/***
 *
 * This file is part of the "Jobs" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Bastian Schwabe <bas@neuedaten.de>, Neuedaten
 *
 ***/
/**
 * Location
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * lat
     * 
     * @var string
     */
    protected $lat = '';

    /**
     * lng
     * 
     * @var string
     */
    protected $lng = '';

    /**
     * address
     * 
     * @var string
     */
    protected $address = '';

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the lat
     * 
     * @return string $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Sets the lat
     * 
     * @param string $lat
     * @return void
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * Returns the lng
     * 
     * @return string $lng
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Sets the lng
     * 
     * @param string $lng
     * @return void
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}
