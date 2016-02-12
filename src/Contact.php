<?php
    class Contact
    {
        private $name;
        private $phone;
        private $street;
        private $city;
        private $state;
        private $zip;

        function __construct($contact_name, $contact_phone, $contact_street, $contact_city, $contact_state, $contact_zip)
        {
            $this->name = $contact_name;
            $this->phone = $contact_phone;
            $this->street = $contact_street;
            $this->city = $contact_city;
            $this->state = $contact_state;
            $this->zip = $contact_zip;
        }

    // Getters, Setters
        // Name
        function getName()
        {
            return $this->name;
        }

        function setName()
        {
            $this->name = (string) $new_contact;
        }

        // Phone
        function getPhone()
        {
            return $this->phone;
        }

        function setPhone()
        {
            $this->phone = (string) $new_phone;
        }

        // Street
        function getStreet()
        {
            return $this->street;
        }

        function setStreet()
        {
            $this->street = (string) $new_street;
        }

        // City
        function getCity()
        {
            return $this->city;
        }

        function setCity()
        {
            $this->City = (string) $new_city;
        }

        // State
        function getState()
        {
            return $this->state;
        }

        function setState()
        {
            $this->state = (string) $new_state;
        }

        // State
        function getZip()
        {
            return $this->zip;
        }

        function setZip()
        {
            $this->zip = (string) $new_zip;
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
