<?php

namespace UsePack\IikoCloud\Entity\Requests\CreateOrder;

use UsePack\IikoCloud\Entity\Requests\BaseRequest;

class RegularCustomer extends BaseRequest
{
    protected string $type = 'regular';

    /**
     * Existing customer ID in RMS.
     *
     * - If null - the phone number is searched in database, otherwise the new customer is created in RMS.
     */
    protected ?string $id;

    /**
     * Name of customer.
     *
     * - [ 0 .. 60 ] characters.
     * - Required for new customers (i.e. if "id" == null) Not required if "id" specified.
     */
    protected ?string $name;

    /**
     * Last name.
     *
     * - [ 0 .. 60 ] characters.
     */
    protected ?string $surname;

    /**
     * Comment.
     *
     * - [ 0 .. 60 ] characters
     */
    protected ?string $comment;

    /**
     * Date of birth.
     *
     * - [ 0 .. 60 ] characters
     * - <yyyy-MM-dd HH:mm:ss.fff>
     */
    protected ?string $birthdate;

    /**
     * Email.
     */
    protected ?string $email;

    /**
     * Whether customer receives order status notification messages.
     */
    protected ?bool $shouldReceiveOrderStatusNotifications;

    /**
     * Gender.
     *
     * Enum: "NotSpecified" "Male" "Female"
     */
    protected ?string $gender;

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    public function setBirthdate(?string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function setShouldReceiveOrderStatusNotifications(?bool $shouldReceiveOrderStatusNotifications): void
    {
        $this->shouldReceiveOrderStatusNotifications = $shouldReceiveOrderStatusNotifications;
    }

    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }
}
