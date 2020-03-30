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
 * Job
 */
class Job extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * teaser
     * 
     * @var string
     */
    protected $teaser = '';

    /**
     * text
     * 
     * @var string
     */
    protected $text = '';

    /**
     * image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * file
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * date
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * contact
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Contact>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $contact = null;

    /**
     * field
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Field>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $field = null;

    /**
     * level
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Level>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $level = null;

    /**
     * location
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Location>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $location = null;

    /**
     * content
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Content>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $content = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->file = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->contact = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->field = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->level = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->location = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->content = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

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
     * Returns the teaser
     * 
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     * 
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the text
     * 
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     * 
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
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
     * Adds a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function addFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->file->attach($file);
    }

    /**
     * Removes a FileReference
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove The FileReference to be removed
     * @return void
     */
    public function removeFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove)
    {
        $this->file->detach($fileToRemove);
    }

    /**
     * Returns the file
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the file
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $file
     * @return void
     */
    public function setFile(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $file)
    {
        $this->file = $file;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Adds a Contact
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Contact $contact
     * @return void
     */
    public function addContact(\Neuedaten\Jobs\Domain\Model\Contact $contact)
    {
        $this->contact->attach($contact);
    }

    /**
     * Removes a Contact
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Contact $contactToRemove The Contact to be removed
     * @return void
     */
    public function removeContact(\Neuedaten\Jobs\Domain\Model\Contact $contactToRemove)
    {
        $this->contact->detach($contactToRemove);
    }

    /**
     * Returns the contact
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Contact> $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets the contact
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Contact> $contact
     * @return void
     */
    public function setContact(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Adds a Field
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Field $field
     * @return void
     */
    public function addField(\Neuedaten\Jobs\Domain\Model\Field $field)
    {
        $this->field->attach($field);
    }

    /**
     * Removes a Field
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Field $fieldToRemove The Field to be removed
     * @return void
     */
    public function removeField(\Neuedaten\Jobs\Domain\Model\Field $fieldToRemove)
    {
        $this->field->detach($fieldToRemove);
    }

    /**
     * Returns the field
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Field> $field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets the field
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Field> $field
     * @return void
     */
    public function setField(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $field)
    {
        $this->field = $field;
    }

    /**
     * Adds a Level
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Level $level
     * @return void
     */
    public function addLevel(\Neuedaten\Jobs\Domain\Model\Level $level)
    {
        $this->level->attach($level);
    }

    /**
     * Removes a Level
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Level $levelToRemove The Level to be removed
     * @return void
     */
    public function removeLevel(\Neuedaten\Jobs\Domain\Model\Level $levelToRemove)
    {
        $this->level->detach($levelToRemove);
    }

    /**
     * Returns the level
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Level> $level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets the level
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Level> $level
     * @return void
     */
    public function setLevel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $level)
    {
        $this->level = $level;
    }

    /**
     * Adds a Location
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Location $location
     * @return void
     */
    public function addLocation(\Neuedaten\Jobs\Domain\Model\Location $location)
    {
        $this->location->attach($location);
    }

    /**
     * Removes a Location
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Location $locationToRemove The Location to be removed
     * @return void
     */
    public function removeLocation(\Neuedaten\Jobs\Domain\Model\Location $locationToRemove)
    {
        $this->location->detach($locationToRemove);
    }

    /**
     * Returns the location
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Location> $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Location> $location
     * @return void
     */
    public function setLocation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $location)
    {
        $this->location = $location;
    }

    /**
     * Adds a Content
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Content $content
     * @return void
     */
    public function addContent(\Neuedaten\Jobs\Domain\Model\Content $content)
    {
        $this->content->attach($content);
    }

    /**
     * Removes a Content
     * 
     * @param \Neuedaten\Jobs\Domain\Model\Content $contentToRemove The Content to be removed
     * @return void
     */
    public function removeContent(\Neuedaten\Jobs\Domain\Model\Content $contentToRemove)
    {
        $this->content->detach($contentToRemove);
    }

    /**
     * Returns the content
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Content> $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Neuedaten\Jobs\Domain\Model\Content> $content
     * @return void
     */
    public function setContent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $content)
    {
        $this->content = $content;
    }
}
