<?php

namespace SalmaAbdelhady\RoomsXML\Model\Request;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use SalmaAbdelhady\RoomsXML\Model\Hotel;

/**
 * Hotels sent to RoomsXML on search
 * @XmlRoot(name="Hotels")
 */
class Hotels
{
    /**
   * @var array tag
   * @XmlElement(cdata=false)
   * @Type(name="array<integer>")
   * @XmlList(inline = true, entry = "Id")
   * @SerializedName("Id")
   */
    private $Hotels;

    /**
     * HotelStayDetails constructor.
     */
    public function __construct()
    {
        $this->Hotels = new ArrayCollection();
    }


    /**
     * Return hotels
     *
     * @return ArrayCollection
     */
    public function getHotels()
    {
        return $this->Hotels;
    }

    /**
     *
     * Set Hotels tag
     *
     * @param ArrayCollection $Hotels
     */
    public function setHotels($Hotels)
    {
        $this->Hotels = $Hotels;
    }

    /**
     * Add hotel to Hotels tag
     *
     * @param mixed $hotel
     */
    public function addHotel($hotel): void
    {
        $this->Hotels->add($hotel);
    }

}
