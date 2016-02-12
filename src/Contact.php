<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address_info;

        function __construct($contact_name, $contact_phone, $contact_address_info)
        {
            $this->name = $contact_name;
            $this->phone = $contact_phone;
            $this->address_info = $contact_address_info
        }

    // Getters, Setters
        function getName()
        {
            return $this->name;
        }

        function setName()
        {
            $this->name = (string) $new_contact;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function setPhone()
        {
            $this->phone = (string) $new_phone;
        }

        function getAddressInfo()
        {
            return $this->address_info;
        }

        function setAddressInfo()
        {
            $this->address_info = (string) $new_address_info;
        }

    // SAVE, getAll(), deleteAll()
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

    }
?>
